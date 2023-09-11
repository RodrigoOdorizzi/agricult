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

$title = "Lista de vendedoress";
$numero='';
$consulta = isset($_POST['consulta']) ? $_POST['consulta'] : "";
$id = isset($_GET['id']) ? $_GET['id'] : "1";
$pdo = Conexao::getInstance();

$consulta = $pdo->query("SELECT * FROM pessoa
     WHERE codigo
     LIKE '$id%'");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    $pessoa = new Pessoa;
    $pessoa->buildFromArray($linha);
 
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
                    <h1>Encontre os vendedores de sua região</h1>
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
<img src="<?php echo $pessoa->getImagem(); ?>">
</div>

 

<div class="portfolio-nome col-md-1 "> 
<i class="ion-ios-person"></i>
</div>

<div class="portfolio-nome col-md-11"> 
<h4><p> Nome</p>
<?php echo $pessoa->getNome(); ?></h4>
</div>    
 

<div class="portfolio-item col-md-12" >
<div class="portfolio-nome col-md-1 "> 
<i class="ion-ios-home"></i>
</div>

<div class="portfolio-nome col-md-11"> 
<h4><p> Endereço</p>
<?php echo $pessoa->getEndereco(); ?> <?php echo $pessoa->getCidade(); ?> <?php echo $pessoa->getId_estado(); ?> </h4>
</div>    
</div>   



<div class="portfolio-item col-md-12" >
<div class="portfolio-nome col-md-1 ">  
<i class="fa fa-whatsapp" ></i>
<ion-icon name="logo-whatsapp"></ion-icon>
 
</div>

<div class="portfolio-nome col-md-11" > 
 <p> Telefone / Whatsapp</p>


<a href="<?php echo "https://wa.me/55".$pessoa->getTelefone(); ?>" target="_blank" rel=”noopener noreferrer"> 
<h4> <?php echo $pessoa->getTelefone(); ?>    <button target="_blank" class="btn btn-green btn-round" > Fale com Produtor
</button>   </h4>  
</a>

</div>    
</div>   



 

<div class="portfolio-item col-md-12" >
<div class="portfolio-nome col-md-1 "> 
<i class="ion-email"></i>
 

</div>

<div class="portfolio-nome col-md-11"> 
<h4><p> E-mail</p>
<?php echo $pessoa->getEmail(); ?> </h4>
</div>    
</div>   


 

 
 

 

<!-- fim div conteiner -->
</div>

<!-- fim div row-->

</div>
</section>

 

<?php include 'footer.php' ?>

</body>



<?php include 'script.php' ?>
 

</html>