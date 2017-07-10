<?php

include "../../../../../conectabd.php";

$nroQuadra = $_POST['nroQuadra'];

$modalidade = $_POST['modalidade'];

$sql_modalidade_check = mysqli_query($conectabd, "SELECT COUNT(id_atividade) FROM ativoferecida WHERE nroQuadra='{$nroQuadra}' AND nome='{$modalidade}'");

$modalidadeReg = mysqli_fetch_array($sql_modalidade_check);

$modalidade_check = $modalidadeReg[0];

if ($modalidade_check > 0){
	echo '<script>alert("Esta quadra já possui a modalidade ' . $modalidade . ' atrelada a ela.");</script>';
}else{

	$sql = "INSERT INTO ativoferecida(nroQuadra, nome, data_cadastro) VALUES('$nroQuadra', '$modalidade', now())";

	if (!mysqli_query($conectabd, $sql)){
		echo '<script>alert("Não foi possível realizar a inserção da modalidade.");</script>';
	}else{

		$id_atividade = mysqli_insert_id($conectabd);

		echo '<script>alert("Inserção de modalidade realizada com sucesso.");</script>';
	}
}
	?>