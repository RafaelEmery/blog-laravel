@extends('layout.templateSistema')

@section('tituloPagina')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Posts</h1>
  <a  href="{{route('sistema.posts.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary"><i class="fas fa-plus fa-sm"></i>   Novo Post</a>
</div>

@endsection

@section('conteudo')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabela de Posts</h6>
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
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Destaque</th>
                        <th>Ações</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($posts as $post)                        
                    <tr>
                        <td> {{ $post->titulo }} </td>
                        <td> {{ $post->autor}} </td>
                        <td> Não </td>
                        <td>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success botao-tabela"><i class="fas fa-flag fa-sm"></i></a>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-info botao-tabela"><i class="fas fa-info fa-sm"></i></a>
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

<!-- Modal deletar-->
<div class="modal fade" id="modalDeletar" tabindex="-1" role="dialog" aria-labelledby="modalDeletarLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="modalDeletarLabel">Deletar Post</h5>
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

        //Deletar um registro
        $('#modalDeletar').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            this.querySelector("form#deletar-post").action = button.data('get')
        })

      }
    </script>

@endsection