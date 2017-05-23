<?php

if (!isset($_SESSION))
    session_start();

include "conectabd.php";

$RA = $_POST['RA'];
$senha = $_POST['senha'];

if ((!$RA) || (!$senha)){
	
	header("Location: login.php?erro=1");

}else{

	$senha = md5($senha);
	$sql = mysqli_query($conectabd, "SELECT * FROM usuarios WHERE RA='{$RA}' AND senha='{$senha}' AND ativado='1'");

	$login_check = mysqli_num_rows($sql);

	if ($login_check > 0){

		while ($row = mysqli_fetch_array($sql)){
			foreach ($row AS $key => $val){
				$$key = stripslashes($val); // remove barras '\'
			}

			$_SESSION['usuario_id'] = $usuario_id;
			$_SESSION['nome'] = $nome;
			$_SESSION['email'] = $email;
			$_SESSION['curso'] = $curso;
			$_SESSION['nivel_usuario'] = $nivel_usuario;

			mysqli_query($conectabd, "UPDATE usuarios SET data_ultimo_login = now() WHERE usuario_id ='{$usuario_id}'");

			header("Location: ../../sistema/pages/index.php");

		}

	}else{
		header("Location: login.php?erro=2");
	}
}

?>