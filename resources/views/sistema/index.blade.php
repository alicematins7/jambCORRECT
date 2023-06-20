@extends('sistema.layout')
@section('title','PetMatch')
@section('content')
    <div style="display:flex; flex-direction: row">
        <a class="navbar-brand" href="/adocao">
            <div class="col-sm-4" id="botoes" style="display:flex; flex-direction: row">
                <img src="{{asset('storage/imagens/adocaofoto.png')}}" style="width: 80px; height: 80px; margin-left: 10px" />
                <p class="h2 text-start" style="align-self: center">Adoções</p>
            </div>
        </a>
        <a class="navbar-brand" href="{{route('register')}} ">
            <div class="col-sm-4" id="botoes2" style="display:flex; flex-direction: row">
                <img src="{{asset('storage/imagens/cadastro.png')}}" style="width: 80px; height: 80px; margin-left: 10px" />
                <p class="h2 text-start" style="align-self: center">Cadastre-se</p>
            </div>
        </a>
    </div>
    <div class="row">
         <div class="col-sm-6">
            <p class="h1 text-start" style="color: #656AA6; font-size: 100px; margin-left: 90px; margin-top: 40px; font-weight: bolder ">Adotar é amor :)</p>
            <p class="h3 text-start" style="color: #656AA6; font-size: 50px;   font-style: Italic align-Items: center "></p>
            <p class="h1 text-start" style=" font-size: 20px; margin-left: 25px; margin-bottom: 10px font-style: Italic a">Você salva a vida de um animal e ele ganha um lar novo.
                Ao adotar um bichinho, você estará salvando ele das ruas. 
            </p>
        </div>
@endsection