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

        $dados = Self::alterarPropImagem($dados, $request->imagem, $post->id);
        $post->update($dados);

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
            'palavrasChave' => 'required',
            'categoria' => 'required',
            'conteudo' => 'required'  
        ]);

        $dados = $request->all();

        if ($request->hasFile('imagem')) {
            $dados = Self::alterarPropImagem($dados, $request->imagem, $id);
        }
    
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

    public function alterarPropImagem($dados, $imagem, $id) 
    {   
        $numero = $id;
        $diretorio = '/imgBlog';
        $extensao = $imagem->getClientOriginalExtension();
        $nome = "Post_".$numero.".".$extensao;
        $imagem->move(public_path().$diretorio, 'imgBlog/'.$nome);
        $dados['imagem'] = $diretorio."/".$nome;

        return $dados;
    }
}
