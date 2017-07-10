<?php

include "../../../../conectabd.php";

$descricao = $_POST['descricao'];

$reservada = $_POST['reservada'];

if ($reservada === 'Sim')
	$reservada = 1;
else
	$reservada = 0;

$sql = "INSERT INTO quadra(descricao, data_cadastro, reservada) VALUES('$descricao', now(), '$reservada')";

$resultado = mysqli_query($conectabd, $sql);

		if (!$sql){
			header("Location: ../insereQuadra.php?erro=1");
		}else{

			$nroQuadra = mysqli_insert_id($conectabd);

			header("Location: ../insereQuadra.php?quadracriada=1");
		}

echo $reservada;
?>