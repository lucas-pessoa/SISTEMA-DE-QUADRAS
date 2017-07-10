<?php

include "../verificaSessao.php";
include "../../../conectabd.php";

$antigaSenha = trim($_POST['antigaSenha']);
$novaSenha = trim($_POST['novaSenha']);
$confSenha = trim($_POST['confSenha']);
$id_usuario = $_SESSION['id_usuario'];


/* Vamos checar algum erro nos campos */

if ((!$antigaSenha) || (!$novaSenha) || (!$confSenha)){

	if (!$antigaSenha){
		header("Location: meuperfil.php?errosenha=1");
	}

	if (!$novaSenha){
		header("Location: meuperfil.php?errosenha=2");
	}

	if (!$confSenha){
		header("Location: meuperfil.php?errosenha=3");
	}

	if ((!$antigaSenha) && (!$novaSenha)){
		header("Location: meuperfil.php?errosenha=4");
	}

	if ((!$antigaSenha) && (!$confSenha)){
		header("Location: meuperfil.php?errosenha=5");
	}

	if ((!$novaSenha) && (!$confSenha)){
		header("Location: meuperfil.php?errosenha=6");
	}

	if (((!$antigaSenha) && (!$novaSenha)) && (!$confSenha)){
		header("Location: meuperfil.php?errosenha=7");
	}

}

else{

	if (!$conectabd) {
		die("Conexão falhou: " . mysqli_connect_error());
	}

	switch($_SESSION['nivel_usuario']){
		case 0:
		$sql = "SELECT senha FROM aluno WHERE id_usuario='{$id_usuario}'";
		break;

		case 1:
		$sql = "SELECT senha FROM docente WHERE id_usuario='{$id_usuario}'";
		break;

		case 2:
		$sql = "SELECT senha FROM orgacademica WHERE id_usuario='{$id_usuario}'";
		break;

		case 3:
		$sql = "SELECT senha FROM administrador WHERE id_usuario='{$id_usuario}'";
		break;
	}

	$resultado = mysqli_query($conectabd, $sql);
	if (mysqli_num_rows($resultado) > 0) {

		$row = mysqli_fetch_assoc($resultado);
		$senhaBD = $row["senha"];

		if($senhaBD == md5($antigaSenha)){
			if($novaSenha == $confSenha){
				switch($_SESSION['nivel_usuario']){
					case 0:
					$sqlSenha = "UPDATE aluno SET senha = MD5('$novaSenha') WHERE id_usuario='{$id_usuario}'";
					break;

					case 1:
					$sqlSenha = "UPDATE docente SET senha = MD5('$novaSenha') WHERE id_usuario='{$id_usuario}'";						
					break;

					case 2:
					$sqlSenha = "UPDATE orgacademica SET senha = MD5('$novaSenha') WHERE id_usuario='{$id_usuario}'";						
					break;

					case 3:
					$sqlSenha = "UPDATE administrador SET senha = MD5('$novaSenha') WHERE id_usuario='{$id_usuario}'";						
					break;
				}
				if (mysqli_query($conectabd, $sqlSenha)) {
					header("Location: meuperfil.php?atualizasenha=1");
				}
				else{
						header("Location: meuperfil.php?errosenha=8"); //nao conectou
					}
				}else{
       			header("Location: meuperfil.php?errosenha=9"); //as novas senhas nao conferem
       		}
       	}else{
    		header("Location: meuperfil.php?errosenha=10"); // a senha registrada nao é igual a inserida
    	}
    }else{
		header("Location: meuperfil.php?errosenha=11"); // Nao foram encontrados resultados
	}
}

mysqli_close($conectabd);
?>

<!-- CORRIGIR MOUSE HOVER ENCERRAR SESSÃO