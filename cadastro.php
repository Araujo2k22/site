<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie seu perfil | Tik Educ</title>
    <link rel="stylesheet" href="lib/css/bootstrap.css">
</head>
<body>
  <?php
  require_once 'includes/funcoes.php';
  require_once 'core/conexao_mysql.php';
  require_once 'core/sql.php';
  require_once 'core/mysql.php';

  if(isset($_SESSION['login'])){
      $id = (int) $_SESSION['login']['usuario']['id'];

      $criterio = [
          ['id', '=', $id]
      ];

      $retorno = buscar(
          'usuario',
          ['id', 'nome', 'email'],
          $criterio
      );

      $entidade = $retorno[0];
  }
?>   
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="img/logo.png"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form method="post" action="core/usuario_repositorio.php">
          <input type="hidden" name="acao"
                                value="<?php echo empty($id) ? 'insert' : 'update' ?>">
                        <input type="hidden" name="id"
                                value="<?php echo $entidade['id'] ?? '' ?>">
          <!-- Nome completo input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="nome" >Nome completo</label>
            <input type="text" name="nome" id="nome" class="form-control form-control-lg"/>
          </div>

          <!-- Nome usuário input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="nomeUsuario" >Nome de usuário</label>
            <input type="text" name="nomeUsuario" id="nomeUsuario" class="form-control form-control-lg"/>
            
          </div>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="email" >E-mail</label>
            <input type="text" name="email" id="email" class="form-control form-control-lg"/>
          </div>
 
          <!-- Senha input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control form-control-lg" />
          </div>

          <!-- Confirmar senha input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="senha">Confirmar senha</label>
            <input type="password" id="senha" class="form-control form-control-lg" />
          </div>
 
          <div class="d-flex justify-content-around align-items-center mb-4">
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block">Cadastrar</button>
</body>
        </form>
      </div>
    </div>
  </div>
</section>
</html>
 
 