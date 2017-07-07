<?php

include "../../../conectabd.php";
include "../verificaSessao.php";

$quadra = $_POST["quadra"];
$data = $_POST["data"];
$horaInicio = $_POST["horaInicio"];
$horaFim = $_POST["horaFim"];
$modalidade = $_POST["modalidade"];
$id_usuario = $_SESSION['id_usuario'];
$nivel_usuario = $_SESSION['nivel_usuario'];

$sql_reserva_check = mysqli_query($conectabd, "SELECT COUNT(id_reserva) FROM reserva WHERE data_reserva='{$data}' AND hora_inicio='{$horaInicio}' AND nroQuadra='{$quadra}'");

$reservaReg = mysqli_fetch_array($sql_reserva_check);

$reserva_check = $reservaReg[0];

if ($reserva_check > 0){
	echo '<script>alert("Nao foi possível reservar.");</script>';
}else{

	$insere = "INSERT INTO reserva (data_reserva, hora_inicio, hora_fim, ativ_praticada, nroQuadra, id_usuario, nivel_usuario) VALUES ('$data', '$horaInicio', '$horaFim', '$modalidade', '$quadra', '$id_usuario', '$nivel_usuario')";

	//$sql = mysqli_query($conectabd, $insere);
	if(!mysqli_query($conectabd, $insere))
		echo '<script>alert("Nao conectou");</script>';
}

?>