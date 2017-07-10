<?php

include('../../../conectabd.php');
include('../verificaSessao.php');

$quadraid  = $_POST["quadraid"]; 
$data  = $_POST["data"];
$dataBanco  = $_POST["dataBanco"];

if (isset($_POST["difDias"])){
    $difDias  = $_POST["difDias"];
}

$id_usuario = $_SESSION['id_usuario'];
$nivel_usuario = $_SESSION['nivel_usuario'];

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

            $sql_reserva_check = mysqli_query($conectabd, "SELECT COUNT(id_reserva), id_reserva, id_usuario, nivel_usuario FROM reserva WHERE data_reserva='{$dataBanco}' AND hora_inicio='{$horaInicio}' AND nroQuadra='{$quadraid}'");
            $reservaReg = mysqli_fetch_array($sql_reserva_check);
            $reserva_check = $reservaReg[0];

            $sql_ativReservada = mysqli_query($conectabd, "SELECT ativ_praticada FROM reserva WHERE data_reserva='{$dataBanco}' AND hora_inicio='{$horaInicio}' AND nroQuadra='{$quadraid}'");
            $ativReservadaReg = mysqli_fetch_array($sql_ativReservada);

            $sql_ativDisponivel = mysqli_query($conectabd, "SELECT nome FROM ativoferecida WHERE nroQuadra='{$quadraid}'");

            if ($reserva_check > 0){
                    echo '<tr class="danger nome' . $i . '" idReserva="'. $reservaReg['id_reserva'] .'">
                            <td id="quadra' . $quadraid . '"> Quadra ' . $quadraid . '</td>
                            <td id="' . $dataBanco . '" difDias="' . $difDias . '">' . $data . '</td>
                            <td id="' . $horaInicio . '">' . $horaInicio . '</td>
                            <td id="' . $horaFim . '">' . $horaFim . '</td>
                            <td>
                            <select class="form-control" disabled>
                                <option id="noact" disabled selected>' . $ativReservadaReg['ativ_praticada'] . '</option>
                            </select>
                            </td>
                            <td>';
                            if(($reservaReg['id_usuario'] == $id_usuario && $reservaReg['nivel_usuario'] == $nivel_usuario) || $nivel_usuario == 3)
                                echo '<button class="btn btn-default btn-md" onclick="desreservaQuadra(this); verTabela2(this); return false;">Desreservar</button>';
                            else
                                echo '<button class="btn btn-default btn-md" disabled>Reservado</button>';
                            '</td>
                         </tr>';
            }else{
                echo '<tr class="success nome' . $i . '">
                        <td id="quadra' . $quadraid . '"> Quadra ' . $quadraid . '</td>
                        <td id="' . $dataBanco . '" difDias="' . $difDias . '">' . $data . '</td>
                        <td id="' . $horaInicio . '">' . $horaInicio . '</td>
                        <td id="' . $horaFim . '">' . $horaFim . '</td>
                        <td>
                        <select class="form-control">
                            <option id="noact" disabled selected>Selecione a atividade</option>';
                            while($ativDisponivelReg = mysqli_fetch_array($sql_ativDisponivel))
                                echo '<option id="'. $ativDisponivelReg['nome'] .'">'. $ativDisponivelReg['nome'] .'</option>';
                  echo '</select>
                        </td>
                        <td><button class="btn btn-default btn-md" onclick="reservaQuadra(this, ' . $nivel_usuario . '); verTabela2(this); return false;">Reservar</button></td>
                      </tr>';
            }
        }

echo '
    </tbody>  
</table>
</div>';

?>