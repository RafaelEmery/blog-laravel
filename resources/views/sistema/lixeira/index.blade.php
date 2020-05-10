@extends('layout.templateSistema')

@section('tituloPagina')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><strong>Lixeira</strong></h1>
    <a  href="{{route('sistema.lixeira.esvaziar')}}" class="d-none d-sm-inline-block btn btn-sm btn-warning"><i class="fas fa-trash-restore-alt fa-sm"></i> &nbsp; Esvaziar Lixeira</a>
</div>

@endsection

@section('conteudo')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabela de Posts que foram deletados</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>                    
                        <th>Ações</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <!-- Gambiarra para olhar a largura das colunas -->
                        <th>Título</th>
                        <th style="width:25%">Autor</th>
                        <th style="width:20%">Ações</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($postsLixeira as $post)                        
                    <tr>
                        <td> {{ $post->titulo }} </td>
                        <td> {{ $post->autor}} </td>
                        <td style="text-align:center;">
                            <a href=" {{route('sistema.lixeira.restaurar', $post->id)}} " class="d-none d-sm-inline-block btn btn-sm btn-success botao-tabela"><i class="fas fa-arrow-circle-up fa-sm"></i></a>
                            <a href="#modalDeletar" data-toggle="modal" data-get=" {{route('sistema.lixeira.destroy', $post->id)}} " class="d-none d-sm-inline-block btn btn-sm btn-danger botao-tabela"><i class="fas fa-trash fa-sm"></i></a>
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
                <h5 class="modal-title font-weight-bold text-primary" id="modalDeletarLabel">Deletar Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning">
                    Você está enviando este Post permanetemente!
                </div>
                <h4>Tem certeza disso?</h4>
            </div>
            <div class="modal-footer">
                <form id="deletarPerm-post" method="POST" enctype="multipart/form-data">
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
            //Deletar um registro
            $('#modalDeletar').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            this.querySelector("form#deletarPerm-post").action = button.data('get')
            });
        }

    </script>

@endsection