<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Acesso Restrito - Aluno</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/aluno.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="card card-container">
            <h4 class="text-center"><strong>Registration Form</strong></h3>
            <h4 class="text-center"><strong>to Students</strong></h3>
            <hr>
            <p id="profile-name" class="profile-name-card"></p>

            <form class="form-signin" method="post" action="cadastrar.php">
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome Completo" required autofocus>
                <input type="email" id="email" name="email" class="form-control" placeholder="Endereço de e-mail" required>
                <select id="curso" name="curso" class="form-control" required>
                    <option disabled selected value>Escolha seu curso</option>
                    <option value="Administração">Administração</option>
                    <option value="Agroecologia">Agroecologia</option>
                    <option value="Biblioteconomia e Ciência da Informação">Biblioteconomia e Ciência da Informação</option>
                    <option value="Biotecnologia">Biotecnologia</option>
                    <option value="Ciências Biológicas">Ciências Biológicas</option>
                    <option value="Ciência da Computação">Ciência da Computação</option>
                    <option value="Ciências Econômicas">Ciências Econômicas</option>
                    <option value="Ciências Sociais">Ciências Sociais</option>
                    <option value="Educação Especial">Educação Especial</option>
                    <option value="Educação Física">Educação Física</option>
                    <option value="Educação Musical">Educação Musical</option>
                    <option value="Enfermagem">Enfermagem</option>
                    <option value="Engenharia Agronômica">Engenharia Agronômica</option>
                    <option value="Engenharia Ambiental">Engenharia Ambiental</option>
                    <option value="Engenharia Civil">Engenharia Civil</option>
                    <option value="Engenharia de Alimentos">Engenharia de Alimentos</option>
                    <option value="Engenharia de Computação">Engenharia de Computação</option>
                    <option value="Engenharia de Materiais">Engenharia de Materiais</option>
                    <option value="Engenharia de Produção">Engenharia de Produção</option>
                    <option value="Engenharia Elétrica">Engenharia Elétrica</option>
                    <option value="Engenharia Física">Engenharia Física</option>
                    <option value="Engenharia Florestal">Engenharia Florestal</option>
                    <option value="Engenharia Mecânica">Engenharia Mecânica</option>
                    <option value="Engenharia Química">Engenharia Química</option>
                    <option value="Estatistica">Estatística</option>
                    <option value="Filosofia">Filosofia</option>
                    <option value="Fisica">Física</option>
                    <option value="Fisioterapia">Fisioterapia</option>
                    <option value="Geografia">Geografia</option>
                    <option value="Gerontologia">Gerontologia</option>
                    <option value="Gestão e Análise Ambiental">Gestão e Análise Ambiental</option>
                    <option value="Imagem e Som">Imagem e Som</option>
                    <option value="Letras">Letras</option>
                    <option value="Linguistica">Linguística</option>
                    <option value="Matematica">Matemática</option>
                    <option value="Medicina">Medicina</option>
                    <option value="Musica">Música</option>
                    <option value="Pedagogia">Pedagogia</option>
                    <option value="Psicologia">Psicologia</option>
                    <option value="Quimica">Química</option>
                    <option value="Sistemas de Informação">Sistemas de Informação</option>
                    <option value="Tecnologia em Produção Sucroalcooleira">Tecnologia em Produção Sucroalcooleira</option>
                    <option value="Terapia Ocupacional">Terapia Ocupacional</option>
                    <option value="Tradução e Interpretação em Língua Brasileira de Sinais">Tradução e Interpretação em Língua Brasileira de Sinais</option>
                    <option value="Turismo">Turismo</option>
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