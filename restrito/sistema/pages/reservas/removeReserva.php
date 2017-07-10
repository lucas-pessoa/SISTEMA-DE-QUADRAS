<?php
include('../../../conectabd.php');

$idReserva  = $_POST["idReserva"];  

$sql = "DELETE FROM reserva WHERE id_reserva = '{$idReserva}'";

if (mysqli_query($conectabd, $sql)) {
    echo "<script>alert('Reserva liberada com sucesso!')</script>";
} else {
    echo "<script>alert('Liberação não realizada. Problema no banco de dados!')</script> " . mysqli_error($conn);
}

mysqli_close($conectabd);

?>