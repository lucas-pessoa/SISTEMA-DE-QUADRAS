<?php
   include "verificaSessao.php";
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
    <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
    <link rel="apple-touch-icon" sizes="57x57" href="../../assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../../assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../../assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../../assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../../assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicon/favicon-16x16.png">
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
                        <li><a href="meuperfil/meuperfil.php"><i class="fa fa-user fa-fw"></i> Meus dados pessoais</a>
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
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Página Inicial</a>
                        </li>
                        
                        <li>
                            <a href="reservas/tabelaReservas.php"><i class="fa fa-calendar fa-fw"></i> Tabela de reservas</a>
                        </li>
<?php
if ($_SESSION['nivel_usuario'] == 3){
    echo '
    <li>
        <a href="#"><i class="fa fa-list-alt fa-fw"></i> Administrar Quadras<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="quadras/listaQuadras.php">Tabela de Quadras</a>
            </li>
            <li>
                <a href="quadras/insereQuadra.php">Inserir Quadra</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="fa fa-user fa-fw"></i> Gerenciar Usuários<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="usuarios/listaUsuarios.php">Tabela de Usuários</a>
            </li>
            <li>
                <a href="usuarios/insereUsuario.php">Adicionar Usuário</a>
            </li>
        </ul>
    </li>';
}
?>
                        <li>
                            <a href="meuperfil/meuperfil.php"><i class="fa fa-edit fa-fw"></i> Meu Perfil</a>
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
                    <h1 class="page-header">Página Inicial</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body">
                        <p class="lead">Olá <strong><?php echo $_SESSION['nome']; ?></strong>! Seja bem vindo ao Sistema de Reservas de Quadras da UFSCar.</p>
                                <!-- <p>
                                    <small>This is an example of small, fine print text.</small>
                                </p>
                                <p>
                                    <strong>This is an example of strong, bold text.</strong>
                                </p>
                                <p>
                                    <em>This is an example of emphasized, italic text.</em>
                                </p>
                                <br> -->
                        <p class="text-justify">A plataforma tem o objetivo de auxiliar a prática de reserva das quadras da UFSCar. Cada reserva pode ser feita por alunos, docentes e organização acadêmica, sendo que a diferença entre cada um é antecedência com que eles podem executar a reserva da quadra.</p>
                        <hr>
                    </div>

                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Prioridade de reservas</strong>
                        </div>
                        <div class="panel-body">
                            <p class="text-justify">A diferença na prioridade de reservas entre alunos, docentes e organizações acadêmicas é com relação à antecedência de reservas.</p>
                            <p>
                                <ul>
                                    <li><strong>Aluno: </strong> 1 dia</li>
                                    <li><strong>Atlética: </strong> 7 dias</li>
                                    <li><strong>Docente: </strong> 3 dias</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Disponibilidade</strong>
                        </div>
                        <div class="panel-body">
                            <p class="text-justify">A reserva será feita somente se a quadra estiver disponível naquele horário, sendo que dentro dos prazos de reserva, o pedido é executado por ordem de chegada.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Confirmações</strong>
                        </div>
                        <div class="panel-body">
                            <p class="text-justify">Para confirmar a reserva o usuário deverá clicar no botão de confirmar. Caso a quadra desejada esteja disponível naquele horário, após a confirmação, a ação será processada com sucesso.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Especificações</strong>
                        </div>
                        <div class="panel-body">
                            <p class="text-justify">Para executar a reserva da quadra deve-se informar qual esporte será praticado naquele ambiente, sendo possíveis as seguintes modalidades:</p>
                            <p>
                                <ul>
                                    <li><strong>Futebol</strong></li>
                                    <li><strong>Vôlei</strong></li>
                                    <li><strong>Basquete</strong></li>
                                    <li><strong>Tênis</strong></li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
<!--                     <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-envelope fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">26</div>
                                            <div>Novos e-mails!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" data-toggle="modal" data-target="#mConstrucao">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver todos</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-list-alt fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">12</div>
                                            <div>Festas ativas!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" data-toggle="modal" data-target="#mConstrucao">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver todas</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                         <div class="col-lg-12">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-12 text-center">
                                            <div class="huge">Futebol</div>
                                            <div>3 quadras disponíveis</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" data-toggle="modal" data-target="#mConstrucao">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver todas</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div> -->
<!--                     <div class="col-lg-9">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i> Grafico de exemplo
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div> -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

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
            <a href="logout.php" class="btn btn-primary">Sim</a>
            <!-- <button type="button" class="btn btn-primary">Sim</button> -->
        </div>
    </div>
  </div>
</div>

<!-- Modal (em construção) -->
<!--   <div class="modal fade" id="mConstrucao" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Em construção</h4>
        </div>
        <div class="modal-body">
          <p>Esta função ainda está em fase de implementação.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div> -->

</html>
