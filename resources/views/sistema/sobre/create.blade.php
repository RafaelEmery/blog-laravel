@extends('layout.templateSistema')

@section('conteudo')

<!-- Formulário para criar um Sobre -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Criar um novo Sobre</h6>
    </div>
    <div class="card-body">
        <form action=" {{route('sistema.sobre.store')}} " method="POST" enctype="multipart/form-data">
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
            <a type="button" class="btn btn-danger" href=" {{route('sistema.sobre.index')}} ">Cancelar</a>
        </form>
    </div>
</div>
    
@endsection