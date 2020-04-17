@extends('layout.templateSistema')

@section('tituloPagina')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Informações do Rodapé</h1>
</div>

@endsection

@section('conteudo')

<!-- Formulário para criar um Rodapé -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Criar um novo Rodapé</h6>
    </div>
    <div class="card-body">
        <form action=" {{route('sistema.rodape.store')}} " method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="textoSobre"><strong>Texto "Sobre Nós"</strong></label>
                <textarea class="form-control" name="textoSobre" id="textoSobre" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="endereco"><strong>Endereço</strong></label>
                <input class="form-control" type="text" id="endereco" name="endereco">
            </div>
            <div class="form-group">
                <label for="telefone"><strong>Telefone</strong></label>
                <input class="form-control" type="text" id="telefone" name="telefone">
            </div>
            <div class="form-group">
                <label for="email"><strong>E-mail</strong></label>
                <input class="form-control" type="text" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="sitePessoal"><strong>Site Pessoal</strong></label>
                <input class="form-control" type="text" id="sitePessoal" name="sitePessoal">
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a type="button" class="btn btn-danger" href=" {{route('sistema.rodape.index')}} ">Cancelar</a>
        </form>
    </div>
</div>
    
@endsection