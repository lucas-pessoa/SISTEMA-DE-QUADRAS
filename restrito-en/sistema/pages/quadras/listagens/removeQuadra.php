<?php
include('../../../../conectabd.php');

$nro_id  = $_POST["nro_id"];  

$sql = "DELETE FROM quadra WHERE nroQuadra = '{$nro_id}'";

if (mysqli_query($conectabd, $sql)) {
    echo "<script>alert('Quadra apagada com sucesso!')</script>";
} else {
    echo "<script>alert('Remoção não realizada. Problema no banco de dados!')</script> " . mysqli_error($conn);
}

mysqli_close($conectabd);

?>