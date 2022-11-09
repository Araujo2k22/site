<?php // teste
    session_start();
    require_once '../includes/funcoes.php';
    require_once 'conexao_mysql.php';
    require_once 'sql.php';
    require_once 'mysql.php';
    $salt = 'ifsp';

    foreach ($_POST as $indice => $dado) {
        $$indice = limparDados($dado);
    }

    foreach ($_GET as $indice => $dado) {
        $$indice = limparDados($dado);
    }

    switch ($acao) {
        case 'insert':
            $dados = [
            'nome' => $nome,
            'nomeUsuario' => $nomeUsuario,
            'email' => $email,
            'habilitado' => 1,
            'senha' => crypt($senha,$salt)
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
        case 'login':
            $criterio = [
                    ['email', '=', $email],
                    ['AND', 'habilitado'. '=', 1]
            ];

            $retorno = buscar(
                'usuario',
                ['codUsuario', 'nome', 'nomeUsuario', 'email', 'senha'],
                $criterio
            );

            if(count($retorno) > 0){
                if(crypt($senha, $salt) == $retorno[0]['senha']){
                $_SESSION['login']['usuario'] = $retorno[0];
                if(!empty($_SESSION['url_retorno'])){
                    header('Location: ' . $_SESSION['url_retorno']);
                    $_SESSION['url_retorno'] = '';
                    exit; 
                }

                }

            }
            break;
        case 'logout':
            session_destroy();
            break;
        case 'status':
            $codUsuario = (int) $codUsuario;
            $valor = (int) $valor;

            $dados = [
                'habilitado' => $valor
            ];

            $criterio = [
                ['codUsuario', '=', $codUsuario]
            ];

            atualiza(
                'usuario',
                $dados,
                $criterio
            );

            header('Location: ../usuarios.php');
            exit;
            break;
            
        case 'habilitado':
            $codUsuario = (int) $codUsuario;
            $valor = (int) $valor;
            
            $dados = [
                'habilitado' => $valor    
            ];

            $criterio = [
                ['codUsuario', '=', $codUsuario]
            ];

            atualiza(
                'usuario',
                $dados,
                $criterio
            );
            
            header('location: ../usuarios.php');
            exit;
            break;  
    }
    header('Location: ../index.php');
?>
