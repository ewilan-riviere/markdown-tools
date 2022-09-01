<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Spatie\RouteAttributes\Attributes\Get;

class FrontController extends Controller
{
    #[Get('/', name: 'front.index')]
    public function index()
    {
        return view('front::pages.index');
    }
}
