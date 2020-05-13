@extends('layout.templateSite')

@section('titulo', 'Contato')

@section('conteudo')

<!-- Page Header -->
<header class="masthead" style="background-image: url('templateSite/img/contact-bg.jpg')">
<div class="overlay"></div>
<div class="container">
    <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        <div class="page-heading">
        <h1>Entre em contato</h1>
        <span class="subheading">Quer conversar, dar uma dica ou um feedback? Estou sempre aberto a uma interessante conversa!</span>
        </div>
    </div>
    </div>
</div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <p style="text-align: justify;">Preencha os campos do formulário e clique em enviar que sua mensagem irá chegar ao Rafa. Após isso, espere alguns dias ou horas que será você será respondido!</p>
        <form action=" {{route('sistema.contato.store')}} " method="POST" enctype="multipart/form-data" id="contactForm">
            @csrf
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="Nome" id="nome" required data-validation-required-message="Insira seu nome.">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="E-mail" id="email" required data-validation-required-message="Insira seu e-mail.">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Assunto</label>
                    <input type="text" name="assunto" class="form-control" placeholder="Assunto" id="assunto" required data-validation-required-message="Insira o assunto.">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Mensagem</label>
                    <textarea rows="5" name="conteudo" class="form-control" placeholder="Mensagem" id="mensagem" required data-validation-required-message="Insira sua mensagem"></textarea>
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
            </div>
        </form>
        </div>
    </div>
</div>

<hr>

@endsection