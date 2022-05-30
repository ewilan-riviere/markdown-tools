<?php

namespace App\Http\Controllers;

use App\Services\DomService;
use Artesaos\SEOTools\Facades\SEOMeta;
use FluentDOM;
use Goutte\Client;
use Session;

class MainController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('Welcome');

        // Session::flush('post');
        $url_article = 'https://www.lesnumeriques.com/vie-du-net/proton-enfin-une-alternative-viable-a-l-environnement-google-n184033.html';
        // fluent dom
        // https:// gitlab.com/bookshelves-project/bookshelves-back/-/blob/9ad14c2ad619a186d48a7c5721ec4925c5b05d65/app/Services/ParserEngine/ParserEngine.php
        // $service = DomService::create($url_washington_post);

        // $document = FluentDOM::load(
        //     $service->body,
        //     'text/html',
        //     [FluentDOM\Loader\Options::ALLOW_FILE => true]
        // );

        // /** @var FluentDOM\DOM\Element $article_node */
        // $article_node = $document->getElementsByTagName('article')[0];

        // /** @var FluentDOM\DOM\Element $node */
        // foreach ($article_node->childNodes->getIterator() as $node) {
        //     dump($node);
        // }
        // $service->convert($article_node->textContent);

        $client = new Client();
        $crawler = $client->request('GET', $url_article);
        $out = [];

        // $crawler->getNode(1);
        // $crawler->filter('section > article')->each(function (\Symfony\Component\DomCrawler\Crawler $node) use (&$out) {
        //     // $url = $node->attr('href');
        //     // $name = trim($node->filter('.article__title')->text());
        //     dump($node->getNode(0));
        //     array_push($out, $node);
        // });
        $crawler->filter('div > div > p')->each(function (\Symfony\Component\DomCrawler\Crawler $node) use (&$out) {
            array_push($out, $node->html());
        });
        // dd($out);

        $article_html = null;
        foreach ($out as $html) {
            $article_html .= "<p>{$html}</p>";
        }

        // $client = new Client();
        // $crawler = $client->request('GET', 'https://www.lemonde.fr');
        // $out = [];

        // $crawler->filter('div.article > a')->each(function ($node) use (&$out) {
        //     $url = $node->attr('href');
        //     $name = trim($node->filter('.article__title')->text());
        //     array_push($out, [$name, $url]);
        // });
        // dd($out);
        // dd($crawler->html());

        // foreach ($document('//main') as $a) {
        //     $mains[] = $a;
        // }
        // $main = null;
        // if (array_key_exists(0, $mains)) {
        //     $main = $mains[0];
        // } else {
        //     return;
        // }

        // /** @var FluentDOM\DOM\Element $node */
        // foreach ($main as $node) {
        //     dump($node->textContent);
        // }

        return view('views.pages.index', compact('article_html'));
    }
}
