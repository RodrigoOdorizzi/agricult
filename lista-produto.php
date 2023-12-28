<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<?php
require_once "conf/Conexao.class.php";
require_once "conf/Crud.class.php";
require_once "autoload.php";
//include_once "conf/default.inc.php"; 
require_once "acao_pessoa.php";

$title = "Lista de produtos";
$numero='';
$consulta = isset($_POST['consulta']) ? $_POST['consulta'] : "";
$id = isset($_GET['id']) ? $_GET['id'] : "1";
$pdo = Conexao::getInstance();

$consulta = $pdo->query("SELECT * FROM produto
     WHERE codigo
     LIKE '$id%'");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    $produto = new Produto;
    $produto->buildFromArray($linha);
 
}

?>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>


<body id="body" >
    
<?php include 'header.php' ?>

<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1>Veja detalhes sobre o seu produto</h1>
               </div>
            </div>
        </div>
    </div>
</section>

<?php 

if(isset($_POST['consulta'])){
    $consulta = $_POST['consulta'];
    $_POST['envi'] = $consulta;
}

?>

<section class="portfolio-single-page section-sm" > 
 
<div class="container">
        <div class="row">

<div class=" col-md-12" >
<div class="portfolio-item col-md-12" >
<img src="<?php echo $produto->getFotoProduto(); ?>">
</div>

 

<div class="portfolio-nome col-md-1 "> 
<i class="ion-ios-person"></i>
</div>

<div class="portfolio-nome col-md-11"> 
<h4><p> Nome</p>
<?php echo $produto->getNome(); ?></h4>
</div>    
 
 
 
 
 

 
 

 

<!-- fim div conteiner -->
</div>

<!-- fim div row-->

</div>
<div class="portfolio-item col-md-12" >

<a href="index" class="btn btn-main btn-m  ">Voltar ao menu inicial</a>

</div>
</section>

 

<?php include 'footer.php' ?>

</body>



<?php include 'script.php' ?>
 

</html>