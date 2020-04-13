@extends('layout.templateSistema')

@section('tituloPagina')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Comentários</h1>
</div>

@endsection

@section('conteudo')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Listagem de todos os Posts</h6>
    </div>
    <div class="card-body">
        @foreach($posts as $post)
        <!-- Collapsable Card Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary"> {{ $post->titulo }} </h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample">
                @foreach($post->comentarios as $comentario)
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 form-group">
                            <label for="autor"><strong>Autor</strong></label>
                            <input type="text" id="autor" class="form-control" value=" {{ $comentario->autor }} " readonly>
                        </div>
                        <div class="col-12 form-group">
                            <label for="conteudo"><strong>Conteúdo</strong></label>
                            <textarea id="conteudo" class="form-control" readonly> {{ $comentario->conteudo }} </textarea>
                        </div>
                    </div>
                    <a href="#" class="btn btn-info btn-icon-split">
                        <span class="icon text-white-50">
                          <i class="fas fa-info-circle"></i>
                        </span>
                        <span class="text">Ver e-mail</span>
                    </a>
                    <a href="#" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                          <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Excluir</span>
                    </a>
                    <hr>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection