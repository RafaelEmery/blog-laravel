@extends('layout.templateSistema')

@section('conteudo')

 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Posts</h1>
    <a  href="{{route('sistema.posts.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary"><i class="fas fa-plus fa-sm"></i>   Novo Post</a>
</div>

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
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-warning botao-tabela"><i class="fas fa-edit fa-sm"></i></a>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger botao-tabela"><i class="fas fa-trash fa-sm"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal para Deletar -->
<!-- Ainda não tá funcionando! -->
<div class="modal fade" id="modalDeletar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="text-danger"> Você estará enviando este Post para a Lixeira. Tem certeza?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger">Deletar</button>
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

    $('#modalDeletar').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
      })

    </script>

@endsection