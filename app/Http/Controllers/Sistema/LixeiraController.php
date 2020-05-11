<?php

namespace App\Http\Controllers\Sistema;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

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
        $postDeletado = Post::onlyTrashed()->where('id', $id)->forceDelete();

        return redirect()->back()
        ->with('success', 'O Post foi deletado com sucesso!');
    }

    public function restaurar($id) 
    {
        $postRestaurado = Post::onlyTrashed()->where('id', $id)->restore();

        return redirect()->back()
        ->with('success', 'O Post foi restaurado com sucesso!');
    }

    public function esvaziarLixeira() 
    {   
        $lixeira = Post::onlyTrashed()->get();

        foreach($lixeira as $item) {
            $item->forceDelete();
        }

        return redirect()->back()
        ->with('success', 'A Lixeira foi esvaziada com sucesso!');
    }
}
