<?php
include('../../../../conectabd.php');

$tabela  = $_POST["tabela"]; 
$nro_id  = $_POST["nro_id"];  

$sql = "DELETE FROM $tabela WHERE id_usuario = '{$nro_id}'";

if (mysqli_query($conectabd, $sql)) {
    echo "<script>alert('Usuário apagado com sucesso!')</script>";
} else {
    echo "<script>alert('Remoção não realizada. Problema no banco de dados!')</script> " . mysqli_error($conn);
}

mysqli_close($conectabd);

?>