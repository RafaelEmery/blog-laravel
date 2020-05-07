@extends('layout.templateSistema')

@section('tituloPagina')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Informações do Rodapé</h1>
    <a  href="#modalEditar" data-toggle="modal" data-url="{{route('sistema.sobre.show', 1)}}" class="d-none d-sm-inline-block btn btn-sm btn-warning"><i class="fas fa-edit fa-sm"></i> &nbsp; Editar Rodapé</a>
</div>

@endsection

@section('conteudo')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Rodapé cadastrado</h6>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="textoSobre"><strong>Texto "Sobre Nós"</strong></label>
            <textarea class="form-control" name="textoSobre" rows="5" readonly> {{ $sobre->textoSobre}} </textarea>
        </div>
        <div class="form-group">
            <label for="endereco"><strong>Endereço</strong></label>
            <input class="form-control" type="text" name="endereco" value=" {{ $sobre->endereco }} " readonly>
        </div>
        <div class="form-group">
            <label for="telefone"><strong>Telefone</strong></label>
            <input class="form-control" type="text" name="telefone" value=" {{ $sobre->telefone }} " readonly>
        </div>
        <div class="form-group">
            <label for="email"><strong>E-mail</strong></label>
            <input class="form-control" type="text" name="email" value=" {{ $sobre->email }} " readonly>
        </div>
        <div class="form-group">
            <label for="sitePessoal"><strong>Site Pessoal</strong></label>
            <input class="form-control" type="text" name="sitePessoal" value=" {{ $sobre->sitePessoal }} " readonly>
        </div>
    </div>
</div>

<!-- Modal para editar -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="modalEditarTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditarTitle">Editar Rodapé</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editar-sobre" action=" {{route('sistema.sobre.update', 1)}} " method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="textoSobre"><strong>Texto "Sobre Nós"</strong></label>
                        <textarea class="form-control" name="textoSobre" id="textoSobre" rows="4"></textarea>
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
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" form="editar-sobre" class="btn btn-success">Salvar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<script>
    window.onload = () => {
        $('#modalEditar').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            let modal = $(this)

            console.log("Tô aqui!")

            $.getJSON(button.data('url'), (dados) => {
                console.log(dados)

                modal.find('#textoSobre').html(dados.textoSobre)
                modal.find('#endereco').val(dados.endereco)
                modal.find('#telefone').val(dados.telefone)
                modal.find('#email').val(dados.email)
                modal.find('#sitePessoal').val(dados.sitePessoal)
                modal.find("#editar-sobre").attr('action',  button.data('get'));
            })  
        })
    }

</script>


@endsection