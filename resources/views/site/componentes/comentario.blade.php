<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <form action=" {{route('sistema.comentarios.store', $post->id)}} " method="POST" enctype="multipart/form-data" id="contactForm">
            @csrf
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Nome</label>
                    <input type="text" name="autor" class="form-control" placeholder="Nome" id="nome" required data-validation-required-message="Insira seu nome.">
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

@foreach ($post->comentarios as $comentario)

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                <h3 class="post-subtitle">
                    {{ $comentario->autor }}
                </h3>   
                </a>
                <p class="post-meta">
                    {{ $comentario->conteudo }}
                </p>
            </div>
        </div>
    </div>
</div>

@endforeach

<hr>