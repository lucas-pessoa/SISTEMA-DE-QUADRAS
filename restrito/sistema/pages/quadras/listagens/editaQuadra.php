<?php
include('../../../../conectabd.php');

$nro_id  = $_POST["nro_id"];  

$sql = "SELECT * FROM quadra WHERE nroQuadra = '{$nro_id}'";
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
						<label>Nº da Quadra</label>
						<input class="form-control" name="editaNro" id="editaNro" placeholder="Insira a numeração da quadra" value="' . $array["nroQuadra"] . '" autofocus>
					</div>
					<div class="form-group">
						<label>Descrição</label>
						<input class="form-control" name="editaDesc" id="editaDesc" placeholder="Insira a descrição da quadra" value="' . $array["descricao"] . '">
					</div>
					<div class="form-group">
						<label>Reservada</label>
						<input class="form-control" name="editaReserva" id="editaReserva" placeholder="Insira 0 para liberar ou 1 para reservar" value="' . $array["reservada"] . '" required autofocus>
					</div>				
			</div>  
			<div class="modal-footer">
				<div class="form-group text-center">
					<a href="" class="btn btn-primary btn-lg" onclick="atualizaQuadra()">Alterar dados</a>
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