@extends('layout.templateSistema')

@section('tituloPagina')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Posts</h1>
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
                        <td>
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

    
@endsection