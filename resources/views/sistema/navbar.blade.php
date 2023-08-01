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
        <a href="/cadastro">
          <button class="btn btn-primary my-2 my-sm-0"; id= "meu-botao" type="submit" style="margin-right: 15px">Cadastro de Animais</button>
        </a>
    </div>
</nav>    