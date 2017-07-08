<?php
include('../../../conectabd.php');

$modalidade = $_POST["modalidade"];

$sql = "SELECT * FROM ativoferecida WHERE nome='{$modalidade}' ORDER BY nroQuadra ASC";

$resultado = mysqli_query($conectabd, $sql);

while ($array = mysqli_fetch_assoc($resultado)) {
	echo '<option style="padding: 5px;">Quadra ' . $array["nroQuadra"] . '</option>';
	}
?>