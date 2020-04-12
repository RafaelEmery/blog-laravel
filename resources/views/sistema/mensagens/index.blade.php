@extends('layout.templateSistema')

@section('tituloPagina')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Mensagens</h1>
</div>

@endsection

@section('conteudo')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Listagem de todos as Mensagens recebidas</h6>
    </div>
    <div class="card-body">
        @foreach ($mensagens as $mensagem)            
        <!-- Collapsable Card Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary"> {{ $mensagem->assunto }} </h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 form-group">
                            <label for="autor"><strong>Autor</strong></label>
                            <input type="text" id="autor" class="form-control" value=" {{ $mensagem->nome }} " readonly>
                        </div>
                        <div class="col-12 form-group">
                            <label for="email"><strong>E-mail</strong></label>
                            <input type="text" id="email" class="form-control" value=" {{ $mensagem->email }} " readonly>
                        </div>
                        <div class="col-12 form-group">
                            <label for="conteudo"><strong>Conteúdo</strong></label>
                            <textarea id="conteudo" class="form-control" rows="8" readonly> {{ $mensagem->conteudo }} </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection