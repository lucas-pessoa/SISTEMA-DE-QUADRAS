<?php

if (!isset($_SESSION))
    session_start(); //se nao existir uma sessao, cria, senao a destruição não funcionará

session_destroy(); //destroi a sessao atual e todos os dados associados com o usuario, porém os dados de sessão atual ainda são remanescentes. É possível acessá-los.

unset($_SESSION); //deleta os dados associados à elas, complementando a chamada anterior. Zera as variáveis de sessão.

session_regenerate_id(true); //Ajuda a previnir ataques à sessão pela fixação dos dados atrelados à anterior. Atacuqes de fixação de sessão ocorrem quando um usuario malicioso tenta explorar a vulnerabilidde em um sistema para fixar(setar) o ID da sessão de outro usuário. Ele consegue acesso completo como usuario original e fica disponível para fazer tarefas e outras coisas que requerem autenticação. Gerando um novo ID é possível previnir isso, e o ID antigo não torna-se mais válido.

if (!isset($_SESSION['usuario_id'])){
 	header("Location: ../../../index.html");
	exit;
 }

?>