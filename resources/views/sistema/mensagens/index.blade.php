@extends('layout.templateSistema')

@section('tituloPagina')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Mensagens</h1>
</div>

@endsection

@section('conteudo')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">    
        <h6 class="m-0 font-weight-bold text-primary">Listagem de todos os Mensagens</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Assunto</th>
                        <th>Autor</th>                                            
                        <th style="width:20%">Ações</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <!-- Gambiarra para olhar a largura das colunas -->
                        <th>Assunto</th>
                        <th>Autor</th>
                        <th>Ações</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($mensagens as $mensagem)               
                    <tr>
                        <td> {{ $mensagem->assunto }} </td>
                        <td> {{ $mensagem->nome }} </td>
                        <td style="text-align:center;">
                            <a href="#modalDetalhes" data-toggle="modal" data-get=" {{route('sistema.mensagens.show', $mensagem->id)}} " class="d-none d-sm-inline-block btn btn-sm btn-info"><i class="fas fa-info fa-sm"></i> &nbsp; Conteúdo</a>
                            <a href="#modalDeletar" data-toggle="modal" data-get=" {{route('sistema.mensagens.destroy', $mensagem->id)}} " class="d-none d-sm-inline-block btn btn-sm btn-danger botao-tabela"><i class="fas fa-trash fa-sm"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal de Informações -->
<div class="modal fade" id="modalDetalhes" tabindex="-1" role="dialog" aria-labelledby="modalDetalhesLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-primary" id="modalDetalhesLabel">Informações do Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 form-group">
                        <label for="detalhes-assunto"><strong>Assunto</strong></label>
                        <input type="text" id="detalhes-assunto" class="form-control" readonly>
                    </div>
                    <div class="col-12 form-group">
                        <label for="detalhes-nome"><strong>Autor</strong></label>
                        <input type="text" id="detalhes-nome" class="form-control" readonly>
                    </div>
                    <div class="col-12 form-group">
                        <label for="detalhes-email"><strong>E-mail</strong></label>
                        <input type="text" id="detalhes-email" class="form-control" readonly>
                    </div>
                    <div class="col-12 form-group">
                        <label for="detalhes-conteudo"><strong>Conteudo</strong></label>
                        <textarea class="form-control" id="detalhes-conteudo" cols="30" rows="5" readonly></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal deletar-->
<div class="modal fade" id="modalDeletar" tabindex="-1" role="dialog" aria-labelledby="modalDeletarLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-primary" id="modalDeletarLabel">Deletar Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning">
                    Você está deletando esta Mensagem!
                </div>
                <h4>Tem certeza disso?</h4>
            </div>
            <div class="modal-footer">
                <form id="deletar-post" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("delete")
                    <button type="submit" class="btn btn-danger">Deletar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>                
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<script>

    window.onload = () => {

      $('#modalDetalhes').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget)
          let modal = $(this)

          $.getJSON(button.data('get'),(dados) => {
              console.log(dados)
              $('#detalhes-assunto').val(dados.assunto)
              $('#detalhes-nome').val(dados.nome)
              $('#detalhes-email').val(dados.email)
              $('#detalhes-conteudo').val(dados.conteudo)
          });
      })

      //Deletar um registro
      $('#modalDeletar').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget)
          this.querySelector("form#deletar-post").action = button.data('get')
      })

    }
  </script>
    
@endsection