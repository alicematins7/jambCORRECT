@extends('sistema.layout')
@section('content')


    <div class="containerCadastro">
        <div class="col-sm-12" style="background-color: #000" style="width: auto height: 400px">
            <div class="container" style="margin-top: 150px" style="">
            <p class="h4 text-center" style="color: #2B1998; margin-top: 20px; font-size: 30px"><b>Cadastre-se </b></p>
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
                            <div class="col-md-4">
                                <input id="sobrenome" type="text" class="form-control @error('sobrenome') is-invalid @enderror" name="sobrenome" value="{{ old('sobrenome') }}" required autocomplete="name" autofocus placeholder="Sobrenome">
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
                                <input id="endereco" type="text" class="form-control @error('endereco') is-invalid @enderror" name="endereco" value="{{ old('endereco') }}" required autocomplete="Endereço" autofocus placeholder="Endereço">
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
                            </label>
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
