@extends('layout.templateSite')

@section('titulo', 'Contato')

@section('conteudo')

<!-- Page Header -->
<header class="masthead" style="background-image: url('img/contact-bg.jpg')">
<div class="overlay"></div>
<div class="container">
    <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        <div class="page-heading">
        <h1>Contact Me</h1>
        <span class="subheading">Have questions? I have answers.</span>
        </div>
    </div>
    </div>
</div>
</header>

<!-- Main Content -->
<div class="container">
<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
    <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
    <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
    <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
    <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
    <form action=" {{route('sistema.mensagens.store')}} " method="POST" enctype="multipart/form-data" id="contactForm">
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