<?php

 session_start();

 session_destroy();

 if (!isset($_SESSION['nome'])){ //DESCOBRIR PORQUE NÃO TEM USUARIO_ID NA SESSION
 	header("Location: ../../login/aluno/login.php");
	exit;
 }

?>