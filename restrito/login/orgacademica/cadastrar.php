<?php

include "../../conectabd.php";

$nome = trim($_POST['nome']); //remove caracteres em branco e outros caracteres prefedinidos
$email = trim($_POST['email']);
$CNPJ = trim($_POST['CNPJ']);
$senha = md5($_POST['senha']);

/* Vamos checar algum erro nos campos */

if ((!$nome) || (!$email) || (!$CNPJ)){

	if (!$nome){
		header("Location: cadastro.php?erro=1");
	}

	if (!$email){
		header("Location: cadastro.php?erro=2");
	}

	if (!$CNPJ){
		header("Location: cadastro.php?erro=3");
	}

}else{
	 //realiza uma consulta no banco
	$sql_email_check = mysqli_query($conectabd, "SELECT COUNT(id_usuario) FROM OrgAcademica WHERE email='{$email}'");

	$sql_CNPJ_check = mysqli_query($conectabd, "SELECT COUNT(id_usuario) FROM OrgAcademica WHERE CNPJ='{$CNPJ}'");

	$eReg = mysqli_fetch_array($sql_email_check); //Obtém uma linha de resultado como um vetor numero e um associativo
	$CNPJReg = mysqli_fetch_array($sql_CNPJ_check);

	$email_check = $eReg[0];
	$CNPJ_check = $CNPJReg[0];

	if (($email_check > 0) || ($CNPJ_check > 0)){

		if ($email_check > 0){
		unset($email);
		header("Location: cadastro.php?erro=4");
		}

		if ($CNPJ_check > 0){
		unset($CNPJ);
		header("Location: cadastro.php?erro=5");
		}

	}else{

		$sql = mysqli_query($conectabd,
			"INSERT INTO OrgAcademica(nomeCompleto, CNPJ, senha, email, data_cadastro, nivel_usuario) 
			VALUES('$nome', '$CNPJ', '$senha', '$email', now(), '2')") or die(mysqli_error($conectabd));

		if (!$sql){
			header("Location: cadastro.php?erro=6");
		}else{

			$id_usuario = mysqli_insert_id($conectabd);

			$sql = mysqli_query($conectabd, "UPDATE OrgAcademica SET ativado='1' WHERE id_usuario='{$id_usuario}'");

			header("Location: login.php?contacriada=1");
		}
	}
}
?>