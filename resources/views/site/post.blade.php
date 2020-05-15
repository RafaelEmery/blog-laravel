@extends('layout.templateSite')

@section('titulo', ' Rafa Talks - Post ')

@section('conteudo')

<!-- Page Header -->
<header class="masthead" style="background-image: url( {{asset($post->imagem) }} ); ">
<div class="overlay"></div>
<div class="container">
    <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-heading">
        <h1> {{ $post->titulo}} </h1>
        <h2 class="subheading"> {{ $post->subtitulo }} </h2>
        <span class="meta">Feito por
            <a href="#">{{ $post->autor }}</a>
            em {{ $post->custom_date }} <br><br>
            Palavras chave: <i>{{ $post->palavrasChave }}</i> <br><br>
            Categoria: <a href=" {{route('site.index', ['categoria' => $post->categoria])}} "><i>{{ $post->categoria }}</i></a> <br><br>
        </span>
        </div>
    </div>
    </div>
</div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
            <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>
                    {!! $post->conteudo !!}
                </p>

                <hr>
            </div>
        </div>
    </div>
</article>


@component('site.componentes.comentario', ['post' => $post])
    
@endcomponent

@endsection