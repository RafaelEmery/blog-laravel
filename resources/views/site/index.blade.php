@extends('layout.templateSite')

@section('titulo', 'RafaTalks')

@section('conteudo')

<!-- Page Header -->
<header class="masthead" style="background-image: url('templateSite/img/home-bg.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
            <h1>Rafa Talks</h1>
            <span class="subheading">Um blog que conta a vida do universitário brasileiro.</span>
            </div>
        </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="clearfix">
                <button type="button" class="btn btn-primary float-right" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Filtrar por categoria
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href=" {{route('site.index')}} ">Todas</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href=" {{route('site.index', ['categoria' => 'programacao'])}} ">Programação</a>
                    <a class="dropdown-item" href=" {{route('site.index', ['categoria' => 'universidade'])}} ">Universidade</a>
                    <a class="dropdown-item" href=" {{route('site.index', ['categoria' => 'entreterimento'])}} ">Entreterimento</a>
                    <a class="dropdown-item" href=" {{route('site.index', ['categoria' => 'esportes'])}} ">Esportes</a>
                    <a class="dropdown-item" href=" {{route('site.index', ['categoria' => 'vida'])}} ">Vida</a>
                </div>
              </div>
            
            
            {{-- <div class="clearfix">
                <a class="btn btn-primary float-right" href="#" >Escolher por categoria</a>
            </div> --}}
        
            @if (isset($postDestacado))
            <!-- Post destacado -->
            <div class="post-preview">
                <a href=" {{ route('site.post', $postDestacado) }} ">
                <h2 class="post-title">
                    {{ $postDestacado->titulo }}
                </h2>
                <h3 class="post-subtitle">
                    {{ $postDestacado->subtitulo }}
                </h3>   
                </a>
                <p class="post-meta">Feito por
                <a href="#"> {{ $postDestacado->autor }}</a>
                em {{ $postDestacado->custom_date }} </p>
                <small><span class="fas fa-thumbtack"></span>&nbsp;<i>Post destacado pela equipe RafaTalks</i></small>
            </div>

            <hr>

            @endif

            <!-- Posts listados -->
            @foreach($posts as $post)

            <div class="post-preview">
                <a href=" {{ route('site.post', $post) }} ">
                <h2 class="post-title">
                    {{ $post->titulo }}
                </h2>
                <h3 class="post-subtitle">
                    {{ $post->subtitulo }}
                </h3>
                </a>
                <p class="post-meta">Feito por
                <a href="#">{{ $post->autor }}</a>
                em {{ $post->custom_date }} </p>
            </div>

            <hr>
            
            @endforeach
        </div>
    </div>
</div>

@endsection