<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class SiteController extends Controller
{
    public function index()
    {
        $posts = Post::where('destaque', false)->latest()->get();
        $postDestacado = Post::where('destaque', true)->first();

        return view('site.index', compact('posts', 'postDestacado'));
    }

    public function post(Post $post)
    {   
        return view('site.post', compact('post'));
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
