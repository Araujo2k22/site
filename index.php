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
  
    if(isset($_SESSION['login'])){      
      include 'includes/topo_user.php';    
    }
    else
    {
      include 'includes/topo.php';
    }
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


      <!---Video-->
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
                $criterio[] = ['titulo', 'like', "%{$busca}%"];
          }

          if(isset($codMateria)){
            $criterio[] = ['fk_materia_codMateria', '=', $codMateria];
          }
          
          $videos = buscar(
              'video',
                ['*',
                '(select nome from usuario where usuario.codUsuario = video.fk_Usuario_codUsuario) as usuario',
                '(select nome from materia where materia.codMateria = video.fk_materia_codMateria) as materia'
              ],
              $criterio
            );
        ?>   
      <?php
        $video_dir = "upload/videos/";
        foreach($videos as $video):
      ?>
      <div class="container-fluid" id="videos1">
        <div class="listagem_video">
          <div class="nome_video">
            <p><h3 id="text-title"> <?php  echo $video['usuario'] ?>   </h3>   </p>
            <p><h3 id="text-title"> <?php  echo $video['materia'] ?>   </h3>   </p>
            <p> <?php  echo $video['titulo'] ?> </p>
          </div>
          <div class="video">
            <video width="250" height="400" controls id="video-estilo">
  
              <source src="<?php echo $video_dir.$video['filePath'] ?>" type="video/mp4">
              Your browser does not support the video tag.
            </video>
            <div class="col-sm-2" id="divgostei"> 
            <button type="submit" style="border-radius: 50%; height: 60px; width: 60px;" id="btngostei"><img src="upload/img/gostar.png" style="height: 40px; width: 40px;"></button>
          </div>
        </div>
          <hr>
        </div>  
      </div>
        <?php endforeach; ?>  
    
  </div>            
</div>
</body>                 
</html>
