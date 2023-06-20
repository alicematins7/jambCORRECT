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

    <div class="row">
        <div class="col-sm-5">
            <img src="{{asset('storage/imagens/bichoAuth.png')}}" style="margin-top: 190px; width: 800px" />
        </div>
        <div class="col-sm-7" style="background-color: #656AA6">
            <div class="container">
            <p class="h4 text-center" style="color: white; margin-top: 75px; font-size: 30px"><b>Faça Login em sua conta para continuar o processo de adoção</b></p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row mb-3">        
                    <div class="row mb-3" style="margin-top: 120px">
                            <label for="email" class="col-md-4 col-form-label text-md-end">
                                <i>
                                    <img src="{{asset('storage/imagens/envelope-fill.svg')}}" />
                                </i>
                            </label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required placeholder="Email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Senha">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 offset-md-4">
                                <div>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #ffff; font-size: 20px; margin-top: 10px">
                                            {{ __('Esqueceu sua senha?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember" style="color: white">
                                        {{ __('Me mantenha Logado(a)') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                            <div class="h5 text-center">
                                <p style="color: white" id="titulo"><b>Ainda não tem uma conta? <a style="color: white;" href="{{route('register')}}">Cadastre-se</a></b></p>
                            </div>

                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary my-2 my-sm-0" id ="meu-botao" style="padding-left: 30px; padding-right: 30px; font-size: 15px">
                                    {{ __('Entrar') }}
                                </button>
                            </div>
            </div>
        </div>
    </div>
@endsection
