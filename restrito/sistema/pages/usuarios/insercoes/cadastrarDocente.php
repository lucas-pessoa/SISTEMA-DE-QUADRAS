<?php

include "../../../../conectabd.php";

$nome = trim($_POST['nome']); //remove caracteres em branco e outros caracteres prefedinidos
$email = trim($_POST['email']);
$SIAPE = trim($_POST['SIAPE']);
$departamento = trim($_POST['departamento']);
$senha = md5($_POST['senha']);

/* Vamos checar algum erro nos campos */

if ((!$nome) || (!$email) || (!$departamento) || (!$SIAPE)){

	if (!$nome){
		header("Location: ../insereUsuario.php?user=docente&erro=1");
	}

	if (!$email){
		header("Location: ../insereUsuario.php?user=docente&erro=2");
	}

	if (!$departamento){
		header("Location: ../insereUsuario.php?user=docente&erro=3");
	}

	if (!$SIAPE){
		header("Location: ../insereUsuario.php?user=docente&erro=4");
	}

}else{
	 //realiza uma consulta no banco
	$sql_email_check = mysqli_query($conectabd, "SELECT COUNT(id_usuario) FROM docente WHERE email='{$email}'");

	$sql_SIAPE_check = mysqli_query($conectabd, "SELECT COUNT(id_usuario) FROM docente WHERE SIAPE='{$SIAPE}'");

	$eReg = mysqli_fetch_array($sql_email_check); //Obtém uma linha de resultado como um vetor numero e um associativo
	$siapeReg = mysqli_fetch_array($sql_SIAPE_check);

	$email_check = $eReg[0];
	$SIAPE_check = $siapeReg[0];

	if (($email_check > 0) || ($SIAPE_check > 0)){

		if ($email_check > 0){
		unset($email);
		header("Location: ../insereUsuario.php?user=docente&erro=5");
		}

		if ($SIAPE_check > 0){
		unset($SIAPE);
		header("Location: ../insereUsuario.php?user=docente&erro=6");
		}

	}else{

		$sql = mysqli_query($conectabd,
			"INSERT INTO docente(nomeCompleto, SIAPE, senha, departamento, email, data_cadastro, nivel_usuario) 
			VALUES('$nome', '$SIAPE', '$senha', '$departamento', '$email', now(), '1')") or die(mysqli_error($conectabd));

		if (!$sql){
			header("Location: ../insereUsuario.php?user=docente&erro=7");
		}else{

			$id_usuario = mysqli_insert_id($conectabd);

			$sql = mysqli_query($conectabd, "UPDATE docente SET ativado='1' WHERE id_usuario='{$id_usuario}'");

			header("Location: ../insereUsuario.php?user=docente&contacriada=1");
		}
	}
}
?>