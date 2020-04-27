<?php

namespace App\Aux;

class Imagem {

    public static function alterarImagem($dados, $imagem, $id)
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