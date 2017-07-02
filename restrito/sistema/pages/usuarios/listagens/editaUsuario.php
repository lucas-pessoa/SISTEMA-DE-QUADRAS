<?php
include('../../../../conectabd.php');

$tabela  = $_POST["tabela"]; 
$nro_id  = $_POST["nro_id"];  

$sql = "SELECT * FROM $tabela WHERE id_usuario = '{$nro_id}'";
$resultado = mysqli_query($conectabd, $sql);
if ($resultado) {
	$array = mysqli_fetch_assoc($resultado);

	echo '<div class="modal fade bs-example-modal-sm" id="mEditar" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
		<form id="formEdita">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Editar usuário</h4>
			</div>
			<div class="modal-body">
					<div class="form-group">
						<label>ID</label>
						<input class="form-control" name="editaID" id="editaID" placeholder="Insira o nome completo" value="' . $array["id_usuario"] . '">
					</div>
					<div class="form-group">
						<label>Nome Completo</label>
						<input class="form-control" name="editaNome" id="editaNome" placeholder="Insira o nome completo" value="' . $array["nomeCompleto"] . '" autofocus>
					</div>';

						if ($tabela == "aluno"){
							echo '
							<div class="form-group">
								<label>R.A.</label>
								<input class="form-control" name="editaRA" id="editaRA" placeholder="Insira o R.A." value="' . $array["RA"] . '">
							</div>
							<div class="form-group">
								<label>Curso</label>
								<input class="form-control" name="editaCurso" id="editaCurso" placeholder="Insira o curso" value="' . $array["curso"] . '">
							</div>';
						}else if ($tabela == "docente"){
							echo '
							<div class="form-group">
								<label>SIAPE</label>
								<input class="form-control" name="editaSIAPE" id="editaSIAPE" placeholder="Insira o SIAPE" value="' . $array["siape"] . '">
							</div>
							<div class="form-group">
								<label>Departamento</label>
								<input class="form-control" name="editaDpto" id="editaDpto" placeholder="Insira o departamento" value="' . $array["departamento"] . '">
							</div>';
						}else if ($tabela == "orgacademica"){
							echo '
							<div class="form-group">
								<label>CNPJ</label>
								<input class="form-control" name="editaCNPJ" id="editaCNPJ" placeholder="Insira o CNPJ" value="' . $array["CNPJ"] . '">
							</div>';
						}else{
							echo '
							<div class="form-group">
								<label>Login</label>
								<input class="form-control" name="editaLogin" id="editaLogin" placeholder="Insira o Login" value="' . $array["login"] . '">
							</div>';
						}

						echo '<div class="form-group">

						<label>Senha</label>
						<input class="form-control" name="editaSenha" id="editaSenha" placeholder="Insira uma nova senha, ou deixe em branco para não alterar">
					</div>

						<div class="form-group">

						<label>E-mail</label>
						<input class="form-control" name="editaEmail" id="editaEmail" placeholder="Insira o e-mail" value="' . $array["email"] . '">
					</div>
					<div class="form-group">
						<label>Nível do usuário</label>
						<input class="form-control" name="editaNivel" id="editaNivel" placeholder="Insira o nível do usuário" value="' . $array["nivel_usuario"] . '" required>
					</div>
					<div class="form-group">
						<label>Ativado</label>
						<input class="form-control" name="editaAtivado" id="editaAtivado" placeholder="Insira 0 para desativar ou 1 para ativar" value="' . $array["ativado"] . '" required autofocus>
					</div>				
			</div>  
			<div class="modal-footer">
				<div class="form-group text-center">
					<a href="" class="btn btn-primary btn-lg" onclick="atualizaUsuario()">Alterar dados</a>
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