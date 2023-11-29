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
$title = "Lista de vendedoress";
$numero='';
$consulta = isset($_POST['consulta']) ? $_POST['consulta'] : "";

?>




<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   

</head>





<?php include 'header.php' ?>

<body id="body">
    
<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1>Encontre os vendedores de sua região</h1>
                    <p>preencha abaixo as informações para cadastro</p>
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

<section class="related-projects section-sm bg-gray">
 
    <div class="container">
        <div class="row" >
               <div class="col-md-12" > 

    <div class="form-group col-md-3" >
               <form method="post" >
                
                        <label>
                            Informe a cidade
                        </label>

                        <input type="text" class="form-control" name="consulta" id="consulta" placeholder="Ex: Rio do sul">
                        <input readonly type="hidden" class="form-control" name="numero" id="numero" value="<?php $numero=1 ?>">
                        <input type="submit" class="btn btn-secondary btn-sm" value="Pesquisar">
  
                </form>
  </div>
                

  <div class="form-group portfolio-nome col-md-9" >
    
                <?php
                        $pdo = Conexao::getInstance();
                        $consulta = $pdo->query("SELECT * FROM pessoa
                             WHERE cidade
                             LIKE '$consulta%'");
                        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                            $pessoa = new Pessoa;
                            $pessoa->buildFromArray($linha);

                        ?>
                        

<div class="portfolio-item1 col-md-4 col-4 col-sm-4"   >
       
<div class="portfolio col-md-12"  >
<img style="max-height: 100px" src="<?php echo $pessoa->getImagem(); ?>">
</div>


<div class="portfolio-nome col-md-12 "> 
<a class="h4" href="#"><?php echo $pessoa->getNome(); ?></a>
</div>          
                    
                  <div  class="portfolio-content1 col-md-12">

                 <a href='lista-produtor.php?id=<?php echo $pessoa->getCodigo(); ?>'> <i class="fa fa-search fa-2x black-text" style="text-align: center;"></i>
                
                 <p> Ver contato</p>
                
                </a>   
                
                </div>   
</div>


<?php
                        }
?>
</div>




 
</div>
</div>
</div> 
</section>

<?php include 'footer.php' ?>
 

</body>


<?php include 'script.php' ?>
 

</html>