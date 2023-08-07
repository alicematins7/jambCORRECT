@extends('sistema.layout')
@section('content')


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
