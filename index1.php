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

    <!-- TOPO -->
    <?php
      include 'includes/topo.php';
    ?>

    <!-- BUSCA -->
    <?php
      include 'includes/busca.php'
    ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <?php
          include 'includes/topo.php';
        ?>
      </div>  
    </div>  
    <div class="row mb-2 tamanho">
      <div class="col-md-4">
      
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
      <div class="col-md-8">
        
            <?php
              require_once 'includes/funcoes.php';
              require_once 'core/conexao_mysql.php';
              require_once 'core/sql.php';
              require_once 'core/mysql.php';
              foreach($_GET as $indice => $dado){
                    $$indice = limparDados($dado);
                }           

              $criterio = [];
              if(!empty($busca)){
                    $criterio[] = ['nome', 'like', "%{$busca}%"];
              }
              $videos = buscar(
                  'video',
                    ['*']
                );
            ?>   
            <?php
              $video_dir = "upload/videos/";
              foreach($videos as $video):
            ?>
          <div class="container-fluid" id="videos">
            <video width="320" height="240" controls>
              <source src="<?php echo $video_dir.$video['filePath'] ?>" type="video/mp4">
              Your browser does not support the video tag.
            </video>
            <?php endforeach; ?>  
            </div>
      </div>
    </div>
  
  </div>
 </body>
</html>
