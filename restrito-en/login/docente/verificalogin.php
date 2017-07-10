<?php

if (!isset($_SESSION))
    session_start();

include "../../conectabd.php";

$SIAPE = $_POST['SIAPE'];
$senha = $_POST['senha'];

if ((!$SIAPE) || (!$senha)){
	
	header("Location: login.php?erro=1");

}else{

	$senha = md5($senha);
	$sql = mysqli_query($conectabd, "SELECT * FROM docente WHERE SIAPE='{$SIAPE}' AND senha='{$senha}'");

	$tuplas_check = mysqli_num_rows($sql);

	if ($tuplas_check > 0){

		while ($tupla = mysqli_fetch_array($sql)){ //$tupla é um array que relaciona as os atributos do banco / nro do vetor, aos seu valores
			foreach ($tupla AS $atributo => $valor){
				//atributo são os atributos ou indices do vetor 0/id_usuario, 1/nomeCompleto
				//valor sao os resultados dos atributos ou indices do vetor 1/1, Lucas/Lucas
				$$atributo = stripslashes($valor); 
				// $($atributo) no primeiro vira $id_usuario, e assim por diante. Variavel de variável.
				// stripslashes remove barras '\'
			}

			$_SESSION['id_usuario'] = $id_usuario;
			$_SESSION['SIAPE'] = $SIAPE;
			$_SESSION['nome'] = $nomeCompleto;
			$_SESSION['email'] = $email;
			$_SESSION['departamento'] = $departamento;
			$_SESSION['nivel_usuario'] = $nivel_usuario;
			$_SESSION['ativado'] = $ativado;

			if ($_SESSION['ativado'] === '0'){
				session_destroy();
				header("Location: login.php?erro=2");
				exit;
			}
			else{
				mysqli_query($conectabd, "UPDATE docente SET data_ultimo_login = now() WHERE id_usuario ='{$id_usuario}'");
				header("Location: ../../sistema/pages/index.php");
			}

		}

	}else{
		header("Location: login.php?erro=3");
	}
}

?>