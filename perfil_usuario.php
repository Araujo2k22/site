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
    <!-- TOPO-->
    <?php
        include 'includes/topo_user.php';
    ?>
  <div class="container-fluid">
    <div class="row tamanho">
      <div class="col-2 borda" id="menu">
      <li>
        <a href="index.php"><i class="bi bi-house-fill">Inicio</i></a>
      </li>
      <li>
        <a href="carregar_video.php"><i class="bi bi-person-plus">Seguindo</i></a>
      </li>
      <li>
        <a href="materias.php"><i class="bi bi-book">Matérias</i></a>
      </li>
      <li>
        <p style="font-size: 15pt;">Faça login para poder curtir, comentar e compartilhar.</p>
      </li>
      </div>

       <div class="container-fluid" >
		  <main role="main" class="container" id="main-usuario">
    <div class="jumbotron" id="upload-video">
        <h1 id="text-title">Cadastrar vídeo</h1>
        <p id="text-normal">Publicar um vídeo na sua conta</p>
    </main>

</div>
</div>
</body>


</html>
