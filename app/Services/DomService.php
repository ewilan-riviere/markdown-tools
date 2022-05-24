<?php

namespace App\Services;

use Http;
use Illuminate\Http\Client\Response;

class DomService
{
    public Response $response;
    public string $body;

    public function __construct(
        public string $url
    ) {
    }

    public static function create(string $url): DomService
    {
        $service = new DomService($url);

        $service->response = Http::get($url);
        $service->body = $service->response->body();

        return $service;
    }
}
