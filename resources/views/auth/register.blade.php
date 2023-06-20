@extends('layouts.app')

@section('content')

    <nav class="navbar flex-column flex-sm-row navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/">
        <img src="{{asset('storage/imagens/logo.png')}}" style="width:80px; height: 80px; margin-left: 15px">
        </a>
        <div class="Margin">
            <div class="container" style="margin-top: 50px; background-color:#656AA6">

            </div>

        </div>
        <div class="collapse navbar-collapse justify-content-end" id="conteudoNavbarSuportado">
            <a href="/adocao">
            <button class="btn btn-primary my-2 my-sm-0"; id= "meu-botao" type="submit" style="margin-right: 15px">Adoções</button>
            </a>
            <a href="/favoritos">
            <button class="btn btn-primary my-2 my-sm-0"; id= "meu-botao" type="submit" style="margin-right: 15px">Favoritos</button>
            </a>
        </div>
    </nav>    

    <div class="containerCadastro">
        <div class="col-sm-12" style="background-color: #656AA6" style="width: auto height: 400px">
            <div class="container" style="margin-top: 150px" style="">
            <p class="h4 text-center" style="color: white; margin-top: 20px; font-size: 30px"><b>Cadastre-se para continuar</b></p>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                        <div class="row mb-3" style="margin-top: 30px">
                            <label for="name" class="col-md-4 col-form-label text-md-end">
                                <i class="bi bi-person-fill">
                                    <img src="{{asset('storage/imagens/person-fill.svg')}}" />
                                </i>
                            </label>
                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nome">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3" style="margin-top: 30px">
                            <label for="name" class="col-md-4 col-form-label text-md-end">
                                <i class="bi bi-person-fill">
                                    <img src="{{asset('storage/imagens/geo-alt-fill.svg')}}" />
                                </i>
                            </label>
                            <div class="col-md-4">
                                <input id="endereco" type="text" class="form-control @error('endereco') is-invalid @enderror" name="endereco" value="{{ old('endereco') }}" required autocomplete="name" autofocus placeholder="Nome">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>{{route('register')}}
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">
                                <i class="bi bi-envelope-fill">
                                    <img src="{{asset('storage/imagens/envelope-fill.svg')}}" />
                                </i>
                            </label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">
                                <i>
                                    <img src="{{asset('storage/imagens/key-fill.svg')}}" />
                                </i>
                            </label>

                            <div class="col-md-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Senha (mínimo 8 caracteres)">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="confirm-password" class="col-md-4 col-form-label text-md-end">
                                <i>
                                    <img src="{{asset('storage/imagens/key-fill.svg')}}" />
                                </i>
                            </label>

                            <div class="col-md-4">
                                <input id="confirm-password" type="password" class="form-control @error('password') is-invalid @enderror" name="confirm-password" required placeholder="Confirmar senha">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="h5 text-center">
                            <p style="color: white" id="titulo"><b>Já tem uma conta? <a style="color: white" href="{{route('login')}}">Faça Login</a></b></p>
                        </div>
                        <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary my-2 my-sm-0" id ="meu-botao">
                                    {{ __('Entrar') }}
                                </button>
                        </div>
            </div>
        </div>        
    </div>
@endsection
