@extends('layout.app')

@section('content')

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-8 col-md-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">

                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <!-- Aqui está o tamanho do card no grid system -->
                        <div class="col-lg-12"> 
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Gostaria de postar sobre algo? Entre no sistema!</h1>
                                </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form class="user" action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input type="email" class="form-control form-control-user box-inside-login" name="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Entre com o endereço de email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Senha</label>
                                        <input type="password" class="form-control form-control-user box-inside-login" name="password" id="exampleInputPassword" placeholder="Sua senha">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block box-inside-login">
                                        Entrar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Informações -->
<div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="modalInfoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalInfoLabel"><strong>Não sabe como entrar?</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <ol>
              <li>No terminal rode o seguinte comando: <br> <code>php artisan db:seed</code> </li>
              <li>Será gerado na <i>UserFactory</i> um usuário Teste</li>
              <li>Entre com suas credenciais padrão: <br> <strong>E-mail:</strong> teste@gmail.com <br> <strong>Senha:</strong> 123456789 </li>
              <li>Boa sorte com o sistema!</li>
            </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger box-inside-login" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('scripts')
    
<script>
    window.onload = () => {
      
      console.log('Carregou!');

      window.setTimeout(function () {
        $('#modalInfo').modal('show')
      }, 3000);         
    }
  </script>

@endsection
