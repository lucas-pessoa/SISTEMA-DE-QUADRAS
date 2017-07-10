<?php
include "../../../../../conectabd.php";

$id_atividade  = $_POST["editaID"];
$nroQuadra = $_POST["editaNro"];
$nome = $_POST["editaNome"];

$sql = "UPDATE ativoferecida SET nroQuadra='$nroQuadra', nome='$nome' WHERE id_atividade='{$id_atividade}'";

$resultado = mysqli_query($conectabd, $sql);

	if ($resultado){
		echo '<script>alert("Atualização efetuada com sucesso!");</script>';
	}
	else{
		echo '<script>alert("Atualização não efetuada. Problema no banco de dados.");</script>';
	}
		
mysqli_close($conectabd);
?>