@extends('layout.templateSistema')

@section('tituloPagina')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Posts</h1>
  <a  href="{{route('sistema.posts.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary"><i class="fas fa-plus fa-sm"></i> &nbsp; Novo Post</a>
</div>

@endsection

@section('conteudo')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-1">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h6 class="m-0 font-weight-bold text-primary">Listagem de todos os Posts</h6>
            <a class="btn btn-info btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-top:10px;">
                <i class="fas fa-filter"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href=" {{route('sistema.posts.index')}} ">Todas as categorias</a>
                <a class="dropdown-item" href=" {{route('sistema.posts.index', ['categoria' => 'programacao'])}} ">Programação</a>
                <a class="dropdown-item" href=" {{route('sistema.posts.index', ['categoria' => 'universidade'])}} ">Universidade</a>
                <a class="dropdown-item" href=" {{route('sistema.posts.index', ['categoria' => 'entreterimento'])}} ">Entreterimento</a>
                <a class="dropdown-item" href=" {{route('sistema.posts.index', ['categoria' => 'esportes'])}} ">Esportes</a>
                <a class="dropdown-item" href=" {{route('sistema.posts.index', ['categoria' => 'vida'])}} ">Vida</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>                    
                        <th>Destaque</th>                      
                        <th>Ações</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <!-- Gambiarra para olhar a largura das colunas -->
                        <th style="width:25%">Título</th>
                        <th style="width:10%">Autor</th>
                        <th style="width:3%">Destaque</th>
                        <th style="width:13%">Ações</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($posts as $post)                        
                    <tr>
                        <td> {{ $post->titulo }} </td>
                        <td> {{ $post->autor }} </td>
                        <td style="text-align: center"> {!! $post->custom_destaque !!} </td>
                        <td style="text-align: center">
                            <a href=" {{route('sistema.posts.destaque', $post->id)}} " class="d-none d-sm-inline-block btn btn-sm btn-success botao-tabela"><i class="fas fa-flag fa-sm"></i></a>
                            <a href="#modalDetalhes" data-toggle="modal" data-get=" {{route('sistema.posts.show', $post->id)}} " class="d-none d-sm-inline-block btn btn-sm btn-info botao-tabela"><i class="fas fa-info fa-sm"></i></a>
                            <a href=" {{route('sistema.posts.edit',$post->id)}} " class="d-none d-sm-inline-block btn btn-sm btn-warning botao-tabela"><i class="fas fa-edit fa-sm"></i></a>
                            <a href="#modalDeletar" data-toggle="modal" data-get=" {{route('sistema.posts.destroy', $post->id)}} " class="d-none d-sm-inline-block btn btn-sm btn-danger botao-tabela"><i class="fas fa-trash fa-sm"></i></a>
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
                        <label for="detalhes-titulo"><strong>Título</strong></label>
                        <input type="text" id="detalhes-titulo" class="form-control" readonly>
                    </div>
                    <div class="col-12 form-group">
                        <label for="detalhes-subtitulo"><strong>Subtítulo</strong></label>
                        <input type="text" id="detalhes-subtitulo" class="form-control" readonly>
                    </div>
                    <div class="col-12 form-group">
                        <label for="detalhes-autor"><strong>Autor</strong></label>
                        <input type="text" id="detalhes-autor" class="form-control" readonly>
                    </div>
                    <div class="col-12 form-group">
                        <label for="detalhes-palavrasChave"><strong>Palavras Chave</strong></label>
                        <input type="text" id="detalhes-palavrasChave" class="form-control" readonly>
                    </div>
                    <div class="col-12 form-group">
                        <label for="detalhes-categoria"><strong>Categoria</strong></label>
                        <input type="text" id="detalhes-categoria" class="form-control" readonly>
                    </div>
                    <div class="col-12 form-group">
                        <label for="detalhes-imagem"><strong>Imagem</strong></label>
                        <img id="detalhes-imagem" class="img-responsive" style="max-width:428px; width:auto; height:auto;">
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
                  Você está enviando este Post para a Lixeira!
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

    <!-- Page level plugins -->
    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

    <script>

      window.onload = () => {

        $('#modalDetalhes').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            let modal = $(this)

            $.getJSON(button.data('get'),(dados) => {
                $('#detalhes-titulo').val(dados.titulo)
                $('#detalhes-subtitulo').val(dados.subtitulo)
                $('#detalhes-autor').val(dados.autor)
                $('#detalhes-palavrasChave').val(dados.palavrasChave)
                $('#detalhes-categoria').val(dados.categoria)
                $('#detalhes-imagem').attr('src', dados.imagem)
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