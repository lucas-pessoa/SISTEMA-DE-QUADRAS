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

    <link href="../../vendor/jquery/jqc/jquery-ui.css" rel="stylesheet">

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
                        <h1 class="page-header">Tabela de Reservas</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Dados da reseva a ser realizada</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div id="baseTabela" class="col-md-12">
                                    <div class="col-md-4 text-center">
                                        <h4 style="margin-bottom: 20px">Selecione a data da reserva</h4>
                                        <div id="calendario" style="margin-left: 40px"></div>
                                        <div id="legenda" style="margin-top: 5px">

                                            <div style="display: inline-flex;">

                                                <div style="background-color: rgb(255,250,144); border: 1px solid rgb(218,213,94); width: 20px; height: 14px; margin-left: 15px"></div>
                                                <span style="font-size: 9pt">&nbsp;Data de hoje</span>

                                                <div style="background-color: rgb(0,127,255); border: 1px solid rgb(0,62,255); width: 20px; height: 14px; margin-left: 15px"></div>
                                                <span style="font-size: 9pt">&nbsp;Data selecionada</span>
                                                
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-8 text-center">
                                        <div id="botoes">
                                            <h4 style="margin-bottom: 20px">Selecione uma modalidade</h4>
<!-- adicionar uma requisição via post, que dá load dps de selecionar o dia e lista modalidades aqui -->
                                            <button type="button" class="btn btn-success btn-lg" id="botao1" style="margin:3px" value="Futebol" disabled>Futebol</button>

                                            <button type="button" class="btn btn-primary btn-lg" id="botao2" style="margin:3px" value="Volei" disabled>Volei</button>

                                            <button type="button" class="btn btn-warning btn-lg" id="botao3" style="margin:3px" value="Tenis" disabled>Tenis</button>

                                            <button type="button" class="btn btn-danger btn-lg" id="botao4" style="margin:3px" value="Basquete" disabled>Basquete</button>
                                        </div>
                                        <p id="idModalidade" style="margin-top: 10px; display: none"></p>
                                        <hr>
                                        <div id="quadras">
                                            <h4 style="margin-bottom: 20px">Selecione uma quadra</h4>
                                            <div class="col-md-6">
                                                <select id="listaQuadras" multiple style="padding: 10px; width: 300px">
                                                </select>
                                            </div>
                                            <div class="col-md-6" style="margin-top: 20px">
                                                <button type="button" id="botaoHorarios" class="btn btn-default btn-lg" onclick="verTabela()" disabled>Ver tabela de horários</button>
                                            </div>
                                        </div>
                                    </div>
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
        <script src="../../vendor/jquery/jqc/jquery-ui.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

        <script>
            $("#calendario").datepicker({
                dateFormat: 'dd/mm/yy',
                dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
                dayNamesMin: ['Dom','Seg','Ter','Qua','Qui','Sex','Sab','Dom'],
                dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
                nextText: 'Próximo',
                prevText: 'Anterior'
            });

            $("#calendario td").on("click", function(){
                for(var i = 1 ; i <= 4 ; i++){ 
                    $('#botao' + i).prop("disabled", false);
                }
            });

            function verTabela(){
                var dia = $(".ui-datepicker-current-day").text();
                var mes = parseInt($(".ui-datepicker-current-day").attr("data-month")) + 1;
                var ano = $(".ui-datepicker-current-day").attr("data-year");

                if (mes >= 1 && mes < 10){
                    mes = '0' + mes;
                }else{
                    mes = mes;
                }

                if (dia >= 1 && dia < 10){
                    dia = '0' + dia;
                }else{
                    dia = dia;
                }

                var data = dia + '/' + mes + '/' + ano;
                var dataBanco = ano + '-' + mes + '-' + dia;

                var e = document.getElementById("listaQuadras");
                var quadraNome = e.options[e.selectedIndex].value;
                var quadraID = quadraNome.replace('Quadra ','');

                $.post("requisitaReservas.php", "quadraid=" + quadraID + "&data=" + data+ "&dataBanco=" + dataBanco).done(function(data){
                    $("#baseTabela").html(data);
                    $(".panel-heading").html("<a href='' class='btn btn-primary'>< Voltar ao menu anterior</a>")
                });
            }

            function verTabela2(botao){
                var quadraID = ($(botao).parent().parent().find("td:eq(0)").attr('id')).replace('quadra','');
                var dataBanco = $(botao).parent().parent().find("td:eq(1)").attr('id');
                var data = $(botao).parent().parent().find("td:eq(1)").text();
                $.post("requisitaReservas.php", "quadraid=" + quadraID + "&data=" + data + "&dataBanco=" + dataBanco).done(function(data){
                    $("#baseTabela").html(data);
                    $(".panel-heading").html("<a href='' class='btn btn-primary'>< Voltar ao menu anterior</a>")
                });
            }

            function reservaQuadra(botao){
                var quadra = ($(botao).parent().parent().find("td:eq(0)").attr('id')).replace('quadra','');
                var data = $(botao).parent().parent().find("td:eq(1)").attr('id');
                var horaInicio = $(botao).parent().parent().find("td:eq(2)").attr('id');
                var horaFim = $(botao).parent().parent().find("td:eq(2)").attr('id');
                var modalidade = $(botao).parent().parent().find('option:selected').attr('id');

                if(modalidade == "noact"){
                    alert("Selecione uma modalidade.");
                }else{
                    $.post("realizaReserva.php", "quadra=" + quadra + "&data=" + data + "&horaInicio=" + horaInicio + "&horaFim=" + horaFim + "&modalidade=" + modalidade).done(function(data){
                        $("#baseTabela").html(data);
                    });
                }

            }

            $("#botoes button").click(function(){
                var modalidade = $(this).val();

                for(var i = 1 ; i <= 4 ; i++){ 
                    $('#botao' + i).removeClass('active');
                }
                $(this).addClass('active');
                $("#idModalidade").html("Você selecionou a modalidade " + "<strong>" + modalidade +  "</strong>");
                $('#idModalidade').slideDown('slow');
                $('#botaoHorarios').prop("disabled", false);

                $.post("listaQuadras.php", "modalidade=" + modalidade).done(function(data){

                    $("#listaQuadras").html(data);

                });
            });

        </script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../../vendor/metisMenu/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../../vendor/raphael/raphael.min.js"></script>
        <script src="../../vendor/morrisjs/morris.min.js"></script>
        <script src="../../data/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../../dist/js/sb-admin-2.js"></script>
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
