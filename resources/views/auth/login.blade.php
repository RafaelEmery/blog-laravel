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

@endsection
