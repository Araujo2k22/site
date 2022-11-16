<!DOCTYPE html>
<html lang="pt-br">

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
        include 'includes/topo.php';
    ?>

    <!-- MENU LATERAL -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 borda tamanho" id="menu">
                <li>
                    <a href="index.php"><i class="bi bi-house-fill">Inicio</i></a>
                </li>
                <li>
                    <a href=""><i class="bi bi-person-plus">Seguindo</i></a>
                </li>
                <li>
                    <a href="materias.php"><i class="bi bi-book">Matérias</i></a>
                </li>
                <li>
                    <p style="font-size: 15pt;">Faça login para poder curtir, comentar e compartilhar.</p>
                </li>
            </div>
    <!-- Materias -->
        <div class="col-9">
            <ul id="materias1">
                <li><a href="materias/matematica.php"><button type="submit" class="btn btn-primary btn-lg btn-block btn-materias btn-mat formatoMaterias" ><img src="/img/icons materias/matematica.png" alt=""></i></button></a>
                    <p>Matemática</p>
                </li>
                <li><a href="materias/portugues.php"><button type="submit" class="btn btn-primary btn-lg btn-block btn-materias btn-port formatoMaterias"> <img src="./img/portugues.png" alt=""></i></button></a></li>
                <li><a href="materias/historia.php"><button type="submit" class="btn btn-primary btn-lg btn-block btn-materias btn-his formatoMaterias" ><img src="/img/icons materias/historia.png" alt=""></button></a></li>
                <li><a href="materias/biologia.php"><button type="submit" class="btn btn-primary btn-lg btn-block btn-materias btn-bio formatoMaterias" ><img src="./img/icons materias/biologia.png" alt=""></button></a></li>
                <li><a href="materias/espanhol.php"><button type="submit" class="btn btn-primary btn-lg btn-block btn-materias btn-esp formatoMaterias" ><img src="/img/icons materias/espanhol.png" alt=""></button></a></li>
            </ul>
            <ul id="materias1">
                <li><a href="materias/quimica.php"><button type="submit" class="btn btn-primary btn-lg btn-block btn-materias btn-qui formatoMaterias" ><img src="/img/icons materias/quimica.png" alt=""></i></button></a></li>
                <li><a href="materias/sociologia.php"><button type="submit" class="btn btn-primary btn-lg btn-block btn-materias btn-socio formatoMaterias" ><img src="/img/icons materias/sociologia.png" alt=""></button></a></li>
                <li><a href="materias/filosofia.php"><button type="submit" class="btn btn-primary btn-lg btn-block btn-materias btn-filo formatoMaterias" ><img src="/img/icons materias/filosofia.png" alt=""></button></a></li>
                <li><a href="materias/geografia.php"><button type="submit" class="btn btn-primary btn-lg btn-block btn-materias btn-geo formatoMaterias" ><img src="/img/icons materias/geografia.png" alt=""></button></a></li>
                <li><a href="materias/ingles.php"><button type="submit" class="btn btn-primary btn-lg btn-block btn-materias btn-ing formatoMaterias" ><img src="/img/icons materias/ingles.png" alt=""></button></a></li>
            </ul>
        </div>
    </div>

    
    </body>
</html>