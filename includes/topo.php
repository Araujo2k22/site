<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <img src="img/logo.png" width="150px" height="100px">
    <input class="form-control mr-sm-2" type="pesquisar" placeholder="Pesquisar" aria-label="Search" id="campoPesquisa">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" id="pesquisar">Pesquisar</button>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="botoes">
      <a href="login_formulario.php"><button class="btn btn-primary my-2 my-sm-0" type="submit" id="btnEntrar">
        Entrar</button></a>
      <a href="usuario_formulario.php"><button class="btn btn-primary my-2 my-sm-0" type="submit"
          id="btnCadastrar">Cadastrar</button></a>
    </div>

  <?php if(isset($_SESSION['login'])): ?>
    <div class="card-body text-right" id="icon1">
      <a href="perfil_usuario.php"><i class="bi bi-person"></i></a>
    </div>
    <?php endif ?>
    
  </nav>



