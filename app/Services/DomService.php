<?php

namespace App\Services;

use DOMDocument;
use Goutte\Client;
use League\HTMLToMarkdown\HtmlConverter;
use Symfony\Component\DomCrawler\Crawler;

class DomService
{
    public Crawler $crawler;
    public string $markdown;
    public string $html;
    public bool $is_valid = false;

    public function __construct(
        public string $url
    ) {
    }

    public static function create(string $url): DomService
    {
        return new DomService($url);
    }

    public function parse(): DomService
    {
        $html = $this->fetch();

        $html = preg_replace_callback('/<img[^>]+\\>/i', function (array $matches) {
            $img = $matches[0];
            $doc = new DOMDocument();
            @$doc->loadHTML($img);
            $tags = $doc->getElementsByTagName('img');
            /** @var \DomElement $img_tag */
            $img_tag = $tags->item(0);
            if ($img_tag) {
                $src = $img_tag->getAttribute('src');
                return "<img src='{$src}' />";
            }
        }, $html);
        $html = preg_replace('/<audio[^>]+\\>/i', '', $html); // remove audio
        $html = preg_replace('!(<a\s[^>]+>)?<img([^>]+)src=""([^>]*)>(</a>)?!i', '', $html); // remove empty img
        $html = preg_replace("!(<a\\s[^>]+>)?<img([^>]+)src=''([^>]*)>(</a>)?!i", '', $html); // remove empty img alt

        $regex = '/<[^>]*class="[^"]*\bshare\b[^"]*"[^>]*>(.|\n)*?<\/(.|\n)*>/i';
        // $html = preg_replace($regex, '', $html);
        // preg_match_all($regex, $html, $matches);

        $regex = '/<aside([^>]+)>(.|\n)*?<\/aside>/i';
        $html = preg_replace($regex, '', $html);

        $regex = '/<[^>]*class="[^"]*\brelated\b[^"]*"[^>]*>(.|\n)*?<\/(.|\n)*?>/i';
        $html = preg_replace($regex, '', $html);

        $html = preg_replace('/class=".*?"/', '', $html);
        $html = preg_replace('/<p[^>]*><\\/p[^>]*>/', '', $html);

        $this->html = $html;
        $this->is_valid = $this->validate();

        return $this;
    }

    public function fetch(): string
    {
        $client = new Client();
        $this->crawler = $client->request('GET', $this->url);

        $node_main_key = 'main';
        $node_main_key_count = 0;
        $node_keys_testing = [
            'main',
            'article',
        ];
        $node_keys_testing_parsing = [];
        foreach ($node_keys_testing as $node_key) {
            $count = $this->crawler->filter($node_key)->count();
            $node_keys_testing_parsing[$node_key] = $count;
            if ($count > $node_main_key_count) {
                $node_main_key = $node_key;
                $node_main_key_count = $count;
            }
        }

        $out = [];
        $this->crawler->filter($node_main_key)->each(function (Crawler $node) use (&$out) {
            array_push($out, "<div>{$node->html()}</div>");
        });

        return implode('', $out);
    }

    public function convert(): DomService
    {
        $converter = new HtmlConverter();

        $converter->setOptions(['header_style' => 'atx']);
        $this->markdown = strip_tags($converter->convert($this->html));

        return $this;
    }

    private function validate(): bool
    {
        $is_valid = false;

        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        $dom->loadHTML($this->html);

        if (empty(libxml_get_errors())) {
            $is_valid = true;
        }

        return $is_valid;
    }
}
