<?php

// Se o usuário já estiver logado, redireciona ele para o sistema restrito até que ele deslogue

function checarSessao(){
// Verifica se não há a variável da sessão que identifica o usuário
    if (isset($_SESSION['id_usuario'])){
// Redireciona o visitante de volta pro sistema restrito
        header("Location: ../../sistema/pages/index.php");
        exit;
    }
}

if (!isset($_SESSION))
    session_start();

checarSessao();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Acesso Restrito - Docente</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/docente.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="card card-container">
            <!--<img id="profile-img" class="profile-img-card" src="avatar_2x.png" />-->
            <h1 class="text-center">Docente</h1>
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="verificalogin.php" method="post">
                <input type="text" id="SIAPE" name="SIAPE" class="form-control" placeholder="SIAPE" required autofocus>
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
                <?php
                    $erro = (isset($_GET['erro']) ? $_GET['erro'] : null);
                    switch($erro){
                        case 1:
                            echo "<span class='erro'>Preencha todos os campos.</span>";
                            break;
                        case 2:
                            echo "<span class='erro'>Esta conta não está ativada.</span>";
                            break;
                        case 3:
                            echo "<span class='erro'>SIAPE ou senha inválidos.</span>";
                            break;
                    }
                    $contacriada = (isset($_GET['contacriada']) ? $_GET['contacriada'] : null);
                    switch($contacriada){
                        case 1:
                            echo "<span class='acerto'>Cadastro efetuado com sucesso!</span>";
                            break;
                    }
                ?>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Acessar</button>
            </form>
            <!-- <a href="#" class="forgot-password">Esqueceu sua senha?</a> -->
            <hr>
            <a href="cadastro.php" class="btn btn-lg btn-primary btn-block btn-signin">Cadastre-se</a>
        </div>
    </div>
</body>
</html>
