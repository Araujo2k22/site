<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tik Educ</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="lib/css/style.css">
  <!---Icones-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a href="index.php"><img src="img/logo.png" width="150px" height="100px"></a>
    <input class="form-control mr-sm-2" type="pesquisar" placeholder="Pesquisar" aria-label="Search" id="campoPesquisa">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" id="pesquisar">Pesquisar</button>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="botoes">
      <a href="carregar_video.php"><button class="btn btn-primary my-2 my-sm-0" type="submit" id="btnEntrar">
      + Carregar</button></a>
      <a href="cadastro_video.php"><i class="bi bi-info-square-fill" id="icon2"></i></a>
    </div>

  <?php if(isset($_SESSION['login'])): ?>
    <div class="card-body text-right" id="icon1">
      <a href="perfil_usuario.php"><i class="bi bi-person"></i></a>
    </div>
    <?php endif ?>
    
  </nav>
  <div class="container-fluid">
    <div class="row tamanho">
      <div class="col-2 borda" id="menu">
      <li>
        <a href=""><i class="bi bi-house-fill">Inicio</i></a>
      </li>
      <li>
        <a href=""><i class="bi bi-person-plus">Seguindo</i></a>
      </li>
      <li>
        <a href=""><i class="bi bi-book">Matérias</i></a>
      </li>
      <li>
        <p style="font-size: 15pt;">Faça login para poder curtir, comentar e compartilhar.</p>
      </li>
      </div>


  
    
</body>
</html>
