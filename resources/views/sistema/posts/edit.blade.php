@extends('layout.templateSistema')

@section('tituloPagina')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Posts</h1>
</div>

@endsection

@section('conteudo')

<!-- Formulário para criar um novo card -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Criar um novo Post</h6>
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
                <label for="autor"><strong>Autor</strong></label>
                <input class="form-control" type="text" id="autor" name="autor" value=" {{ $postEditado->autor }} ">
            </div>
            <div class="form-group">
                <label for="palavrasChave"><strong>Palavras Chave</strong></label>
                <input class="form-control" type="text" id="palavrasChave" name="palavrasChave" value=" {{ $postEditado->palavrasChave }} ">
            </div>
            <div class="form-group">
                <label for="categoria"><strong>Categoria</strong></label>
                <select class="form-control" id="categoria" name="categoria">
                    <option></option>
                    <option>Categoria 1</option>
                    <option>Categoria 2</option>
                    <option>Categoria 3</option>
                    <option>Categoria 4</option>
                    <option>Categoria 5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="conteudo"><strong>Conteúdo</strong></label>
                <textarea class="form-control" name="conteudo" id="conteudo" rows="10" value=" {{ $postEditado->conteudo }} "></textarea>
            </div>
            <div class="form-group">
                <label for="imagem">Imagem</label>
                <input type="file" class="form-control-file" id="imagem" name="imagem" value=" {{ $postEditado->imagem }} ">
                <small><strong>ATENÇÃO:</strong>Esta será a imagem principal do Post.</small>
            </div>
            <button type="submit" class="btn btn-success">Criar Post</button>
            <a type="button" class="btn btn-danger" href=" {{route('sistema.posts.index')}} ">Cancelar</a>
        </form>
    </div>
</div>
    
@endsection