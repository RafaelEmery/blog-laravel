@extends('layout.templateSistema')

@section('conteudo')

<!-- Formulário para Editar um Post -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Editar um Post</h6>
    </div>
    <div class="card-body">
        <form action=" {{route('sistema.posts.update', $postEditado->id)}} " method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') 
            <div class="form-group">
                <label for="titulo"><strong>Título</strong></label>
                <input class="form-control" type="text" id="titulo" name="titulo" value=" {{ $postEditado->titulo }} ">
            </div>
            <div class="form-group">
                <label for="subtitulo"><strong>Subtítulo</strong></label>
                <input class="form-control" type="text" id="subtitulo" name="subtitulo" value=" {{ $postEditado->subtitulo }} ">
            </div>
            <div class="form-group">
                <label for="autor"><strong>Autor</strong></label>
                <input class="form-control" type="text" id="autor" name="autor" value=" {{ $postEditado->autor }} ">
                <small><strong>ATENÇÃO:</strong> A ideia é manter o autor original, mas caso seja necessário, insira seu nome de usuário.</small>
            </div>
            <div class="form-group">
                <label for="palavrasChave"><strong>Palavras Chave</strong></label>
                <input class="form-control" type="text" id="palavrasChave" name="palavrasChave" value=" {{ $postEditado->palavrasChave }} ">
            </div>
            <div class="form-group">
                <label for="categoria"><strong>Categoria</strong></label>
                <select class="form-control" id="categoria" name="categoria">
                    <option></option>
                    <option {{$postEditado->categoria == 'programacao' ? 'selected' : ''}}>Programação</option>
                    <option {{$postEditado->categoria == 'universidade' ? 'selected' : ''}}>Universidade</option>
                    <option {{$postEditado->categoria == 'vida' ? 'selected' : ''}}>Vida</option>
                    <option {{$postEditado->categoria == 'entreterimento' ? 'selected' : ''}}>Entreterimento</option>
                    <option {{$postEditado->categoria == 'esportes' ? 'selected' : ''}}>Esportes</option>
                </select>
            </div>
            <div class="form-group">
                <label for="conteudo"><strong>Conteúdo</strong></label>
                <textarea class="form-control" name="conteudo" id="conteudo" rows="10">
                    {!! $postEditado->conteudo !!}
                </textarea>
            </div>
            <div class="form-group">
                <label for="imagem"><strong>Imagem</strong></label>
                <div class="card-body">
                    <img class="img-fluid" src=" {{$postEditado->imagem}} " alt="Imagem Cadastrada" style="max-width:430px;max-height:auto;">
                </div>
                <input type="file" class="form-control-file" id="imagem" name="imagem" value=" {{ $postEditado->imagem }} ">
                <small><strong>ATENÇÃO:</strong> Esta será a imagem principal do Post.</small>
            </div>
            <button type="submit" class="btn btn-success">Salvar Alterações</button>
            <a type="button" class="btn btn-danger" href=" {{route('sistema.posts.index')}} ">Cancelar</a>
        </form>
    </div>
</div>
    
@endsection

@section('script')

    <script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('conteudo')
    </script>

@endsection