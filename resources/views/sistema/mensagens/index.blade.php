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
            <a href="#collapseMensagem" data-toggle="collapse" data-get=" {{route('sistema.mensagens.show', $mensagem->id)}} " class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseMensagem">
                <h6 class="m-0 font-weight-bold text-primary"> {{ $mensagem->assunto }} </h6>
            </a>
        </div>
        @endforeach
    </div>
</div>

<!-- Collapse para as mensagens -->
<div class="collapse show" id="collapseMensagem">
    <div class="card-body">
        <div class="row">
            <div class="col-12 form-group">
                <label for="autor"><strong>Autor</strong></label>
                <input type="text" id="autor" class="form-control" readonly>
            </div>
            <div class="col-12 form-group">
                <label for="email"><strong>E-mail</strong></label>
                <input type="text" id="email" class="form-control" readonly>
            </div>
            <div class="col-12 form-group">
                <label for="conteudo"><strong>Conteúdo</strong></label>
                <textarea id="conteudo" class="form-control" rows="8" readonly></textarea>
            </div>
        </div>
        <a href=" {{route('sistema.mensagens.destroy', $mensagem->id)}} " class="btn btn-danger btn-icon-split">
            <span class="icon text-white-50">
              <i class="fas fa-trash"></i>
            </span>
            <span class="text">Excluir</span>
        </a>
    </div>
</div>

@endsection

@section('script')

<script>

    window.onload = () => {

        $('#collapseMensagem').on('show.bs.collapse', function (event) {
            var button = $(event.relatedTarget)
            let collapse = $(this)

            console.log("Entrei!")

            $.getJSON(button.data('get'),(dados) => {
                console.log(dados)
                $('#autor').val(dados.autor)
                $('#email').val(dados.email)
                $('#conteudo').val(dados.conteudo)
            });
        })
    }

</script>
    
@endsection