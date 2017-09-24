<?php
    $msg=;
    @$msg = $_REQUEST['msg'];
?>

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

    <div class="page-slider margin-bottom-35">
        <div id="carousel-example-generic" class="carousel slide carousel-slider">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item carousel-item-four active">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <h2 class="margin-bottom-20 animate-delay carousel-title-v3 border-bottom-title text-uppercase" data-animation="animated fadeInDown">
                                <span class="color-red-v2">Instituto de</span><br/><span class="color-blue-v2">Formação Técnica</span><br/>
                            </h2>
                            <p class="carousel-subtitle-v2" data-animation="animated fadeInUp"><span class="color-blue-v2">IFT surgiu da necessidade de profissionais
                             <br/> qualificado no mercado de trabalho.</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="right carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <div class="main">
        <div class="container">
            <div class="row margin-bottom-40 ">
                <div class="sidebar col-md-3 col-sm-4">
                    <h2 style="margin-top: 5px">ENSINAMOS COM AMOR!</h2>
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
                </div>
                <div class="col-md-9 col-sm-8">
                    <h2>curso de Capacitação do mês </h2>
                    <div class="owl-carousel owl-carousel3">
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="assets/pages/img/products/k1.jpg" class="img-responsive" alt="Berry Lace Dress">
                                    <div>
                                        <a href="assets/pages/img/products/k1.jpg" class="btn btn-default fancybox-button">INSCREVA-SE</a>
                                        <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">GOSTEI <i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <h3><a href="#">ATENDIMENTO PRÉ – HOSPITALAR</a></h3>
                                <div class="pi-price">R$299,00 </div>
                                <a href="javascript:;" class="btn btn-default add2cart">INSCREVA-SE</a>
                                <div class="sticker sticker-new"></div>
                            </div>
                        </div>
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="assets/pages/img/products/k2.jpg" class="img-responsive" alt="Berry Lace Dress">
                                    <div>
                                        <a href="assets/pages/img/products/k2.jpg" class="btn btn-default fancybox-button">INSCREVA-SE</a>
                                        <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">GOSTEI <i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <h3><a href="#">SUPORTE BÁSICO DE VIDA</a></h3>
                                <div class="pi-price">R$299,00</div>
                                <a href="javascript:;" class="btn btn-default add2cart">INSCREVA-SE</a>
                            </div>
                        </div>
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="assets/pages/img/products/k3.jpg" class="img-responsive" alt="Berry Lace Dress">
                                    <div>
                                        <a href="assets/pages/img/products/k3.jpg" class="btn btn-default fancybox-button">INSCREVA-SE</a>
                                        <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">GOSTEI <i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <h3><a href="#">UNIDADE DE TERAPIA INTENSIVA</a></h3>
                                <div class="pi-price">R$299,90</div>
                                <a href="javascript:;" class="btn btn-default add2cart">INSCREVA-SE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row margin-bottom-35 ">
                <div class="col-md-6 two-items-bottom-items">
                    <h2>MAIS CURSOS</h2>
                    <div class="owl-carousel owl-carousel2">
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="assets/pages/img/products/k4.jpg" class="img-responsive" alt="Berry Lace Dress">
                                    <div>
                                        <a href="assets/pages/img/products/k4.jpg" class="btn btn-default fancybox-button">INSCREVA-SE</a>
                                        <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">Gostei <i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <h3><a href="#">FLEBOTOMIA</a></h3>
                                <div class="pi-price">R$299,00</div>
                                <a href="javascript:;" class="btn btn-default add2cart">INSCREVA-SE</a>
                            </div>
                        </div>
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="assets/pages/img/products/k5.jpg" class="img-responsive" alt="Berry Lace Dress">
                                    <div>
                                        <a href="assets/pages/img/products/k2.jpg" class="btn btn-default fancybox-button">INSCREVA-SE</a>
                                        <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">Gostei <i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <h3><a href="#">FERIDAS E CURATIVOS</a></h3>
                                <div class="pi-price">R$299,00</div>
                                <a href="javascript:;" class="btn btn-default add2cart">INSCREVA-SE</a>
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