<?php

include "../../conectabd.php";

$nome = trim($_POST['nome']); //remove caracteres em branco e outros caracteres prefedinidos
$email = trim($_POST['email']);
$RA = trim($_POST['RA']);
$curso = trim($_POST['curso']);
$senha = md5($_POST['senha']);

/* Vamos checar algum erro nos campos */

if ((!$nome) || (!$email) || (!$curso) || (!$RA)){

	if (!$nome){
		header("Location: cadastro.php?erro=1");
	}

	if (!$email){
		header("Location: cadastro.php?erro=2");
	}

	if (!$curso){
		header("Location: cadastro.php?erro=3");
	}

	if (!$RA){
		header("Location: cadastro.php?erro=4");
	}

}else{
	 //realiza uma consulta no banco
	$sql_email_check = mysqli_query($conectabd, "SELECT COUNT(id_usuario) FROM aluno WHERE email='{$email}'");

	$sql_RA_check = mysqli_query($conectabd, "SELECT COUNT(id_usuario) FROM aluno WHERE RA='{$RA}'");

	$eReg = mysqli_fetch_array($sql_email_check); //Obtém uma linha de resultado como um vetor numero e um associativo
	$raReg = mysqli_fetch_array($sql_RA_check);

	$email_check = $eReg[0];
	$RA_check = $raReg[0];

	if (($email_check > 0) || ($RA_check > 0)){

		if ($email_check > 0){
		unset($email);
		header("Location: cadastro.php?erro=5");
		}

		if ($RA_check > 0){
		unset($RA);
		header("Location: cadastro.php?erro=6");
		}

	}else{

		$sql = mysqli_query($conectabd,
			"INSERT INTO aluno(nomeCompleto, RA, senha, curso, email, data_cadastro, nivel_usuario) 
			VALUES('$nome', '$RA', '$senha', '$curso', '$email', now(), '0')") or die(mysqli_error($conectabd));

		if (!$sql){
			header("Location: cadastro.php?erro=7");
		}else{

			$id_usuario = mysqli_insert_id($conectabd);

			$sql = mysqli_query($conectabd, "UPDATE aluno SET ativado='1' WHERE id_usuario='{$id_usuario}'");

			header("Location: login.php?contacriada=1");
		}
	}
}
?>