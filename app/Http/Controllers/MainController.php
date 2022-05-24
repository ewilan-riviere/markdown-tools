<?php

namespace App\Http\Controllers;

use App\Services\DomService;
use Artesaos\SEOTools\Facades\SEOMeta;
use FluentDOM;

class MainController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('Welcome');

        // $url_washington_post = 'https://www.washingtonpost.com/nation/2022/05/24/george-fl
        // $service = DomService::create($url_washington_post);

        // $document = FluentDOM::load(
        //     $service->body,
        //     'text/html',
        //     [FluentDOM\Loader\Options::ALLOW_FILE => true]
        // );

        // /** @var FluentDOM\DOM\Element $body */
        // $body = $document->getElementsByTagName('body')[0];

        return view('views.pages.index');
    }
}
