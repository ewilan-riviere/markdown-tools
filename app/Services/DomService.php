<?php

namespace App\Services;

use Http;
use Illuminate\Http\Client\Response;
use League\HTMLToMarkdown\HtmlConverter;
use Session;
use Str;

class DomService
{
    public Response $response;
    public string $body;
    public string $article_markdown;
    public string $article_html;

    public function __construct(
        public string $url
    ) {
    }

    public static function create(string $url): DomService
    {
        $service = new DomService($url);

        if (Session::exists('post')) {
            $service->body = Session::get('post')[0];
        } else {
            $service->response = Http::get($url);
            $service->body = $service->response->body();
            Session::push('post', $service->body);
        }

        return $service;
    }

    public function convert(string $textContent): DomService
    {
        $converter = new HtmlConverter();

        $this->article_markdown = $converter->convert($textContent);
        $this->article_html = Str::markdown($this->article_markdown);

        return $this;
    }
}
