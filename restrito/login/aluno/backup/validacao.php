<?php
   
  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['RA']) OR empty($_POST['senha']))) {
      header("Location: login.php"); exit;
  }
   
  // Tenta se conectar ao servidor MySQL e a um banco de dados MySQL
  $conn = mysqli_connect('localhost', 'root', '', 'teste') or trigger_error(mysql_error());
   
  $RA = mysqli_real_escape_string($conn, $_POST['RA']);
  $senha = mysqli_real_escape_string($conn, $_POST['senha']);
   
  // Validação do usuário/senha digitados
  $sql = "SELECT `id`, `nome`, `nivel` FROM `ALUNOS` WHERE (`RA` = '".$RA ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";
  $query = mysqli_query($conn, $sql);
  if (mysqli_num_rows($query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
      header("Location: login.php?erro=1");
  } else {
      // Salva os dados encontados na variável $resultado
      $resultado = mysqli_fetch_assoc($query);
      // Se a sessão não existir, inicia uma
      if (!isset($_SESSION)) session_start();
   
      // Salva os dados encontrados na sessão
      $_SESSION['RAID'] = $resultado['id'];
      $_SESSION['RANome'] = $resultado['nome'];
      $_SESSION['RANivel'] = $resultado['nivel'];
   
      // Redireciona o visitante
      header("Location: ../../sistema/index.php"); exit;
  }
   
  ?>