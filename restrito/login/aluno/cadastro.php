<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Acesso Restrito - Aluno</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/login.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="card card-container">
            <h4 class="text-center"><strong>Formulário de Cadastro</strong></h3>
            <h4 class="text-center"><strong>para Alunos</strong></h3>
            <hr>
            <p id="profile-name" class="profile-name-card"></p>

            <form class="form-signin" method="post" action="cadastrar.php">
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome Completo" required autofocus>
                <input type="email" id="email" name="email" class="form-control" placeholder="Endereço de e-mail" required>
                <select id="curso" name="curso" class="form-control" required>
                    <option disabled selected value>Escolha seu curso</option>
                    <option value="administracao">Administração</option>
                    <option value="agroecologia">Agroecologia</option>
                    <option value="biblioteconomia">Biblioteconomia e Ciência da Informação</option>
                    <option value="biotecnologia">Biotecnologia</option>
                    <option value="ciencias-biologicas">Ciências Biológicas</option>
                    <option value="bcc">Ciência da Computação</option>
                    <option value="ciencias-economicas">Ciências Econômicas</option>
                    <option value="ciencias-sociais">Ciências Sociais</option>
                    <option value="ed-especial">Educação Especial</option>
                    <option value="ed-fisica">Educação Física</option>
                    <option value="ed-musical">Educação Musical</option>
                    <option value="enfermagem">Enfermagem</option>
                    <option value="eng-agronomica">Engenharia Agronômica</option>
                    <option value="eng-ambiental">Engenharia Ambiental</option>
                    <option value="eng-civil">Engenharia Civil</option>
                    <option value="eng-alimentos">Engenharia de Alimentos</option>
                    <option value="eng-computacao">Engenharia de Computação</option>
                    <option value="eng-materiais">Engenharia de Materiais</option>
                    <option value="eng-producao">Engenharia de Produção</option>
                    <option value="eng-eletrica">Engenharia Elétrica</option>
                    <option value="eng-fisica">Engenharia Física</option>
                    <option value="eng-florestal">Engenharia Florestal</option>
                    <option value="eng-mecanica">Engenharia Mecânica</option>
                    <option value="eng-quimica">Engenharia Química</option>
                    <option value="estatistica">Estatística</option>
                    <option value="filosofia">Filosofia</option>
                    <option value="fisica">Física</option>
                    <option value="fisioterapia">Fisioterapia</option>
                    <option value="geografia">Geografia</option>
                    <option value="gerontologia">Gerontologia</option>
                    <option value="gaambiental">Gestão e Análise Ambiental</option>
                    <option value="ies">Imagem e Som</option>
                    <option value="letras">Letras</option>
                    <option value="linguistica">Linguística</option>
                    <option value="matematica">Matemática</option>
                    <option value="medicina">Medicina</option>
                    <option value="musica">Música</option>
                    <option value="pedagogia">Pedagogia</option>
                    <option value="psicologia">Psicologia</option>
                    <option value="quimica">Química</option>
                    <option value="si">Sistemas de Informação</option>
                    <option value="sucroalcool">Tecnologia em Produção Sucroalcooleira</option>
                    <option value="to">Terapia Ocupacional</option>
                    <option value="libras">Tradução e Interpretação em Língua Brasileira de Sinais</option>
                    <option value="turismo">Turismo</option>
                </select>
                <input type="text" id="RA" name="RA" class="form-control" placeholder="R.A." required> 
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
                <?php
                    $erro = (isset($_GET['erro']) ? $_GET['erro'] : null);
                    switch($erro){
                        case 1:
                            echo "<span class='erro'>O campo nome completo é necessário.</span>";
                            break;
                        case 2:
                            echo "<span class='erro'>O campo e-mail é necessário.</span>";
                            break;
                        case 3:
                            echo "<span class='erro'>O campo curso é necessário.</span>";
                            break;
                        case 4:
                            echo "<span class='erro'>O campo R.A. é necessário.</span>";
                            break;
                        case 5:
                            echo "<span class='erro'>Este e-mail já está cadastrado.</span>";
                            break;
                        case 6:
                            echo "<span class='erro'>Este R.A. já está cadastrado.</span>";
                            break;
                        case 7:
                            echo "<span class='erro'>Erro na criação. Entre em contato conosco.</span>";
                            break;
                    }
                ?>
                <hr>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
</body>
</html>