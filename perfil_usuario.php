<!DOCTYPE html>
<html lang="en">

 <?php
  
    if(isset($_SESSION['login'])){      
      include 'includes/topo.php';
      echo '<div class="card-body text-right" id="icon1">';
      echo '<a href="includes/topo_user.php"><i class="bi bi-person"></i></a>';
      echo '</div>';      
    }
    else
    {
      include 'includes/topo_user.php';
    }
 ?>

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
  
    <?php
          require_once 'includes/funcoes.php';
          require_once 'core/conexao_mysql.php';
          require_once 'core/sql.php';
          require_once 'core/mysql.php';
          foreach($_GET as $indice => $dado){
                $$indice = limparDados($dado);
            }           

          $criterio = [];

          $criterio[] = [
            'fk_Usuario_codUsuario', '=', $_SESSION['login']['usuario']['codUsuario']
          ];
          
          $videos = buscar(
              'video',
                ['*',
                '(select nome from usuario where usuario.codUsuario = video.fk_Usuario_codUsuario) as usuario',
                '(select nome from materia where materia.codMateria = video.fk_materia_codMateria) as materia'
              ],
              $criterio
            );
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
      <div class="col-8" id="menu">
      <div class="row">
        <div class="col-sm-2" id="perfil">
            <img src="./upload/img/avatar.png" id="avatar">
        </div>   
        <div class="col-sm-6">
            <p><h3 id="text-title1">  <?php echo $_SESSION['login']['usuario']['nome'] ?>  </h3>   </p>
            <p><h3 id="text-subtitle">  <?php echo $_SESSION['login']['usuario']['nomeUsuario'] ?>  </h3>   </p> 
		    </div> 
      </div>
    <hr style="border-top: 1px solid black;">

    <div class="upload-videos">
      <?php
        $video_dir = "upload/videos/";
        foreach($videos as $video):
      ?>
      <div class="container-fluid" id="videos">
        <div class="listagem_video">
          <div class="video">
          <ul>
            <li>
            <video width="250" height="400" controls id="video-estilo">
              <source src="<?php echo $video_dir.$video['filePath'] ?>" type="video/mp4">
              Your browser does not support the video tag.
            </video>
            </li>
          </ul>
          </div>
          <hr>
        </div>  
      </div>
        <?php endforeach; ?>
    </div>
  </div>
</div>

       
</div>
</body>


</html>
