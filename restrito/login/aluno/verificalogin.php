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

	$tuplas_check = mysqli_num_rows($sql);

	if ($tuplas_check > 0){

		while ($tupla = mysqli_fetch_array($sql)){ //$tupla é um array que relaciona as os atributos do banco / nro do vetor, aos seu valores
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

			mysqli_query($conectabd, "UPDATE usuarios SET data_ultimo_login = now() WHERE usuario_id ='{$usuario_id}'");

			header("Location: ../../sistema/pages/index.php");

		}

	}else{
		header("Location: login.php?erro=2");
	}
}

?>