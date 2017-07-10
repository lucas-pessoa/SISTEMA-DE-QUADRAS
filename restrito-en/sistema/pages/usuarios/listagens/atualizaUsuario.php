<?php
include "../../../../conectabd.php";

$id_usuario  = $_POST["editaID"];
$nomeCompleto = $_POST["editaNome"];
$email = $_POST["editaEmail"];
$ativado = $_POST["editaAtivado"];
$senha = md5($_POST["editaSenha"]);

$nivel_usuario  = $_POST["editaNivel"];

if ($nivel_usuario === '0'){
	$RA = $_POST["editaRA"];
	$curso = $_POST["editaCurso"];
}else if ($nivel_usuario === '1'){
	$SIAPE = $_POST["editaSIAPE"];
	$departamento = $_POST["editaDpto"];
}else if ($nivel_usuario === '2'){
	$CNPJ = $_POST["editaCNPJ"];
}else
$login = $_POST["editaLogin"];

if ($senha){
	switch($nivel_usuario){
		case 0:
		$sql = "UPDATE aluno SET nomeCompleto='$nomeCompleto', RA='$RA', senha='$senha', curso='$curso', email='$email', nivel_usuario='$nivel_usuario', ativado='$ativado' WHERE id_usuario='{$id_usuario}'";
		break;

		case 1:
		$sql = "UPDATE docente SET nomeCompleto='$nomeCompleto', siape='$SIAPE', senha='$senha', departamento='$departamento', email='$email', nivel_usuario='$nivel_usuario', ativado='$ativado' WHERE id_usuario='{$id_usuario}'";
		break;

		case 2:
		$sql = "UPDATE orgacademica SET nomeCompleto='$nomeCompleto', CNPJ='$CNPJ', senha='$senha', email='$email', nivel_usuario='$nivel_usuario', ativado='$ativado' WHERE id_usuario='{$id_usuario}'";
		break;

		case 3:
		$sql = "UPDATE administrador SET nomeCompleto='$nomeCompleto', login='$login', senha='$senha', email='$email', nivel_usuario='$nivel_usuario', ativado='$ativado' WHERE id_usuario='{$id_usuario}'";
		break;
	}
}else{
	switch($nivel_usuario){
		case 0:
		$sql = "UPDATE aluno SET nomeCompleto='$nomeCompleto', RA='$RA', curso='$curso', email='$email', nivel_usuario='$nivel_usuario', ativado='$ativado' WHERE id_usuario='{$id_usuario}'";
		break;

		case 1:
		$sql = "UPDATE docente SET nomeCompleto='$nomeCompleto', siape='$SIAPE', departamento='$departamento', email='$email', nivel_usuario='$nivel_usuario', ativado='$ativado' WHERE id_usuario='{$id_usuario}'";
		break;

		case 2:
		$sql = "UPDATE orgacademica SET nomeCompleto='$nomeCompleto', CNPJ='$CNPJ', email='$email', nivel_usuario='$nivel_usuario', ativado='$ativado' WHERE id_usuario='{$id_usuario}'";
		break;

		case 3:
		$sql = "UPDATE administrador SET nomeCompleto='$nomeCompleto', login='$login', email='$email', nivel_usuario='$nivel_usuario', ativado='$ativado' WHERE id_usuario='{$id_usuario}'";
		break;
	}
}

$resultado = mysqli_query($conectabd, $sql);

if ($resultado){
	echo '<script>alert("Atualização efetuada com sucesso!");</script>';
}
else{
		//echo '<p class="erro text-center">Problema com o banco de dados! Edição não realizada.</p>';
	echo '<script>alert("Atualização não efetuada. Problema no banco de dados.");</script>';
}

mysqli_close($conectabd);
?>