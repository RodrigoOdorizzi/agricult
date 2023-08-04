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

    
</head>
 

<?php


if(isset($_SESSION['user'])){
  
    include_once(__DIR__.'/header_logado.php');
   
} else {
   
     include_once(__DIR__.'/header_deslogado.php');
     session_destroy();
}

?> 