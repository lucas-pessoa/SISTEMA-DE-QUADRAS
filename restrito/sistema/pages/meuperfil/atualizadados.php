<?php

include "../verificaSessao.php";
include "../../../login/aluno/conectabd.php";

$novoNome = trim($_POST['novoNome']);
$novoEmail = trim($_POST['novoEmail']);
$usuario_id = $_SESSION['usuario_id'];

/* Vamos checar algum erro nos campos */

if ((!$novoNome) || (!$novoEmail)){

	if (!$novoNome){
		header("Location: ../meuperfil.php?erro=1");
	}

	if (!$novoEmail){
		header("Location: ../meuperfil.php?erro=2");
	}

	if ((!$novoNome) && (!$novoEmail)){
		header("Location: ../meuperfil.php?erro=3");
	}

}

else{

	if (!$conectabd) {
    	die("Conexão falhou: " . mysqli_connect_error());
	}

	$sql = "UPDATE usuarios SET nomeCompleto='$novoNome', email='$novoEmail' WHERE usuario_id='{$usuario_id}'";

	if (mysqli_query($conectabd, $sql)) {
		$sql2 = mysqli_query($conectabd, "SELECT * FROM usuarios WHERE usuario_id='{$usuario_id}'");
		$tuplas_check = mysqli_num_rows($sql2);

		if ($tuplas_check > 0){

			while ($tupla = mysqli_fetch_array($sql2)){ //$tupla é um array que relaciona as os atributos do banco / nro do vetor, aos seu valores
				foreach ($tupla AS $atributo => $valor){
					//atributo são os atributos ou indices do vetor 0/usuario_id, 1/nomeCompleto
					//valor sao os resultados dos atributos ou indices do vetor 1/1, Lucas/Lucas
					$$atributo = stripslashes($valor); 
					// $($atributo) no primeiro vira $usuario_id, e assim por diante. Variavel de variável.
					// stripslashes remove barras '\'
				}
				$_SESSION['usuario_id'] = $usuario_id;
				$_SESSION['RA'] = $RA;
				$_SESSION['nome'] = $nomeCompleto;
				$_SESSION['email'] = $email;
				$_SESSION['curso'] = $curso;
				$_SESSION['nivel_usuario'] = $nivel_usuario;
				$_SESSION['ativado'] = $ativado;
			}
		}
	    header("Location: ../meuperfil.php?atualizado=1");
	}else{
		header("Location: ../meuperfil.php?erro=4");
	}
	mysqli_close($conectabd);
	}
?>