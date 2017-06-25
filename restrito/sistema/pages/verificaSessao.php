<?php

function checarSessao(){
// Verifica se não há a variável da sessão que identifica o usuário
    if (!isset($_SESSION['usuario_id'])){
// Destrói a sessão por segurança
        session_destroy();
// Redireciona o visitante de volta pro login
        header("Location: ../../login/aluno/login.php");
        exit;
    }
}

// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION))
    session_start();

checarSessao();

?>