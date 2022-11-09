<?php
    session_start();
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" 
              href="lib2/css/bootstrap.css">
    <link rel="stylesheet" 
              href="style.css">
</head>
<body>
    <section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="img/logo.png"
            class="img-fluid" alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <form method="post" action="core/usuario_repositorio.php">
                <input type="hidden" name="acao" value="login">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="text" id="email" name="email" class="form-control form-control-lg" require="required" />
                    <label class="form-label" for="email">Email</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="senha" name="senha" class="form-control form-control-lg" require="required" />
                    <label class="form-label" for="senha">Senha</label>
                </div>

                <div class="d-flex justify-content-around align-items-center mb-4">
                    <!-- Checkbox -->
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                    <label class="form-check-label" for="form1Example3"> Lembre de mim </label>
                    </div>
                    <a href="#!">Esqueceu a senha?</a>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>

                <div class="divider d-flex align-items-center my-4">
                    <p class="text-center fw-bold mx-3 mb-0 text-muted">OU</p>
                </div>

                <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
                role="button">
                <i class="fab fa-facebook-f me-2"></i>Continuar com Facebook
                </a>
                <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!"
                role="button">
                <i class="fab fa-google me-2"></i>Continuar com Google</a>
            </form>
        </div>
        </div>
    </div>
    </section>  
</body>
