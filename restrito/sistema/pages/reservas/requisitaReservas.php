<?php

include('../../../conectabd.php');

$quadraid  = $_POST["quadraid"]; 
$data  = $_POST["data"];

/*$sql = "SELECT * FROM $user ORDER BY id_usuario ASC ";
$resultado = mysqli_query($conectabd, $sql);

$sql2 = "SELECT COUNT(id_usuario) FROM $user";
$resultado2 = mysqli_query($conectabd, $sql2);

$array2 = mysqli_fetch_row($resultado2);  
$total_registros = $array2[0]; 
$total_paginas = ceil($total_registros / $limite);*/

echo '
<div class="table-responsive">
    <table class="table table-bordered table-hover text-center">
        <thead>
            <tr>
                <th class="text-center">Data da Reserva</th>
                <th class="text-center">Hora Inicial</th>
                <th class="text-center">Hora Final</th>
                <th class="text-center">Atividade</th>
                <th class="text-center">Efetuar reserva</th>
            </tr>
        </thead>
        <tbody>';
  
        //while ($array = mysqli_fetch_assoc($resultado)) {

        for($i = 0; $i < 15; $i++){

            $horaInicio = ($i+8) . ':00:00';
            $horaFim = ($i+9) . ':00:00';
            echo '<tr class="success">
                    <td>' . $data . ' (Segunda-Feira) </td>
                    <td>' . $horaInicio . '</td>
                    <td>' . $horaFim . '</td>
                    <td>
                    <select class="form-control">
                        <option disabled selected>Selecione a atividade</option>
                        <option>Futebol</option>
                        <option>Basquete</option>
                        <option>Volei</option>
                        <option>Tenis</option>
                    </select>
                    </td>
                    <td><button class="btn btn-default btn-md">Reservar</button></td>
                  </tr>';
        }

echo '
    </tbody>  
</table>
</div>';

?>