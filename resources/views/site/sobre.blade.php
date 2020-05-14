@extends('layout.templateSite')

@section('titulo', 'Sobre Nós')

@section('conteudo')
    
<!-- Page Header -->
<header class="masthead" style="background-image: url('templateSite/img/about-bg.jpg')">
<div class="overlay"></div>
<div class="container">
    <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        <div class="page-heading">
        <h1>Sobre o Rafa</h1>
        <span class="subheading">Esta é minha viagem!</span>
        </div>
    </div>
    </div>
</div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @if(isset($info))

            <p style="text-align: justify">
                {{ $info->textoSobre }}
            </p>
            <div style="text-align: center">
                <p>
                    <i class="fas fa-home"></i> &nbsp; {{ $info->endereco }}
                </p>
                <p>
                    <i class="fas fa-phone"></i> &nbsp; {{ $info->telefone }}
                </p>
                <p>
                    <i class="fas fa-envelope"></i> &nbsp; {{ $info->email }}
                </p>
                <p>
                    <i class="fas fa-wifi"></i> &nbsp; {{ $info->sitePessoal }}
                </p>
            </div>

            @endif
            
            @component('site.componentes.mapa')
                
            @endcomponent

            <hr>

        </div>
    </div>
</div>

@endsection