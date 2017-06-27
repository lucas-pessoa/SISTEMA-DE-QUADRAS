<?php
include('../../../../conectabd.php');

$tabela  = $_POST["tabela"]; 
$nro_id  = $_POST["nro_id"];  

$sql = "DELETE FROM $tabela WHERE id_usuario = '{$nro_id}'";

if (mysqli_query($conectabd, $sql)) {
    echo "<script>alert('Executado com sucesso')</script>";
} else {
    echo "<script>alert('Edeu merda')</script> " . mysqli_error($conn);
}

mysqli_close($conectabd);

?>