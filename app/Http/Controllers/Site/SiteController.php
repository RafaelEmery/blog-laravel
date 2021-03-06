<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Sobre;

class SiteController extends Controller
{
    public function index()
    {   
        $postDestacado = Post::where('destaque', true)->first();
        $posts = Post::where(function($query) {
            if (request()->get('categoria')) {
                $query->categoria(request()->get('categoria'));
            }
        })->where('destaque', false)->get();

        return view('site.index', compact('posts', 'postDestacado'));
    }

    public function post(Post $post)
    {   
        return view('site.post', compact('post'));
    }

    public function sobre()
    {   
        $info = Sobre::first();

        return view('site.sobre', compact('info'));
    }

    public function contato()
    {
        return view('site.contato');
    }
}
