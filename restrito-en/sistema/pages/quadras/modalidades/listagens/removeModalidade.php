<?php
include('../../../../../conectabd.php');

$nro_id  = $_POST["nro_id"];  

$sql = "DELETE FROM ativoferecida WHERE id_atividade = '{$nro_id}'";

if (mysqli_query($conectabd, $sql)) {
    echo "<script>alert('Modalidade apagada com sucesso!')</script>";
} else {
    echo "<script>alert('Remoção não realizada. Problema no banco de dados!')</script> " . mysqli_error($conn);
}

mysqli_close($conectabd);

?>