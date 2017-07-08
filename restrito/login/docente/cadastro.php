<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Acesso Restrito - Docente</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/docente.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="card card-container">
            <h4 class="text-center"><strong>Formulário de Cadastro</strong></h3>
            <h4 class="text-center"><strong>para Docentes</strong></h3>
            <hr>
            <p id="profile-name" class="profile-name-card"></p>

            <form class="form-signin" method="post" action="cadastrar.php">
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome Completo" required autofocus>
                <input type="email" id="email" name="email" class="form-control" placeholder="Endereço de e-mail" required>
                <select id="departamento" name="departamento" class="form-control" required>
                    <option disabled selected value>Escolha seu departamento</option>
                        <option value="Artes e Comunicação - DAC">Artes e Comunicação - DAC</option>
                        <option value="Botânica - DB">Botânica - DB</option>
                        <option value="Ciência da Informação - DCI">Ciência da Informação - DCI</option>
                        <option value="Ciências Ambientais - DCAm">Ciências Ambientais - DCAm</option>
                        <option value="Ciências Fisiológicas - DCF">Ciências Fisiológicas - DCF</option>
                        <option value="Ciências Sociais - DCSo">Ciências Sociais - DCSo</option>
                        <option value="Computação - DC">Computação - DC</option>
                        <option value="Ecologia e Biologia Evolutiva - DEBE">Ecologia e Biologia Evolutiva - DEBE</option>
                        <option value="Educação - DEd">Educação - DEd</option>
                        <option value="Educação Física e Motricidade Humana - DEFMH">Educação Física e Motricidade Humana - DEFMH</option>
                        <option value="Enfermagem - DEnf">Enfermagem - DEnf</option>
                        <option value="Engenharia Civil - DECiv">Engenharia Civil - DECiv</option>
                        <option value="Engenharia Elétrica - DEE">Engenharia Elétrica - DEE</option>
                        <option value="Engenharia Mecânica - DEMec">Engenharia Mecânica - DEMec</option>
                        <option value="Engenharia Química - DEQ">Engenharia Química - DEQ</option>
                        <option value="Engenharia de Materiais - DEMa">Engenharia de Materiais - DEMa</option>
                        <option value="Engenharia de Produção - DEP">Engenharia de Produção - DEP</option>
                        <option value="Estatística - DEs">Estatística - DEs</option>
                        <option value="Filosofia e Metodologia das Ciências - DFMC">Filosofia e Metodologia das Ciências - DFMC</option>
                        <option value="Fisioterapia - DFisio">Fisioterapia - DFisio</option>
                        <option value="Física - DF">Física - DF</option>
                        <option value="Genética e Evolução - DGE">Genética e Evolução - DGE</option>
                        <option value="Gerontologia - DGero">Gerontologia - DGero</option>
                        <option value="Hidrobiologia - DHb">Hidrobiologia - DHb</option>
                        <option value="Letras - DL">Letras - DL</option>
                        <option value="Matemática - DM">Matemática - DM</option>
                        <option value="Medicina - DMed">Medicina - DMed</option>
                        <option value="Metodologia de Ensino - DME">etodologia de Ensino - DME</option>
                        <option value="Morfologia e Patologia - DMP">Morfologia e Patologia - DMP</option>
                        <option value="Psicologia - DPsi">sicologia - DPsi</option>
                        <option value="Química - DQ">Química - DQ</option>
                        <option value="Sociologia - DS">Sociologia - DS</option>
                        <option value="Teorias e Práticas Pedagógicas - DTPP">Teorias e Práticas Pedagógicas - DTPP</option>
                        <option value="Terapia Ocupacional - DTO">Terapia Ocupacional - DTO</option>

                </select>
                <input type="text" id="SIAPE" name="SIAPE" class="form-control" placeholder="SIAPE" required> 
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
                            echo "<span class='erro'>O campo departamento é necessário.</span>";
                            break;
                        case 4:
                            echo "<span class='erro'>O campo SIAPE é necessário.</span>";
                            break;
                        case 5:
                            echo "<span class='erro'>Este e-mail já está cadastrado.</span>";
                            break;
                        case 6:
                            echo "<span class='erro'>Este SIAPE já está cadastrado.</span>";
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