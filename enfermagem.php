<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html ng-app="siteMarcos" lang="pt-br">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>INSTITUTO DE FORMAÇÃO TÉCNICA</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta content="Metronic Shop UI description" name="description">
    <meta content="Metronic Shop UI keywords" name="keywords">
    <meta content="keenthemes" name="author">

    <meta property="og:site_name" content="-CUSTOMER VALUE-">
    <meta property="og:title" content="-CUSTOMER VALUE-">
    <meta property="og:description" content="-CUSTOMER VALUE-">
    <meta property="og:type" content="website">
    <meta property="og:image" content="-CUSTOMER VALUE-">

    <meta property="og:url" content="-CUSTOMER VALUE-">


    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>

    <link rel="stylesheet" href="angularjs/css/estilo.css">

    <link rel="shortcut icon" href="favicon.ico">


    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">

    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/pages/css/animate.css" rel="stylesheet">
    <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">

    <link href="assets/pages/css/components.css" rel="stylesheet">
    <link href="assets/pages/css/slider.css" rel="stylesheet">
    <link href="assets/pages/css/style-shop.css" rel="stylesheet" type="text/css">
    <link href="assets/corporate/css/style.css" rel="stylesheet">
    <link href="assets/corporate/css/style-responsive.css" rel="stylesheet">
    <link href="assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
    <link href="assets/corporate/css/custom.css" rel="stylesheet">

</head>

<body ng-controller="customersCtrl" class="ecommerce">

    <?php include 'includes/menu.php'?>

    <div class="main">
        <div class="container">
            <div class="main">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Página Inicial</a></li>
                        <li><a href="#">Cursos Técnicos </a></li>
                        <li class="active">ENFERMAGEM</li>
                    </ul>
                    <div class="row margin-bottom-40">
                        <div class="sidebar col-md-3 col-sm-3">
                            <ul class="list-group margin-bottom-25 sidebar-menu">
                                <li class="list-group-item clearfix dropdown">
                                    <a href="#"><i class="fa fa-angle-right"></i>CURSOS TÉCNICO</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="enfermagem.php">ENFERMAGEM</a></li>
                                        <li><a href="radiologia.php">RADIOLOGIA</a></li>
                                        <li><a href="imobilizacao.php">IMOBILIZAÇÃO ORTOPÉDICA</a></li>
                                    </ul>
                                </li>
                                <li class="list-group-item clearfix dropdown">
                                    <a href="#"><i class="fa fa-angle-right"></i>ESPECIALIZAÇÃO</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="instrumentacao.php">INSTRUMENTAÇÃO CIRURGICA</a></li>
                                        <li><a href="uti.php">UNIDADE DE TERAPIA INTENSIVA</a></li>
                                        <li><a href="urgencia.php">URGÊNCIA E EMERGÊNCIA</a></li>
                                    </ul>
                                </li>
                                <li class="list-group-item clearfix dropdown">
                                    <a href="#"><i class="fa fa-angle-right"></i>CAPACITAÇÃO</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="pre-hospitalar.php">ATENDIMENTO PRÉ – HOSPITALAR</a></li>
                                        <li><a href="suporte-vida">SUPORTE BÁSICO DE VIDA</a></li>
                                        <li><a href="flebotomia.php">FLEBOTOMIA</a></li>
                                        <li><a href="feridas.php">FERIDAS E CURATIVOS</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="content-page" style="margin: 0px">
                                <h2>Inscreva-se</h2>
                                <form action="php-enviar/incricao.php" class="default-form" role="form">
                                    <div class="form-group">
                                        <label for="name">Nome  <span class="require">*</span></label>
                                        <input type="text" class="form-control" id="nome">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Fone <span class="require">*</span></label>
                                        <input type="text" class="form-control" id="fone">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-mail <span class="require">*</span></label>
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                    <label for="email">CURSO DE INTERESSE <span class="require">*</span></label>
                                        <select class="form-control" id="curso" disabled>
                                            <option>ENFERMAGEM</option>                                            
                                        </select>
                                    </div>
                                    <div class="padding-top-20">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </form>
                                <?php if (msg=="enviado"): ?>
                                     <p>Mensagem enviada com sucesso!</p>
                                <?php else ?>
                                
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9" style="margin-top: -30px">
                            <h1>Enfermagem</h1>
                            <div class="content-page">
                                <p><img src="assets/pages/img/enfermagem-iftpe.png" class="img-responsive"></p>
                                <h3>Desempenham atividades técnicas de enfermagem em empresas públicas e privadas como:</h3>
                                <ul>
                                    <li>Hospitais.</li>
                                    <li>Clínicas. </li>
                                    <li>Estabelecimentos de assistência médica.</li>
                                    <li>Embarcações e domicílios.</li>
                                    <li>Atuam em cirurgia.</li>
                                    <li>Terapia.</li>
                                    <li>Puericultura.</li>
                                    <li>Pediatria.</li>
                                    <li>Psiquiatria.</li>
                                    <li>Obstetrícia.</li>
                                    <li>Saúde ocupacional e outras áreas.</li>
                                </ul>
                                <p>Prestam assistência ao paciente zelandopelo seu conforto e bem-estar, administram medicamentos e desempenham tarefas deinstrumentação cirúrgica, posicionando de forma adequada o paciente e o instrumental.</p>

                                <p>Organizam ambiente de trabalho e dão continuidade aos plantões, trabalham em conformidade às boas práticas, normas e procedimentos de biossegurança. Realizam registros e elaboram relatórios técnicos. Desempenham atividades
                                e realizam açõespara promoção da saúde da família.</p>
                                <h3>HORÁRIOS:</h3>
                                <ul>
                                    <li><strong>Manhã:</strong> 7:30 às 11:30 hs.</li>
                                    <li><strong>Tarde:</strong> </li>
                                    <li><strong>Noite:</strong> 18:30 às 22:00 hs.</li>
                                </ul>

                                <h3>DURAÇÃO</h3>

                                <ul>
                                    <li><strong>02 Anos</strong></li>
                                    <li><strong>Estágio Supervisionado:</strong> 500 horas.</li>
                                    <li><strong>Carga Horária Total:</strong> 1.530 horas. </li>

                                </ul>

                                <h3>DOCUMENTAÇÃO PARA MATRÍCULA:</h3>

                                <ul>
                                    <li>Cópia do RG, CPF e Título de Eleitor.</li>
                                    <li>Cópia da reservista para o Sexo Masculino.</strong>
                                    </li>
                                    <li>Comprovante de residência.</li>
                                    <li>Cópia autenticada da ficha 19.</li>
                                    <li>02 fotos 3x4 atualizadas.</li>
                                </ul>

                                <h3>INVESTIMENTO:</h3>
                                <ul>
                                    <li><strong>Matrícula:</strong> R$ 200,00(A Vista).</li>
                                    <li><strong>Mensalidade:</strong> R$ 280,00 (Pagando até o vencimento, o valor fica por R$250,00).</strong>
                                    </li>
                                    <li><strong>Desconto:</strong> R$ 30,00 (Em cada mensalidade paga até o vencimento).</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/rodape.php'?>

    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]-->
    <script src="angularjs/controller.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script>
    <script src='assets/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
    <script src="assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initTwitter();
        });
    </script>
</body>

</html>