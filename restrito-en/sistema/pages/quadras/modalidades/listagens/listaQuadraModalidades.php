<?php
include('../../../../../conectabd.php');

$sql = "SELECT * FROM quadra ORDER BY nroQuadra ASC";

$resultado = mysqli_query($conectabd, $sql);

while ($array = mysqli_fetch_assoc($resultado)) {
	echo '<option id="'. $array["nroQuadra"] . '" style="padding: 3px;">Quadra ' . $array["nroQuadra"] . '</option>';
	}

?>