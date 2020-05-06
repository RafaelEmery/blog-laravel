<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function post()
    {
        return view('site.post');
    }

    public function sobre()
    {
        return view('site.sobre');
    }

    public function contato()
    {
        return view('site.contato');
    }
}
