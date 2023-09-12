<!DOCTYPE html>
<?php
include 'conf/conf.inc.php';
include 'valida.php';
?>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
 

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Aviato E-Commerce Template">

    <meta name="author" content="Themefisher.com">

    <title>Agritech
    </title>

    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- Ionic Icon Css -->
    <link rel="stylesheet" href="plugins/Ionicons/css/ionicons.min.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="plugins/animate-css/animate.css">
    <!-- Magnify Popup -->
    <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="plugins/slick/slick.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
<<<<<<< HEAD

    
</head>
 
=======
</head>



<!-- Header Start -->
<header class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- header Nav Start -->
                <nav class="navbar">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php">
                                <img src="images/rura3.jpg" alt="Logo">
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index.php">Início</a></li>

                                
                                <li><a href="Produto.php">Produtos</a></li>

                                <li class="dropdown">

                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Cadastre-se<span class="ion-ios-arrow-down"></span></a>
                                    <!-- -->
                                    <ul class="dropdown-menu">
                                      
                                    <li><a href="cad-comp.php">Cadastrar comprador</a></li>
                                    <li><a href="cad-prod.php">Cadastrar produtor</a></li>
                                    </ul>


                                </li>
>>>>>>> main

<?php


<<<<<<< HEAD
if(isset($_SESSION['user'])){
  
    include_once(__DIR__.'/header_logado.php');
   
} else {
   
     include_once(__DIR__.'/header_deslogado.php');
     session_destroy();
}
=======
                                </li>


                                <li class="dropdown">
                                    <a href="noticia.php">Noticias </a>

                                </li>


                             

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NFP-e <span class="ion-ios-arrow-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="Nota_fiscal.php">Nota</a></li>
                                    </ul>
                                </li>
                                <li><a href="contato.php">Contato</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    </div>
</header>
>>>>>>> main

?> 