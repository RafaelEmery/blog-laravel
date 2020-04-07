<?php

namespace App\Http\Controllers\Sistema;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
            'conteudo' => 'required'  
        ]);

        //Fazer atribuição para a imagem e um $postNovo->update()

        $dados = $request->all();
        $postNovo = Post::create($dados);
        return redirect(route('sistema.posts.index'))->with('success', 'O Post foi criado com sucesso!');
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
            'conteudo' => 'required'  
        ]);
        
        //Depois fazer função para se trabalhar com a Imagem

        $dados = $request->all();
        $postEditado = Post::find($id);
        $postEditado->update($dados);
        
        return redirect(route('sistema.posts.index'))->with('success', 'O Post foi editado com sucesso!');
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

        return redirect()->back()->with('success', 'O Post foi deletado com sucesso!');
    }

    public function alternarDestaque($id) 
    {   
        $postEncontrado = Post::find($id);

        if ($postEncontrado->destaque) {
            $postEncontrado->update([ 
                'destaque' => false
            ]);
        }
        else {
            $postEncontrado->update([ 
                'destaque' => true
            ]); 
        }

        return redirect()->back()->with('success', 'O Destaque foi atualizado com sucesso!');
    }

    public function alteraPropImagem($imagem) 
    {
        
    }
}
