<?php

session_start(); // Inicia a session

include "conectabd.php";

$RA = $_POST['RA'];
$senha = $_POST['senha'];

if ((!$RA) || (!$senha)){

	/*echo "Por favor, todos campos devem ser preenchidos! <br /><br />";
	include "login.php";*/
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

			header("Location: area_restrita.php");

		}

	}else{
		header("Location: login.php?erro=2");
		/*echo "Você não pode logar-se! Este usuário e/ou senha não são válidos!<br /> Por favor tente novamente!<br />";
		include "login.php";*/
	}
}

?>