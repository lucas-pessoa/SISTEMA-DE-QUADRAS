<?php
include('../../../../../conectabd.php');

$nro_id  = $_POST["nro_id"];  

$sql = "SELECT * FROM ativoferecida WHERE id_atividade = '{$nro_id}'";
$resultado = mysqli_query($conectabd, $sql);
if ($resultado) {
	$array = mysqli_fetch_assoc($resultado);

	echo '<div class="modal fade bs-example-modal-sm" id="mEditar" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
		<form id="formEdita">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Editar quadra</h4>
			</div>
			<div class="modal-body">
					<div class="form-group">
						<label>ID de Criação</label>
						<input class="form-control" name="editaID" id="editaID" placeholder="Insira a numeração da quadra" value="' . $array["id_atividade"] . '" required autofocus>
					</div>
					<div class="form-group">
						<label>Número da Quadra</label>
						<input class="form-control" name="editaNro" id="editaNro" placeholder="Insira a descrição da quadra" value="' . $array["nroQuadra"] . '" required>
					</div>
					<div class="form-group">
						<label>Nome da Modalidade</label>
						<input class="form-control" name="editaNome" id="editaNome" placeholder="Insira 0 para liberar ou 1 para reservar" value="' . $array["nome"] . '" required>
					</div>				
			</div>  
			<div class="modal-footer">
				<div class="form-group text-center">
					<a href="" class="btn btn-primary btn-lg" onclick="atualizaModalidade()">Alterar dados</a>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>';
} else {
	echo "<script>alert('Não foi possível conectar ao banco de dados.')</script> " . mysqli_error($conn);
}

mysqli_close($conectabd);

?>