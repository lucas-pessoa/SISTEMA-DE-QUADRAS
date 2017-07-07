<?php

include('../../../conectabd.php');

$quadraid  = $_POST["quadraid"]; 
$data  = $_POST["data"];
$dataBanco  = $_POST["dataBanco"];

echo '
<div class="table-responsive">
    <table class="table table-bordered table-hover text-center">
        <thead>
            <tr>
                <th class="text-center">Quadra Selecionada</th>
                <th class="text-center">Data da Reserva</th>
                <th class="text-center">Hora Inicial</th>
                <th class="text-center">Hora Final</th>
                <th class="text-center">Atividade</th>
                <th class="text-center">Efetuar reserva</th>
            </tr>
        </thead>
        <tbody>';

        for($i = 0; $i < 15; $i++){

            $horaInicio = ($i+8) . ':00:00';
            $horaFim = ($i+9) . ':00:00';

            $sql_reserva_check = mysqli_query($conectabd, "SELECT COUNT(id_reserva) FROM reserva WHERE data_reserva='{$dataBanco}' AND hora_inicio='{$horaInicio}' AND nroQuadra='{$quadraid}'");
            $reservaReg = mysqli_fetch_array($sql_reserva_check);
            $reserva_check = $reservaReg[0];

            if ($reserva_check > 0){
                echo '<tr class="danger nome' . $i . '">
                        <td id="quadra' . $quadraid . '"> Quadra ' . $quadraid . '</td>
                        <td id="' . $dataBanco . '">' . $data . '</td>
                        <td id="' . $horaInicio . '">' . $horaInicio . '</td>
                        <td id="' . $horaFim . '">' . $horaFim . '</td>
                        <td>
                        <select class="form-control" disabled>
                            <option id="noact" disabled selected>Selecione a atividade</option>
                            <option id="Futebol">Futebol</option>
                            <option id="Basquete">Basquete</option>
                            <option id="Volei">Volei</option>
                            <option id="Tenis">Tenis</option>
                        </select>
                        </td>
                        <td><button class="btn btn-default btn-md" disabled>Reservado</button></td>
                     </tr>';

            }else{
                echo '<tr id="xama2" class="success nome' . $i . '">
                        <td id="quadra' . $quadraid . '"> Quadra ' . $quadraid . '</td>
                        <td id="' . $dataBanco . '">' . $data . '</td>
                        <td id="' . $horaInicio . '">' . $horaInicio . '</td>
                        <td id="' . $horaFim . '">' . $horaFim . '</td>
                        <td>
                        <select class="form-control">
                            <option id="noact" disabled selected>Selecione a atividade</option>
                            <option id="Futebol">Futebol</option>
                            <option id="Basquete">Basquete</option>
                            <option id="Volei">Volei</option>
                            <option id="Tenis">Tenis</option>
                        </select>
                        </td>
                        <td id="xama"><button class="btn btn-default btn-md" onclick="reservaQuadra(this); verTabela2(this);">Reservar</button></td>
                      </tr>';
            }
        }

echo '
    </tbody>  
</table>
</div>';

?>