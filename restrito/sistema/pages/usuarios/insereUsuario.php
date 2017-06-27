<?php
   include "../verificaSessao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Área Restrita - Sistema de Quadras UFSCar</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Adicional CSS -->
    <link href="../../vendor/adicional/css/adicional.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--  FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- this icon shows in browser toolbar -->
    <link rel="apple-touch-icon" sizes="57x57" href="../../../assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../../../assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../../assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../../assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../../../assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../../assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../../../assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../../assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../../../assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../../assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/manifest.json">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Sistema de Quadras UFSCar</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="../meuperfil/meuperfil.php"><i class="fa fa-user fa-fw"></i> Meus dados pessoais</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#mLogout"><i class="fa fa-sign-out fa-fw"></i> Encerrar sessão</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Pesquisar ...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button" data-toggle="modal" data-target="#mConstrucao">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                        </li>
                        <li>
                            <a href="../index.php"><i class="fa fa-dashboard fa-fw"></i> Página Inicial</a>
                        </li>
                        
                        <li>
                            <a href="#" data-toggle="modal" data-target="#mConstrucao"><i class="fa fa-calendar fa-fw"></i> Tabela de reservas</a>
                        </li>
                            <?php
                            if ($_SESSION['nivel_usuario'] == 3){
                                echo '
                                <li>
                                    <a href="#"><i class="fa fa-list-alt fa-fw"></i> Administrar Quadras<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="../quadras/listaQuadras.php">Tabela de Quadras</a>
                                        </li>
                                        <li>
                                            <a href="../quadras/insereQuadra.php">Inserir Quadra</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-user fa-fw"></i> Gerenciar Usuários<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="../usuarios/listaUsuarios.php">Tabela de Usuários</a>
                                        </li>
                                        <li>
                                            <a href="../usuarios/insereUsuario.php">Adicionar Usuário</a>
                                        </li>
                                    </ul>
                                </li>';
                            }
                            ?>
                        <li>
                            <a href="../meuperfil/meuperfil.php"><i class="fa fa-edit fa-fw"></i> Meu Perfil</a>
                        </li> 
                        <li>
                            <a href="#" data-toggle="modal" data-target="#mLogout"><i class="fa fa-sign-out fa-fw"></i> Encerrar sessão</a>
                        </li>  
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Adicionar Usuário</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dados do usuário a ser inserido</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <form id="radioForm" method="post" action="meuperfil/atualizadados.php">
                                            <div class="form-group text-center">
                                                <label>Selecione o tipo de usuário a ser inserido</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="optionUsuario" id="optionAluno" value="aluno" onclick="aluno()">Aluno
                                                </label>

                                                <label class="radio-inline">
                                                    <input type="radio" name="optionUsuario" id="optionDocente" value="docente" onclick="docente()">Docente
                                                </label>

                                                <label class="radio-inline">
                                                    <input type="radio" name="optionUsuario" id="optionOrgAcad" value="orgacademica" onclick="orgacad()">Organização Acadêmica
                                                </label>

                                                <label class="radio-inline">
                                                    <input type="radio" name="optionUsuario" id="optionAdmin" value="administrador" onclick="admin()">Administrador
                                                </label>
                                            </form>
                                            </div>
                                            <hr>
                                            <div id="formulario">
                                            <?php 
                                                $erro = (isset($_GET['erro']) ? $_GET['erro'] : null);
                                                $user = (isset($_GET['user']) ? $_GET['user'] : null);
                                                $contacriada = (isset($_GET['contacriada']) ? $_GET['contacriada'] : null);
                                                switch($user){
                                                    case "aluno":
                                                        switch($erro){
                                                        case 1:
                                                            echo "<p class='erro text-center'>O campo nome completo é necessário.</p>";
                                                            break;
                                                        case 2:
                                                            echo "<p class='erro text-center'>O campo e-mail é necessário.</p>";
                                                            break;
                                                        case 3:
                                                            echo "<p class='erro text-center'>O campo curso é necessário.</p>";
                                                            break;
                                                        case 4:
                                                            echo "<p class='erro text-center'>O campo R.A. é necessário.</p>";
                                                            break;
                                                        case 5:
                                                            echo "<p class='erro text-center'>Este e-mail já está cadastrado.</p>";
                                                            break;
                                                        case 6:
                                                            echo "<p class='erro text-center'>Este R.A. já está cadastrado.</p>";
                                                            break;
                                                        case 7:
                                                            echo "<p class='erro text-center'>Erro na criação. Entre em contato conosco.</p>";
                                                            break;
                                                        }
                                                        break;

                                                    case "docente":
                                                        switch($erro){
                                                        case 1:
                                                            echo "<p class='erro text-center'>O campo nome completo é necessário.</p>";
                                                            break;
                                                        case 2:
                                                            echo "<p class='erro text-center'>O campo e-mail é necessário.</p>";
                                                            break;
                                                        case 3:
                                                            echo "<p class='erro text-center'>O campo departamento é necessário.</p>";
                                                            break;
                                                        case 4:
                                                            echo "<p class='erro text-center'>O campo SIAPE é necessário.</p>";
                                                            break;
                                                        case 5:
                                                            echo "<p class='erro text-center'>Este e-mail já está cadastrado.</p>";
                                                            break;
                                                        case 6:
                                                            echo "<p class='erro text-center'>Este SIAPE já está cadastrado.</p>";
                                                            break;
                                                        case 7:
                                                            echo "<p class='erro text-center'>erro text-center na criação. Entre em contato conosco.</p>";
                                                            break;
                                                        }
                                                        break;

                                                    case "orgacademica":
                                                        switch($erro){
                                                        case 1:
                                                            echo "<p class='erro text-center'>O campo nome completo é necessário.</p>";
                                                            break;
                                                        case 2:
                                                            echo "<p class='erro text-center'>O campo e-mail é necessário.</p>";
                                                            break;
                                                        case 3:
                                                            echo "<p class='erro text-center'>O campo CNPJ é necessário.</p>";
                                                            break;
                                                        case 4:
                                                            echo "<p class='erro text-center'>Este e-mail já está cadastrado.</p>";
                                                            break;
                                                        case 5:
                                                            echo "<p class='erro text-center'>Este CNPJ já está cadastrado.</p>";
                                                            break;
                                                        case 6:
                                                            echo "<p class='erro text-center'>Erro na criação. Entre em contato conosco.</p>";
                                                            break;
                                                        }
                                                        break;

                                                    case "administrador":
                                                        switch($erro){
                                                        case 1:
                                                            echo "<p class='erro text-center'>O campo nome completo é necessário.</p>";
                                                            break;
                                                        case 2:
                                                            echo "<p class='erro text-center'>O campo e-mail é necessário.</p>";
                                                            break;
                                                        case 3:
                                                            echo "<p class='erro text-center'>O campo login é necessário.</p>";
                                                            break;
                                                        case 4:
                                                            echo "<p class='erro text-center'>Este e-mail já está cadastrado.</p>";
                                                            break;
                                                        case 5:
                                                            echo "<p class='erro text-center'>Este login já está cadastrado.</p>";
                                                            break;
                                                        case 6:
                                                            echo "<p class='erro text-center'>Erro na criação. Entre em contato conosco.</p>";
                                                            break;
                                                        }
                                                        break;
                                                }

                                                        switch($contacriada){
                                                            case 1:
                                                                echo "<p class='acerto text-center'>Cadastro efetuado com sucesso!</p>";
                                                                break;
                                                        }
                                            ?>
                                            </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- jQuery -->
    <script src="../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../vendor/raphael/raphael.min.js"></script>
    <script src="../../vendor/morrisjs/morris.min.js"></script>
    <script src="../../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>

    <script>

        function aluno(){
            document.getElementById("formulario").innerHTML = "<form action='insercoes/cadastrarAluno.php' method='POST'><div class='form-group'><label>Nome Completo</label><input class='form-control' name='nome' id='nome' placeholder='Insira o nome completo' required autofocus></div><div class='form-group'><label>E-mail</label><input type='email' class='form-control' name='email' id='email' placeholder='Insira o endereço de e-mail' required></div><div class='form-group'><label>Curso</label> <select id='curso' name='curso' class='form-control' required> <option disabled selected value>Escolha seu curso</option> <option value='Administração'>Administração</option> <option value='Agroecologia'>Agroecologia</option> <option value='Biblioteconomia e Ciência da Informação'>Biblioteconomia e Ciência da Informação</option> <option value='Biotecnologia'>Biotecnologia</option> <option value='Ciências Biológicas'>Ciências Biológicas</option> <option value='Ciência da Computação'>Ciência da Computação</option> <option value='Ciências Econômicas'>Ciências Econômicas</option> <option value='Ciências Sociais'>Ciências Sociais</option> <option value='Educação Especial'>Educação Especial</option> <option value='Educação Física'>Educação Física</option> <option value='Educação Musical'>Educação Musical</option> <option value='Enfermagem'>Enfermagem</option> <option value='Engenharia Agronômica'>Engenharia Agronômica</option> <option value='Engenharia Ambiental'>Engenharia Ambiental</option> <option value='Engenharia Civil'>Engenharia Civil</option> <option value='Engenharia de Alimentos'>Engenharia de Alimentos</option> <option value='Engenharia de Computação'>Engenharia de Computação</option> <option value='Engenharia de Materiais'>Engenharia de Materiais</option> <option value='Engenharia de Produção'>Engenharia de Produção</option> <option value='Engenharia Elétrica'>Engenharia Elétrica</option> <option value='Engenharia Física'>Engenharia Física</option> <option value='Engenharia Florestal'>Engenharia Florestal</option> <option value='Engenharia Mecânica'>Engenharia Mecânica</option> <option value='Engenharia Química'>Engenharia Química</option> <option value='Estatistica'>Estatística</option> <option value='Filosofia'>Filosofia</option> <option value='Fisica'>Física</option> <option value='Fisioterapia'>Fisioterapia</option> <option value='Geografia'>Geografia</option> <option value='Gerontologia'>Gerontologia</option> <option value='Gestão e Análise Ambiental'>Gestão e Análise Ambiental</option> <option value='Imagem e Som'>Imagem e Som</option> <option value='Letras'>Letras</option> <option value='Linguistica'>Linguística</option> <option value='Matematica'>Matemática</option> <option value='Medicina'>Medicina</option> <option value='Musica'>Música</option> <option value='Pedagogia'>Pedagogia</option> <option value='Psicologia'>Psicologia</option> <option value='Quimica'>Química</option> <option value='Sistemas de Informação'>Sistemas de Informação</option> <option value='Tecnologia em Produção Sucroalcooleira'>Tecnologia em Produção Sucroalcooleira</option> <option value='Terapia Ocupacional'>Terapia Ocupacional</option> <option value='Tradução e Interpretação em Língua Brasileira de Sinais'>Tradução e Interpretação em Língua Brasileira de Sinais</option> <option value='Turismo'>Turismo</option> </select></div><div class='form-group'><label>R.A.</label><input class='form-control' name='RA' id='RA' placeholder='Insira o R.A.' required></div><div class='form-group'><label>Senha</label><input class='form-control' name='senha' id='senha' placeholder='Insira a senha' required></div><hr><div class='form-group text-center'><button type='submit' class='btn btn-primary btn-lg'>Inserir aluno</button></div></form>";
        }

        function docente(){
            document.getElementById("formulario").innerHTML = "<form action='insercoes/cadastrarDocente.php' method='POST'><div class='form-group'><label>Nome Completo</label><input class='form-control' name='nome' id='nome' placeholder='Insira o nome completo' required autofocus></div><div class='form-group'><label>E-mail</label><input type='email' class='form-control' name='email' id='email' placeholder='Insira o endereço de e-mail' required></div><div class='form-group'><label>Departamento</label><select id='departamento' name='departamento' class='form-control' required> <option disabled selected value>Escolha o departamento</option> <option value='Artes e Comunicação - DAC'>Artes e Comunicação - DAC</option> <option value='Botânica - DB'>Botânica - DB</option> <option value='Ciência da Informação - DCI'>Ciência da Informação - DCI</option> <option value='Ciências Ambientais - DCAm'>Ciências Ambientais - DCAm</option> <option value='Ciências Fisiológicas - DCF'>Ciências Fisiológicas - DCF</option> <option value='Ciências Sociais - DCSo'>Ciências Sociais - DCSo</option> <option value='Computação - DC'>Computação - DC</option> <option value='Ecologia e Biologia Evolutiva - DEBE'>Ecologia e Biologia Evolutiva - DEBE</option> <option value='Educação - DEd'>Educação - DEd</option> <option value='Educação Física e Motricidade Humana - DEFMH'>Educação Física e Motricidade Humana - DEFMH</option> <option value='Enfermagem - DEnf'>Enfermagem - DEnf</option> <option value='Engenharia Civil - DECiv'>Engenharia Civil - DECiv</option> <option value='Engenharia Elétrica - DEE'>Engenharia Elétrica - DEE</option> <option value='Engenharia Mecânica - DEMec'>Engenharia Mecânica - DEMec</option> <option value='Engenharia Química - DEQ'>Engenharia Química - DEQ</option> <option value='Engenharia de Materiais - DEMa'>Engenharia de Materiais - DEMa</option> <option value='Engenharia de Produção - DEP'>Engenharia de Produção - DEP</option> <option value='Estatística - DEs'>Estatística - DEs</option> <option value='Filosofia e Metodologia das Ciências - DFMC'>Filosofia e Metodologia das Ciências - DFMC</option> <option value='Fisioterapia - DFisio'>Fisioterapia - DFisio</option> <option value='Física - DF'>Física - DF</option> <option value='Genética e Evolução - DGE'>Genética e Evolução - DGE</option> <option value='Gerontologia - DGero'>Gerontologia - DGero</option> <option value='Hidrobiologia - DHb'>Hidrobiologia - DHb</option> <option value='Letras - DL'>Letras - DL</option> <option value='Matemática - DM'>Matemática - DM</option> <option value='Medicina - DMed'>Medicina - DMed</option> <option value='Metodologia de Ensino - DME'>etodologia de Ensino - DME</option> <option value='Morfologia e Patologia - DMP'>Morfologia e Patologia - DMP</option> <option value='Psicologia - DPsi'>sicologia - DPsi</option> <option value='Química - DQ'>Química - DQ</option> <option value='Sociologia - DS'>Sociologia - DS</option> <option value='Teorias e Práticas Pedagógicas - DTPP'>Teorias e Práticas Pedagógicas - DTPP</option> <option value='Terapia Ocupacional - DTO'>Terapia Ocupacional - DTO</option></select></div><div class='form-group'><label>SIAPE</label><input class='form-control' name='SIAPE' id='SIAPE' placeholder='Insira o SIAPE' required></div><div class='form-group'><label>Senha</label><input class='form-control' name='senha' id='senha' placeholder='Insira a senha' required></div><hr><div class='form-group text-center'><button type='submit' class='btn btn-primary btn-lg'>Inserir docente</button></div></form>";
        }

        function orgacad(){
            document.getElementById("formulario").innerHTML = "<form action='insercoes/cadastrarOrgAcad.php' method='POST'><div class='form-group'><label>Nome Completo</label><input class='form-control' name='nome' id='nome' placeholder='Insira o nome completo' required autofocus></div><div class='form-group'><label>E-mail</label><input type='email' class='form-control' name='email' id='email' placeholder='Insira o endereço de e-mail' required></div><div class='form-group'><label>CNPJ</label><input class='form-control' name='CNPJ' id='CNPJ' placeholder='Insira o CNPJ' required></div><div class='form-group'><label>Senha</label><input class='form-control' name='senha' id='senha' placeholder='Insira a senha' required></div><hr><div class='form-group text-center'><button type='submit' class='btn btn-primary btn-lg'>Inserir organização acadêmica</button></div></form>";
        }

        function admin(){
            document.getElementById("formulario").innerHTML = "<form action='insercoes/cadastrarAdmin.php' method='POST'><div class='form-group'><label>Nome Completo</label><input class='form-control' name='nome' id='nome' placeholder='Insira o nome completo' required autofocus></div><div class='form-group'><label>E-mail</label><input type='email' class='form-control' name='email' id='email' placeholder='Insira o endereço de e-mail' required></div><div class='form-group'><label>Login</label><input class='form-control' name='login' id='login' placeholder='Insira o login' required></div><div class='form-group'><label>Senha</label><input class='form-control' name='senha' id='senha' placeholder='Insira a senha' required></div><hr><div class='form-group text-center'><button type='submit' class='btn btn-primary btn-lg'>Inserir administrador</button></div></form>";
        }
    </script>
</body>

<!-- SModal Logout -->
<div class="modal fade bs-example-modal-sm" id="mLogout" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Encerrar sessão</h4>
        </div>
        <div class="modal-body">
            <p>Você gostaria mesmo de sair?</p>
        </div>  
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <a href="../logout.php" class="btn btn-primary">Sim</a>
            <!-- <button type="button" class="btn btn-primary">Sim</button> -->
        </div>
    </div>
  </div>
</div>

</html>
