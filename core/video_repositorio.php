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

    $fotos_name = array();
    $fotos = array_filter($_FILES['foto']['name']); 
    $total_count = count($_FILES['foto']['name']);

    for( $i=0 ; $i < $total_count ; $i++ ) {      
        $tmpFilePath = $_FILES['foto']['tmp_name'][$i];
        if ($tmpFilePath != ""){
            $foto_name = $_FILES['foto']['name'][$i];
            $path_parts = pathinfo($foto_name);
            $imageFileType = strtolower(pathinfo($foto_name, PATHINFO_EXTENSION));
            $foto_name = $path_parts['filename'].time().".".$imageFileType ;    
            $newFilePath = "../upload/post/" . $foto_name;
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                $fotos_name[] = $foto_name;
            }
        }
    }
        

    switch ($acao) {
        case 'insert':
            $dados = [
            'titulo' => $nome,
            'autor' => $nomeUsuario,
            'datapubli' => $email,
            'private' => 0
            ];

            insere(
            'usuario',
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
            'usuario',
            $dados,
            $criterio
            );

            break;
        
    }
    header('Location: ../index.php');
?>
