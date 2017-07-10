<?php
include('../../../../../conectabd.php');

$limite = 2; 

if (isset($_POST["pag"])) { 
	$pag  = $_POST["pag"]; 
}else{
	$pag = 1;
};

$comeca_de = ($pag-1) * $limite;  

$sql = "SELECT * FROM ativoferecida ORDER BY nroQuadra ASC LIMIT $comeca_de, $limite"; //seleciona modalidades de forma ascendente
$resultado = mysqli_query($conectabd, $sql);

$sql2 = "SELECT COUNT(id_atividade) FROM ativoferecida"; //conta a quantidade de modalidades para calcular as paginas
$resultado2 = mysqli_query($conectabd, $sql2);

$array2 = mysqli_fetch_row($resultado2);  
$total_registros = $array2[0]; //quantidade de tuplas encontradas
$total_paginas = ceil($total_registros / $limite); //divide e se der quebrado, pega o valor arredondado pra cima

echo '
<div class="table-responsive">
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>ID de Criação</th>
				<th>Nº da Quadra</th>
				<th>Nome</th>
				<th>Data de cadastro</th>
				<th>Editar / Apagar</th>
			</tr>
		</thead>
		<tbody>';
  
		while ($array = mysqli_fetch_assoc($resultado)) {
			echo '<tr>  
				  	<td>' . $array["id_atividade"] . '</td>
				  	<td>' . $array["nroQuadra"] . '</td>
				  	<td>' . $array["nome"] . '</td>
				  	<td>' . $array["data_cadastro"] . '</td>

					<td>
						<a href="#" id="editar' . $array["id_atividade"] . '" class="btn btn-sm btn-warning" style="margin-bottom: 5px; width:62px" onclick="editaModalidade(' . $array["id_atividade"] . ');">Editar</a><br>
						<a href="" id="apagar' . $array["id_atividade"] . '" class="btn btn-sm btn-danger" onclick="removeModalidade(' . $array["id_atividade"] . '); carregaModalidades(' . $pag . ');return false">Apagar</a> 
					</td>
				  </tr>';
		}

echo '
	</tbody>  
</table>
</div>

<div id="paginas" align="center">
	<ul id="listaPgs" class="pagination text-center">';

        for($i = 1; $i <= $total_paginas; $i++)
            if($i == 1)
                echo '<li class="active" id="pagina' . $i . '"><a href="" onclick="carregaModalidades(' . $i . ');return false">' .  $i . '</a></li>';
            else
                echo '<li id="pagina'. $i . '"><a href="" onclick="carregaModalidades(' . $i . ');return false">' . $i . '</a></li>';

echo '
	</ul>
</div>';
?>