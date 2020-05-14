<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <form action=" {{route('sistema.comentarios.store', $post->id)}} " method="POST" enctype="multipart/form-data" id="contactForm">
                @csrf
                <h3>Escreva um comentário!</h3>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Nome</label>
                        <input type="text" name="autor" class="form-control" placeholder="Nome" id="autor" required data-validation-required-message="Insira seu nome.">
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
                        <textarea rows="5" name="conteudo" class="form-control" placeholder="Conteúdo" id="conteudo" required data-validation-required-message="Insira seu comentário."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
                </div>
            </form>

            <hr style="margin-top: 33px;">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h3>Comentários</h3>
        </div>
    </div>
</div>

<br>

@foreach ($post->comentarios as $comentario)

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                <h4 class="post-subtitle">
                    {{ $comentario->autor }}
                </h4>   
                </a>
                <p class="post-meta">
                    {{ $comentario->conteudo }}
                </p>
            </div>
        </div>
    </div>
</div>

@endforeach

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <hr>
        </div>
    </div>
</div>
