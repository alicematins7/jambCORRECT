<nav class="navbar flex-column flex-sm-row navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/">
      <img src="{{asset('storage/imagens/logo.png')}}" style="width:80px; height: 80px; margin-left: 15px">
    </a>       
    <div class="collapse navbar-collapse justify-content-end" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto flex-column flex-sm-row">
        </ul>
        <a href="{{route('register')}}">
            <button class="btn btn-primary my-2 my-sm-0"; id = "meu-botao" type="submit" style="margin-right: 15px; margin-left: 15px">Cadastrar</button>
        </a>
        <a href="{{route('login')}}">
          <button class="btn btn-primary my-2 my-sm-0"; id= "meu-botao" type="submit" style="margin-right: 15px">Entrar</button>
        </a>
        <a href="/favoritos">
          <button class="btn btn-primary my-2 my-sm-0"; id= "meu-botao" type="submit" style="margin-right: 15px">Favoritos</button>
        </a>
      </div>
</nav>    