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
$categorias[]=""; 
$fotoP[]="";
$x=1;
$max;
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
            <h1>Some of our latest projects.</h1>
            <p>Don’t just take our word for it. Check out some of our latest work.</p>
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

 
$pdo = Conexao::getInstance();
$consulta = $pdo->query("SELECT DISTINCT * FROM produto
 WHERE Categoria
 LIKE '$consulta%'");
  

?>
  


  <!-- Portfolio Start -->
  <section class="portfolio-work">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block">
            <div class="portfolio-menu">
              <div class="btn-group btn-group-toggle justify-content-center" data-toggle="buttons">
                <label class="btn btn-sm btn-primary active">
                  <input type="radio" name="shuffle-filter" value="all" checked="checked" />All
                </label>

                <label class="btn btn-sm btn-primary active">
                  <input type="radio" name="shuffle-filter" value="carne"   />Carnes
                </label>

                <label class="btn btn-sm btn-primary active">
                  <input type="radio" name="shuffle-filter" value="Fruta"   />Frutas
                </label>


                <label class="btn btn-sm btn-primary active">
                  <input type="radio" name="shuffle-filter" value="hortalica"  />Legumes
                </label>

                <label class="btn btn-sm btn-primary active">
                  <input type="radio" name="shuffle-filter" value="outro"  />Outros
                </label>
              </div>
            </div>

        <?php 
             $max = sizeof($fotoP);

             echo "tamnho" .$max; 
             ?>




            <div class="row shuffle-wrapper">
          
            
            <?php 
  while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
  $produto = new Produto;
  $produto->buildFromArray($linha);
  $fotoP[]= $produto->getFotoProduto();
  $categorias[] = $produto->getCategoria();
  ?>
            
            <div class="col-md-4 portfolio-item shuffle-item" data-groups="[&quot;'.$categorias[11].'&quot;]" style="background-color:#545454">
            <img style="max-height: 100px"  src="<?php echo $fotoP[1] ?>">
 
  <!-- 
            <div class="col-md-4 portfolio-item shuffle-item" data-groups="[&quot;fruta&quot;]">
         
           <img src="images/portfolio/work1.jpg" alt=""> -->
                <div class="portfolio-hover">
                  <div class="portfolio-content">
                    <a href="images/portfolio/work1.jpg" class="portfolio-popup"><i class="icon ion-search"></i></a>
                    <a class="h3" href="portfolio-single.html">dsadsadade</a>
                    <p>Labore et dolore magna aliqua. Ut enim ad </p>
                  </div>
                </div>
              </div>


              
             <?php 
                 $x++;
            
                } 
                     ?>



              <div class="col-md-4 portfolio-item shuffle-item"
                data-groups="[&quot;<?php echo $produto->getCategoria()?>&quot;]">
                <img src="<?php $produto->getFotoProduto()?>" alt="">
                <div class="portfolio-hover">
                  <div class="portfolio-content">
                    <a href="images/portfolio/work2.jpg" class="portfolio-popup"><i class="icon ion-search"></i></a>
                    <a class="h3" href="portfolio-single.html">Rifdfdfdure</a>
                    <p>Labore et dolore magna aliqua. Ut enim ad </p>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <!-- footer Start -->

  <?php include 'footer.php' ?>



  <!-- 
    Essential Scripts
    =====================================-->


  <!-- Main jQuery -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap 3.1 -->
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <!-- filter -->
  <script src="plugins/shuffle/shuffle.min.js"></script>
  <script src="plugins/SyoTimer/jquery.syotimer.min.js"></script>


  <script src="js/script.js"></script>

</body>

</html>