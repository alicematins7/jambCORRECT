@extends('sistema.layout')
@section('title','PetMatch')
@section('content')
<!doctype html>
<html lang ="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf -8">
    <meta name="csrf-token" content=" {{ csrf_token () }}" >
    @vite(['resources/js/app.js'])
    <title> Adoções </title>
    <style>
        body { padding: 20px; }
        .navbar { margin-bottom: 20px; }
        :root { --jumbotron-padding-y: 10px; }
        .jumbotron {
            padding-top:var(--jumbotron-padding-y);
            padding-bottom: var(--jumbotron-padding-y);
            margin-bottom: 0;
            background-color: #fff;
        }
        @media (min-width: 768px) {
            .jumbotron {
                padding-top: calc(var(--jumbotron-padding-y) * 2);
                padding-bottom: calc(var(--jumbotron-padding-y) * 2);
            }
        }
        .jumbotron p:last-child {margin-bottom: 0;}
        .jumbotron-heading {font-weight: 300;}
        .jumbotron.container {max-width: 40rem;}
        .btn-card { margin: 4px;}
        .btn { margin-right: 5px;}
        footer { padding-top: 3rem ; padding-bottom: 3rem;}
        footer p { margin-bottom: .25rem; }
    </style>
</head>
<body>

    <header>
        <div class="col-sm-3" style="background-color: #656AA6">
          <div style="flex-direction: 'row'">
            <img src="{{asset('storage/imagens/logo.png')}}" style="width:40px; height: 40px; margin-left: 10px">
            <p><b>Adote com amor! :)</b></p>
        </div>
          <ul>
          </ul>
        </div>
        <nav class="navbar flex-column flex-sm-row navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/">
              <img src="{{asset('storage/imagens/logo.png')}}" style="width:80px; height: 80px; margin-left: 15px">
            </a>       
            <div class="collapse navbar-collapse justify-content-end" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto flex-column flex-sm-row">
                  <li class="nav-item active flex-sm-fill">
                    <a class="nav-link" href="/adocao" style="font-weight:bold">Adoções</a>
                  </li>
                </ul>
                <a href="{{route('register')}}">
                <button class="btn btn-primary my-2 my-sm-0" id = "meu-botao" type="submit" style="margin-right: 15px">Cadastre-se</button>
                </a>
                <a href="{{route('login')}}">
                  <button class="btn btn-primary my-2 my-sm-0" id = "meu-botao" type="submit" style="margin-right: 15px">Login</button>
                </a>
                <a href="/adocao">
                  <button class="btn btn-primary my-2 my-sm-0"; id= "meu-botao" type="submit" style="margin-right: 15px">Adoções</button>
                </a>
                <a href="/favoritos">
                  <button class="btn btn-primary my-2 my-sm-0"; id= "meu-botao" type="submit" style="margin-right: 15px">Favoritos</button>
                </a>
            </div>
        </nav>    
    </header>

    <main role="main">
        
        <section class ="jumbotron text-center">
            <div class ="container">
            <h1 class ="jumbotron-heading"> Fale Aqui Sobre o Pet </h1>
            <form method ="POST" action ="/" enctype="multipart/form-data">
                @csrf
                <div class="custom-file">
                    <input type="file" class ="custom-file-input" id ="arquivo" name=" arquivo">
                    <label class="custom-file-label" id ="RotuloArquivo" for="arquivo"> Escolha um arquivo </label>
                </div>
                <div class="form-group text-left">
                    <label for="mensagem">Descrição do Pet </label>
                    <textarea class =" form - control" id =" mensagem" name ="mensagem" rows="3 " > </textarea>
                </div>
                <p>
                    <button type ="submit" class =" btn btn-primary my -2 "> Enviar </button>
                    <button type =" reset " class =" btn btn-secondary my -2"> Cancelar </button >
                </p>
            </form>
            </div>
        </section>

        <div class=" album py-5 bg-light" >
            <div class="container">
                <div class="row">
                    @foreach( $posts as $post )
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                            <img class="card-img-top figure-img img-fluid rounded" src="/storage/{{ $post->arquivo}}">
                                <div class="card-body">
                                    <p class="card-text">{{$post->name}} </p>
                                    <p class="card-text" >{{$post->mensagem}} </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <form method="POST" action ="/{{ $post->id }}">
                                            @csrf
                                            <input type="hidden" name="_method" value ="delete">
                                            <button type="submit" class ="btn btn-sm btn-outline-danger">Apagar</button >
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    </main>

    <footer class =" text-muted ">
    <div class ="container">
    <p class ="float-right ">
    <a href ="#" >Voltar </a>
    </p>
    <p> ©2023 CEFET - MG Unidade Varginha </p >
    <p> Técnico em Informática </p >
    <p> Aplicações Web II </p >
        </div>
    </footer>
</body>
</html>