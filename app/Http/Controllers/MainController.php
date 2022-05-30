<?php

namespace App\Http\Controllers;

use App\Services\DomService;
use Artesaos\SEOTools\Facades\SEOMeta;

class MainController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('Welcome');

        $url_article_lesnumeriques = 'https://www.lesnumeriques.com/vie-du-net/proton-enfin-une-alternative-viable-a-l-environnement-google-n184033.html';
        $url_article_franceinfo = 'https://la1ere.francetvinfo.fr/guadeloupe/journee-mondiale-de-lutte-contre-la-transphobie-et-l-homophobie-des-actes-anti-lgbt-en-hausse-1284644.html';
        // fluent dom
        // https:// gitlab.com/bookshelves-project/bookshelves-back/-/blob/9ad14c2ad619a186d48a7c5721ec4925c5b05d65/app/Services/ParserEngine/ParserEngine.php

        $service = DomService::create($url_article_franceinfo);
        $service->parse()
            ->convert()
        ;

        return view('views.pages.index', compact('service'));
    }
}
