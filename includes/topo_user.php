<?php
    session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="col-md-3">
    <a href="index.php"><img id="img_topo" src="img/logo.png"></a>
    </div>
    <div class="col-md-3" id="divpesquisa">
      <form method="get">
          <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar" aria-label="Search" name="busca" id="campoPesquisa">
    </div>
    <div class="col-md-3">
          <button class="btn btn-primary" type="submit" id="pesquisar">Pesquisar</button> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button> 
    </div>    
      </form>
      

    <div class="col-md-1" id="carregvideo">
      <a href="carregar_video.php">
         <button class="btn btn-primary" type="submit" id="btnEntrar"> + Carregar</button>
      </a>
    </div>

    <div class="col-md-1">
      <a href="cadastro_video.php">
         <i class="bi bi-info-square-fill" id="icon2"></i>
      </a>
    </div>
    

  <?php if(isset($_SESSION['login'])): ?>
    <div class="col-md-1" id="icon1">
      <a href="perfil_usuario.php"><i class="bi bi-person"></i></a>
    </div>
    <?php endif ?>
  </div>    
  </nav>



