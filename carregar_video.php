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

<?php
        include 'includes/topo_user.php';
    ?>

 <main role="main" class="container" id="main-video">
    <div class="jumbotron" id="upload-video">
        <h1 id="text-title">Cadastrar vídeo</h1>
        <p id="text-normal">Publicar um vídeo na sua conta</p>
        <!DOCTYPE html>

  <?php
  require_once 'includes/funcoes.php';
  require_once 'core/conexao_mysql.php';
  require_once 'core/sql.php';
  require_once 'core/mysql.php';
/*
  if(isset($_SESSION['login'])){
      $id = (int) $_SESSION['login']['usuario']['codUsuario'];

      $criterio = [
          ['id', '=', $id]
      ];

      $retorno = buscar(
          'video',
          ['id', 'titulo', ''],
          $criterio
      );

      $entidade = $retorno[0];
    }
    */
?>

<section class="vh-100">
  <div class="container py-5 h-100">


    <?php
        require_once 'includes/funcoes.php';
        require_once 'core/conexao_mysql.php';
        require_once 'core/sql.php';
        require_once 'core/mysql.php';
        $materias = buscar(
          'materia',
          ['*'],
          []
        );

    ?>    
<!--
  <video width="320" height="240" controls>
    <source src="upload/video.mp4" type="video/mp4">  
      Your browser does not support the video tag.
  </video>
-->
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form method="post" action="core/video_repositorio.php" enctype="multipart/form-data">
          <input type="hidden" name="acao" id="acao"
                                value="<?php echo empty($id) ? 'insert' : 'update' ?>">
                        <input type="hidden" name="id"
                                value="<?php echo $entidade['id'] ?? '' ?>">
          <!-- Nome do vídeo -->
          <div class="form-outline mb-4">
            <label class="form-label" for="titulo" >Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control form-control-lg"/>
          </div>

        
 
         <div class="form-group">
            <label for="exampleFormControlSelect1">Matéria</label>
            <select class="form-control" name="codMateria" id="codMateria">            
            <?php
              foreach($materias as $materia):
            ?>
              <option value=<?php echo $materia['codMateria']?>> <?php echo $materia['nome']?></option>
            <?php endforeach; ?>
            </select>
          </div>
 
          <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="private" id="private" value="privado">Privado</input>
          <br>
          <input class="form-check-input" type="radio" name="private" id="private" value="publico">Público</input>
          
          </div>
          <div class="form-group">
            <input id="video" name="video" type="file"/>
          </div>


          <div class="d-flex justify-content-around align-items-center mb-4">
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block">Cadastrar</button>

        </form>
      </div>
    </div>
</main>
</body>
</html>
