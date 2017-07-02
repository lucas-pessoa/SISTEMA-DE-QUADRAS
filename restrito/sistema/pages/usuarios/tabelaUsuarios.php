<?php
include('../../../conectabd.php');

$limite = 5; 

if (isset($_POST["pag"])) { 
	$pag  = $_POST["pag"]; 
}else{
	$pag = 1;
};

if (isset($_POST["user"])) { 
	$user  = $_POST["user"]; 
}else{
	$user = "aluno";
};

$comeca_de = ($pag-1) * $limite;  

$sql = "SELECT * FROM $user ORDER BY id_usuario ASC LIMIT $comeca_de, $limite"; //seleciona usuarios de forma ascendente
$resultado = mysqli_query($conectabd, $sql);

$sql2 = "SELECT COUNT(id_usuario) FROM $user"; //conta a quantidade de usuarios para calcular as paginas
$resultado2 = mysqli_query($conectabd, $sql2);

$array2 = mysqli_fetch_row($resultado2);  
$total_registros = $array2[0]; //quantidade de tuplas encontradas
$total_paginas = ceil($total_registros / $limite); //divide e se der quebrado, pega o valor arredondado pra cima

echo '
<div class="table-responsive">
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>';
				if($_POST["user"] == "aluno")
			  		echo '<th>R.A.</th>' . 
			  			 '<th>Curso</th>';
			  	else
			  		if($_POST["user"] == "docente")
			  			echo '<th>SIAPE</th>' . 
			  			     '<th>Departamento</th>';
			  		else
			  			if($_POST["user"] == "orgacademica")
			  				echo '<th>CNPJ</th>';
			  			else
			  				echo '<th>Login</th>';
		  echo '<th>E-mail</th>
				<th>Data de cadastro</th>
				<th>Último login</th>
				<th>Nível do usuário</th>
				<th>Ativado</th>
				<th>Editar / Apagar</th>
			</tr>
		</thead>
		<tbody>';
  
		while ($array = mysqli_fetch_assoc($resultado)) {
			echo '<tr>  
				  	<td>' . $array["id_usuario"] . '</td>
				  	<td>' . $array["nomeCompleto"] . '</td>';

				  	if($array["nivel_usuario"] == 0)
				  		echo '<td>' . $array["RA"] . '</td>' . 
				  			 '<td>' . $array["curso"] . '</td>';
				  	else
				  		if($array["nivel_usuario"] == 1)
				  			echo '<td>' . $array["siape"] . '</td>' . 
				  			     '<td>' . $array["departamento"] . '</td>';
				  		else
				  			if($array["nivel_usuario"] == 2)
				  				echo '<td>' . $array["CNPJ"] . '</td>';
				  			else
				  				echo '<td>' . $array["login"] . '</td>';

			  echo '<td>' . $array["email"] . '</td>
				  	<td>' . $array["data_cadastro"] . '</td>
				  	<td>' . $array["data_ultimo_login"] . '</td>
					<td>' . $array["nivel_usuario"] . '</td>
					<td>' . $array["ativado"] . '</td>
					<td>
						<a href="#" id="editar' . $array["id_usuario"] . '" class="btn btn-sm btn-warning" style="margin-bottom: 5px; width:62px" onclick="editaUsuario(\'' . $_POST["user"] .'\', ' . $array["id_usuario"] . ');">Editar</a><br>
						<a href="" id="apagar' . $array["id_usuario"] . '" class="btn btn-sm btn-danger" onclick="removeUsuario(\'' . $_POST["user"] .'\', ' . $array["id_usuario"] . '); carregaTabela(' . $pag . ');return false">Apagar</a> 
					</td>
				  </tr>';
		}  
/* RESOLVER VALORES INTERNOS DO MUDA PAGINA*/
echo '
	</tbody>  
</table>
</div>

<div id="paginas" align="center">
	<ul id="listaPgs" class="pagination text-center">';

        for($i = 1; $i <= $total_paginas; $i++)
            if($i == 1)
                echo '<li class="active" id="pagina' . $i . '"><a href="" onclick="carregaTabela(' . $i . ');return false">' .  $i . '</a></li>';
            else
                echo '<li id="pagina'. $i . '"><a href="" onclick="carregaTabela(' . $i . ');return false">' . $i . '</a></li>';

echo '
	</ul>
</div>';
?>