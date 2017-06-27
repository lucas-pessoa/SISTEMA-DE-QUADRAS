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
                            <li><a href="meuperfil.php"><i class="fa fa-user fa-fw"></i> Meus dados pessoais</a>
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
                                <a href="../reservas/tabelaReservas.php"><i class="fa fa-calendar fa-fw"></i> Tabela de reservas</a>
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
                                <a href="meuperfil.php"><i class="fa fa-edit fa-fw"></i> Meu Perfil</a>
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
                        <h1 class="page-header">Meu Perfil</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Meus dados pessoais</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <form method="post" action="atualizadados.php">
                                            <div class="form-group">
                                                <label>Nome Completo</label>
                                                <input class="form-control" name="novoNome" id="novoNome" placeholder="Insira seu nome completo" value="<?php echo $_SESSION['nome'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label>E-mail</label>
                                                <input class="form-control" name="novoEmail" id="novoEmail" placeholder="Insira seu e-mail" value="<?php echo $_SESSION['email'];?>">
                                            </div>
                                            <?php
                                                if ($_SESSION["nivel_usuario"] == "0"){
                                                    echo '
                                                    <div class="form-group">
                                                        <label>Curso</label>
                                                        <input class="form-control" placeholder="Insira seu curso" value="' . $_SESSION['curso'] . '" disabled>
                                                    </div>';
                                                }else if ($_SESSION["nivel_usuario"] == "1"){
                                                    echo '
                                                    <div class="form-group">
                                                        <label>Departamento</label>
                                                        <input class="form-control" placeholder="Insira seu departamento" value="' . $_SESSION['departamento'] . '" disabled>
                                                    </div>';
                                                }
                                            ?>
                                            <div class="form-group">
                                                <label>Status da conta</label>
                                                <input class="form-control" placeholder="Insira seu R.A." value="<?php 
                                                if ($_SESSION["ativado"] == 1){
                                                    echo "Ativada";
                                                }else{
                                                    echo "Desativada";
                                                }
                                                ?>" disabled>
                                            </div>
                                            <?php
                                            $erro = (isset($_GET['erro']) ? $_GET['erro'] : null);
                                            switch($erro){
                                                case 1:
                                                echo "<span class='msg-alerta'>Preencha o campo Nome Completo</span>";
                                                break;
                                                case 2:
                                                echo "<span class='msg-alerta'>Preencha o campo E-mail</span>";
                                                break;
                                                case 3:
                                                echo "<span class='msg-alerta'>Preencha os campos Nome Completo e E-mail</span>";
                                                break;
                                                case 4:
                                                echo "<span class='msg-alerta'>Usuário não encontrado para atualizar</span>";
                                                break;
                                            }

                                            $atualizado = (isset($_GET['atualizado']) ? $_GET['atualizado'] : null);
                                            switch($atualizado){
                                                case 1:
                                                echo "<span class='msg-atualizado'>Cadastro atualizado com sucesso!</span>";
                                                break;
                                            }
                                            ?>
                                            <hr>
                                            <div class="form-group text-center">
                                                <a href="#" data-toggle="modal" data-target="#mAtualizar" class="btn btn-primary">Atualizar dados</a>
                                            </div>
                                            <!-- SModal Atualizar -->
                                            <div class="modal fade bs-example-modal-sm" id="mAtualizar" role="dialog">
                                              <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Atualização de dados</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Confirmar a atualização dos dados cadastrais?</p>
                                                    </div>  
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                                        <button type="submit" class="btn btn-primary">Sim</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fim SModal Atualizar -->
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Informações de Login / Alteração de senha</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">

                                    <form method="post" action="atualizasenha.php">
                                        <div class="form-group">
                                            <?php
                                                if ($_SESSION["nivel_usuario"] == "0"){
                                                    echo '<label>R.A.</label>
                                                          <input class="form-control" placeholder="Insira seu R.A." value="' . $_SESSION['RA'] . '" disabled>';
                                                }else if ($_SESSION["nivel_usuario"] == "1"){
                                                    echo '<label>SIAPE</label>
                                                          <input class="form-control" placeholder="Insira seu SIAPE" value="' . $_SESSION['SIAPE'] . '" disabled>';
                                                }else if ($_SESSION["nivel_usuario"] == "2"){
                                                    echo '<label>CNPJ</label>
                                                          <input class="form-control" placeholder="Insira seu CNPJ" value="' . $_SESSION['CNPJ'] . '" disabled>';
                                                }else if ($_SESSION["nivel_usuario"] == "3"){
                                                    echo '<label>Login</label>
                                                          <input class="form-control" placeholder="Insira seu login" value="' . $_SESSION['login'] . '" disabled>';
                                                }
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Senha atual</label>
                                            <input type="password" class="form-control" name="antigaSenha" id="antigaSenha" placeholder="Insira sua senha atual">
                                        </div>
                                        <div class="form-group">
                                            <label>Nova senha</label>
                                            <input type="password" class="form-control" name="novaSenha" id="novaSenha" placeholder="Insira sua nova senha">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirme a nova senha</label>
                                            <input type="password" class="form-control" name="confSenha" id="confSenha" placeholder="Insira sua nova senha novamente">
                                        </div>
                                        <?php
                                        $errosenha = (isset($_GET['errosenha']) ? $_GET['errosenha'] : null);
                                        switch($errosenha){
                                            case 1:
                                            echo "<span class='msg-alerta'>Preencha o campo Senha Atual</span>";
                                            break;
                                            case 2:
                                            echo "<span class='msg-alerta'>Preencha o campo Nova Senha</span>";
                                            break;
                                            case 3:
                                            echo "<span class='msg-alerta'>Preencha o campo Confirme a Nova Senha</span>";
                                            break;
                                            case 4:
                                            echo "<span class='msg-alerta'>Preencha os campos Senha Atual e Nova Senha</span>";
                                            break;
                                            case 5:
                                            echo "<span class='msg-alerta'>Preencha os campos Senha Atual e Confirme a Nova Senha</span>";
                                            break;
                                            case 6:
                                            echo "<span class='msg-alerta'>Preencha os campos Nova Senha e Confirme a Nova Senha</span>";
                                            break;
                                            case 7:
                                            echo "<span class='msg-alerta'>Preencha os campos Senha Atual, Nova Senha e Confirme a Nova Senha</span>";
                                            break;
                                            case 8:
                                            echo "<span class='msg-alerta'>Não foi possível conectar ao banco de dados</span>";
                                            break;
                                            case 9:
                                            echo "<span class='msg-alerta'>Os campos Nova Senha e Confirme a Nova Senha não conferem</span>";
                                            break;
                                            case 10:
                                            echo "<span class='msg-alerta'>A Senha Atual e a registrada no banco de dados não conferem</span>";
                                            break;
                                            case 11:
                                            echo "<span class='msg-alerta'>Não há resultados associados ao usuário</span>";
                                            break;

                                        }

                                        $atualizasenha = (isset($_GET['atualizasenha']) ? $_GET['atualizasenha'] : null);
                                        switch($atualizasenha){
                                            case 1:
                                            echo "<span class='msg-atualizado'>Senha atualizada com sucesso!</span>";
                                            break;
                                        }
                                        ?>
                                        <hr>
                                        <div class="form-group text-center">
                                            <a href="#" data-toggle="modal" data-target="#mSenha" class="btn btn-primary">Atualizar senha</a>
                                        </div>
                                        <!-- SModal Atualizar -->
                                        <div class="modal fade bs-example-modal-sm" id="mSenha" role="dialog">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Atualização de senha</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Confirmar a atualização da sua senha?</p>
                                                    </div>  
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                                        <button type="submit" class="btn btn-primary">Sim</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fim SModal Atualizar -->
                                    </form>

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

        <!-- Modal boxes css -->


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
