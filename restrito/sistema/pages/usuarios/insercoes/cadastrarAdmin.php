<?php

include "../../../../conectabd.php";

$nome = trim($_POST['nome']); //remove caracteres em branco e outros caracteres prefedinidos
$email = trim($_POST['email']);
$login = trim($_POST['login']);
$senha = md5($_POST['senha']);

/* Vamos checar algum erro nos campos */

if ((!$nome) || (!$email) || (!$login)){

	if (!$nome){
		header("Location: ../insereUsuario.php?user=administrador&erro=1");
	}

	if (!$email){
		header("Location: ../insereUsuario.php?user=administrador&erro=2");
	}

	if (!$login){
		header("Location: ../insereUsuario.php?user=administrador&erro=3");
	}

}else{
	 //realiza uma consulta no banco
	$sql_email_check = mysqli_query($conectabd, "SELECT COUNT(id_usuario) FROM administrador WHERE email='{$email}'");

	$sql_login_check = mysqli_query($conectabd, "SELECT COUNT(id_usuario) FROM administrador WHERE login='{$login}'");

	$eReg = mysqli_fetch_array($sql_email_check); //Obtém uma linha de resultado como um vetor numero e um associativo
	$loginReg = mysqli_fetch_array($sql_login_check);

	$email_check = $eReg[0];
	$login_check = $loginReg[0];

	if (($email_check > 0) || ($login_check > 0)){

		if ($email_check > 0){
		unset($email);
		header("Location: ../insereUsuario.php?user=administrador&erro=4");
		}

		if ($login_check > 0){
		unset($login);
		header("Location: ../insereUsuario.php?user=administrador&erro=5");
		}

	}else{

		$sql = mysqli_query($conectabd,
			"INSERT INTO administrador(nomeCompleto, login, senha, email, data_cadastro, nivel_usuario) 
			VALUES('$nome', '$login', '$senha', '$email', now(), '3')") or die(mysqli_error($conectabd));

		if (!$sql){
			header("Location: ../insereUsuario.php?user=administrador&erro=6");
		}else{

			$id_usuario = mysqli_insert_id($conectabd);

			$sql = mysqli_query($conectabd, "UPDATE administrador SET ativado='1' WHERE id_usuario='{$id_usuario}'");

			header("Location: ../insereUsuario.php?user=administrador&contacriada=1");
		}
	}
}
?>