<?php // teste
    session_start();
    require_once '../includes/funcoes.php';
    require_once 'conexao_mysql.php';
    require_once 'sql.php';
    require_once 'mysql.php';
    
    foreach ($_POST as $indice => $dado) {
        $$indice = limparDados($dado);
    }

    foreach ($_GET as $indice => $dado) {
        $$indice = limparDados($dado);
    }

    $target_dir = "../upload/videos/";
    $video = basename($_FILES["video"]["name"]);
    $target_file = $target_dir . $video;
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

     // Check file size -- Kept for 500Mb
    if ($_FILES["video"]["size"] > 500000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "wmv" && $imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "MP4") {
        echo "Sorry, only wmv, mp4 & avi files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["video"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    // ===============================================  File Upload Code u  ==========================================================

    
    
        
    print_r($_SESSION);
    switch ($acao) {
        
        case 'insert':
            $dados = [
            'titulo' => $titulo,        
            'filePath'=> $video,
            'datapubli' => date("Y/m/d"),
            'fk_Usuario_codUsuario' => $_SESSION['login']['usuario']['codUsuario'],
            'fk_materia_codMateria' => $codMateria,
            'private' => true,//  if($private == 'privado'){ true;} else {false;},
            ];
            print_r($dados);
            insere(
            'video',
            $dados
            );

            break;
        case 'update':
            $id = (int)$id;
            $dados = [
            'nome' => $nome,
            'nomeUsuario' => $nomeUsuario,
            'email' => $email
            ];

            $criterio = [
            ['codUsuario', '=', $id]
            ];

            atualiza(
            'video',
            $dados,
            $criterio
            );

            break;
        
    }
    header('Location: ../index.php');
?>
