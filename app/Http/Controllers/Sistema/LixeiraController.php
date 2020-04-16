<?php

namespace App\Http\Controllers\Sistema;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class LixeiraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postsLixeira = Post::onlyTrashed()->get();

        return view('sistema.lixeira.index', compact('postsLixeira'));
    }

    public function destroy($id)
    {
        $postDeletado = Post::onlyTrashed()->where('id', $id)->get();
        
        //Para deletar todos os models relacionados: ->history()->forceDelete()
        $postDeletado->forceDelete();

        return redirect()->back()->with('success', 'O Post foi deletado com sucesso!');
    }

    public function restaurar($id) 
    {
        $postRestaurado = Post::onlyTrashed()->where('id', $id)->get();

        dd($postRestaurado);

        $postRestaurado->restore();

        return redirect()->back()->with('success', 'O Post foi restaurado com sucesso!');
    }
}
