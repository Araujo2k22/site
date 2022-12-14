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
  
  <!---Icones-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="lib/css/style.css">
</head>
<body>
    <!-- TOPO-->
    <?php
        include 'includes/cond_topo.php';
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
                <li>
                    <div class="teste">
                        <a href="index.php?codMateria=8"><button type="submit" class="btn btn-primary btn-lg btn-block btn-materias btn-mat formatoMaterias" ><img src="./img/icons_materias/matematica.png" alt=""></i></button></a>
                        <p class="p-materias">Matemática</p>
                    </div>
                </li>
                <li>
                    <div class="teste">
                        <a href="index.php?codMateria=9"><button type="submit" class="btn btn-primary btn-lg btn-block btn-materias btn-port formatoMaterias"> <img src="./img/icons_materias/portugues.png" alt=""></i></button></a>
                        <p class="p-materias">Língua Portuguesa</p>
                    </div>
                </li>
                <li>
                    <div class="teste">
                        <a href="index.php?codMateria=6"><button type="submit" class="btn btn-primary btn-lg btn-block btn-materias btn-his formatoMaterias" ><img src="./img/icons_materias/historia.png" alt=""></button></a>
                        <p class="p-materias">História</p>
                    </div>
                </li>
                <li>
                    <div class="teste">
                        <a href="index.php?codMateria=1"><button type="submit" class="btn btn-primary btn-lg btn-block btn-materias btn-bio formatoMaterias" ><img src="./img/icons_materias/biologia.png" alt=""></button></a>
                        <p class="p-materias">Biologia</p>
                    </div>
                </li>
                <li>
                    <div class="teste">
                        <a href="index.php?codMateria=2"><button type="submit" class="btn btn-primary btn-lg btn-block btn-materias btn-esp formatoMaterias" ><img src="./img/icons_materias/espanhol.png" alt=""></button></a>
                        <p class="p-materias">Espanhol</p>
                    </div>
                </li>
            </ul>
            <ul id="materias1">
                <li>
                    <div class="teste">
                        <a href="index.php?codMateria=10"><button type="submit" class="btn btn-primary btn-lg btn-block btn-materias btn-qui formatoMaterias" ><img src="./img/icons_materias/quimica.png" alt=""></i></button></a>
                        <p class="p-materias">Química</p>
                    </div>
                </li>
                <li>
                    <div class="teste">
                        <a href="index.php?codMateria=11"><button type="submit" class="btn btn-primary btn-lg btn-block btn-materias btn-socio formatoMaterias" ><img src="./img/icons_materias/sociologia.png" alt=""></button></a>
                        <p class="p-materias">Sociologia</p>
                    </div>
                </li>
                <li>
                    <div class="teste">
                        <a href="index.php?codMateria=3"><button type="submit" class="btn btn-primary btn-lg btn-block btn-materias btn-filo formatoMaterias" ><img src="./img/icons_materias/filosofia.png" alt=""></button></a>
                        <p class="p-materias">Filosofia</p>
                    </div>
                </li>
                <li>
                    <div class="teste">
                        <a href="index.php?codMateria=5"><button type="submit" class="btn btn-primary btn-lg btn-block btn-materias btn-geo formatoMaterias" ><img src="./img/icons_materias/geografia.png" alt=""></button></a>
                        <p class="p-materias">Geografia</p>
                    </div>
                </li>
                <li>
                    <div class="teste">
                        <a href="index.php?codMateria=7"><button type="submit" class="btn btn-primary btn-lg btn-block btn-materias btn-ing formatoMaterias" ><img src="./img/icons_materias/ingles.png" alt=""></button></a>
                        <p class="p-materias">Inglês</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    
    </body>
</html>