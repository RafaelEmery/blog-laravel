@extends('layout.templateSistema')

@section('conteudo')
    <h1>teste de posts e comentarios</h1>
    @foreach ($posts as $post)
        <h3>Titulo do Post: {{ $post->titulo }} + Id: {{ $post->id }} </h3>
        @foreach ($post->comentarios as $comentario)
            <h4>Autor do comentario: {{$comentario->autor}} </h4>
            <p> {{ $comentario->conteudo }} </p>    
        
        @endforeach

    @endforeach
@endsection