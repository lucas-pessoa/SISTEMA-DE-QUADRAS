<?php

include "../verificaSessao.php";
include "../../../conectabd.php";

$novoNome = trim($_POST['novoNome']);
$novoEmail = trim($_POST['novoEmail']);
$id_usuario = $_SESSION['id_usuario'];

/* Vamos checar algum erro nos campos */

if ((!$novoNome) || (!$novoEmail)){

	if (!$novoNome){
		header("Location: meuperfil.php?erro=1");
	}

	if (!$novoEmail){
		header("Location: meuperfil.php?erro=2");
	}

	if ((!$novoNome) && (!$novoEmail)){
		header("Location: meuperfil.php?erro=3");
	}

}

else{

	if (!$conectabd) {
		die("Conexão falhou: " . mysqli_connect_error());
	}

	switch($_SESSION['nivel_usuario']){
		case 0:
		$sql = "UPDATE aluno SET nomeCompleto='$novoNome', email='$novoEmail' WHERE id_usuario='{$id_usuario}'";
		break;

		case 1:
		$sql = "UPDATE docente SET nomeCompleto='$novoNome', email='$novoEmail' WHERE id_usuario='{$id_usuario}'";
		break;

		case 2:
		$sql = "UPDATE orgacademica SET nomeCompleto='$novoNome', email='$novoEmail' WHERE id_usuario='{$id_usuario}'";
		break;

		case 3:
		$sql = "UPDATE administrador SET nomeCompleto='$novoNome', email='$novoEmail' WHERE id_usuario='{$id_usuario}'";
		break;
	}

	if (mysqli_query($conectabd, $sql)) {
		switch($_SESSION['nivel_usuario']){
			case 0:
			$sql2 = mysqli_query($conectabd, "SELECT * FROM aluno WHERE id_usuario='{$id_usuario}'");
			break;

			case 1:
			$sql2 = mysqli_query($conectabd, "SELECT * FROM doente WHERE id_usuario='{$id_usuario}'");
			break;

			case 2:
			$sql2 = mysqli_query($conectabd, "SELECT * FROM orgacademica WHERE id_usuario='{$id_usuario}'");
			break;

			case 3:
			$sql2 = mysqli_query($conectabd, "SELECT * FROM administrador WHERE id_usuario='{$id_usuario}'");
			break;
		}

		$tuplas_check = mysqli_num_rows($sql2);

		if ($tuplas_check > 0){

			while ($tupla = mysqli_fetch_array($sql2)){ //$tupla é um array que relaciona as os atributos do banco / nro do vetor, aos seu valores
				foreach ($tupla AS $atributo => $valor){
					//atributo são os atributos ou indices do vetor 0/id_usuario, 1/nomeCompleto
					//valor sao os resultados dos atributos ou indices do vetor 1/1, Lucas/Lucas
					$$atributo = stripslashes($valor); 
					// $($atributo) no primeiro vira $id_usuario, e assim por diante. Variavel de variável.
					// stripslashes remove barras '\'
				}
				switch($_SESSION['nivel_usuario']){
					case 0:
					$_SESSION['id_usuario'] = $id_usuario;
					$_SESSION['RA'] = $RA;
					$_SESSION['nome'] = $nomeCompleto;
					$_SESSION['email'] = $email;
					$_SESSION['curso'] = $curso;
					$_SESSION['nivel_usuario'] = $nivel_usuario;
					$_SESSION['ativado'] = $ativado;
					break;

					case 1:
					$_SESSION['id_usuario'] = $id_usuario;
					$_SESSION['SIAPE'] = $SIAPE;
					$_SESSION['nome'] = $nomeCompleto;
					$_SESSION['email'] = $email;
					$_SESSION['departamento'] = $departamento;
					$_SESSION['nivel_usuario'] = $nivel_usuario;
					$_SESSION['ativado'] = $ativado;
					break;

					case 2:
					$_SESSION['id_usuario'] = $id_usuario;
					$_SESSION['CNPJ'] = $CNPJ;
					$_SESSION['nome'] = $nomeCompleto;
					$_SESSION['email'] = $email;
					$_SESSION['nivel_usuario'] = $nivel_usuario;
					$_SESSION['ativado'] = $ativado;
					break;

					case 3:
					$_SESSION['id_usuario'] = $id_usuario;
					$_SESSION['login'] = $login;
					$_SESSION['nome'] = $nomeCompleto;
					$_SESSION['email'] = $email;
					$_SESSION['nivel_usuario'] = $nivel_usuario;
					$_SESSION['ativado'] = $ativado;
					break;
				}

				$_SESSION['id_usuario'] = $id_usuario;
				$_SESSION['RA'] = $RA;
				$_SESSION['nome'] = $nomeCompleto;
				$_SESSION['email'] = $email;
				$_SESSION['curso'] = $curso;
				$_SESSION['nivel_usuario'] = $nivel_usuario;
				$_SESSION['ativado'] = $ativado;
			}
		}
		header("Location: meuperfil.php?atualizado=1");
	}else{
		header("Location: meuperfil.php?erro=4");
	}
	mysqli_close($conectabd);
}
?>