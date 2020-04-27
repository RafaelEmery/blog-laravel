<?php

namespace App\Http\Controllers\Sistema;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Aux\Imagem;
use Validate;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $posts = Post::all();

        return view('sistema.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sistema.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'palavrasChave' => 'required',
            'categoria' => 'required',
            'conteudo' => 'required'  
        ]);

        $dados = $request->all();

        if ($request->hasFile('imagem')) {
            $dados['imagem'] = '';
            $post = Post::create($dados);
        }
        else {
            return redirect()->back()->with('danger', 'Insira uma imagem!');
        }

        $dados = Imagem::alterarImagem($dados, $request->imagem, $post->id);
        $post->update($dados);

        return redirect(route('sistema.posts.index'))
        ->with('success', 'O Post foi criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return json_encode($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postEditado = Post::find($id);

        return view('sistema.posts.edit', compact('postEditado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'palavrasChave' => 'required',
            'categoria' => 'required',
            'conteudo' => 'required'  
        ]);

        $dados = $request->all();

        if ($request->hasFile('imagem')) {
            $dados = Imagem::alterarImagem($dados, $request->imagem, $id);
        }
    
        $postEditado = Post::find($id);
        $postEditado->update($dados);
        
        return redirect(route('sistema.posts.index'))
        ->with('success', 'O Post foi editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postDeletado = Post::find($id);
        $postDeletado->delete();

        return redirect()->back()
        ->with('success', 'O Post foi deletado com sucesso!');
    }

    public function alternarDestaque($id) 
    {   
        $posts = Post::all();

        foreach ($posts as $post) {
            if ($post->id == $id) {
                if($post->destaque) {
                    return redirect()->back()
                    ->with('danger', 'Este Post já está em destaque!');
                }
                else {
                    $post->update([
                        'destaque' => true
                    ]);
                }
            }
            else {
                $post->update([
                    'destaque' => false
                ]);
            }
        }

        return redirect()->back()
        ->with('success', 'O Post foi destacado com sucesso!');
    }
}
