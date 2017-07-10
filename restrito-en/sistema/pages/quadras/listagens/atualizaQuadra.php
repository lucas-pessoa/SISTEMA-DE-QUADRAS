<?php
include "../../../../conectabd.php";

$nroQuadra  = $_POST["editaNro"];
$descricao = $_POST["editaDesc"];
$reservada = $_POST["editaReserva"];

$sql = "UPDATE quadra SET descricao='$descricao', reservada='$reservada' WHERE nroQuadra='{$nroQuadra}'";

$resultado = mysqli_query($conectabd, $sql);

	if ($resultado){
		echo '<script>alert("Atualização efetuada com sucesso!");</script>';
	}
	else{
		//echo '<p class="erro text-center">Problema com o banco de dados! Edição não realizada.</p>';
		echo '<script>alert("Atualização não efetuada. Problema no banco de dados.");</script>';
	}
		
mysqli_close($conectabd);
?>