<?php

function checarSessao(){
// Verifica se não há a variável da sessão que identifica o usuário
    if (!isset($_SESSION['id_usuario'])){

// Destrói a sessão por segurança
        session_destroy();
// Redireciona o visitante de volta pro login
        header("Location: ../../../index.html");
        exit;
    }
}

// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION))
    session_start();

checarSessao();

?>