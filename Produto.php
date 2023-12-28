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
  $numero = '';
  $consulta = isset($_POST['consulta']) ? $_POST['consulta'] : "";
  $categorias[] = "";
  $fotoP[] = "";
  $nome[] = "";
  $x = 1;
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
              <h1>Produtos</h1>
              <p>Encontre os produtos </p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <?php

    if (isset($_POST['consulta'])) {
      $consulta = $_POST['consulta'];
      $_POST['envi'] = $consulta;
    }


    $pdo = Conexao::getInstance();
    $consulta = $pdo->query("SELECT * FROM produto
  WHERE categoria
  LIKE '$consulta%'");


    ?>



    <!-- Portfolio Start -->
    <section class="portfolio-work">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block">
              <div class="portfolio-menu">
                <div class="btn-group btn-group-toggle justify-content-center " data-toggle="buttons" >
                  <label class="btn btn-sm btn-primary active" style="color:#fff;">
                    <input type="radio" name="shuffle-filter" value="all" checked="checked" />All
                  </label>

                  <label class="btn btn-sm btn-primary  " style="color:#fff;">       <input type="radio" name="shuffle-filter" value="Carne" />Carnes
                  </label>

                  <label class="btn btn-sm btn-primary  " style="color:#fff;">          <input type="radio" name="shuffle-filter" value="Fruta" />Frutas
                  </label>

                  <label class="btn btn-sm btn-primary " style="color:#fff;">         <input type="radio" name="shuffle-filter" value="Hortalica" />Hortaliças
                  </label>

                  <label class="btn btn-sm btn-primary " style="color:#fff;">      <input type="radio" name="shuffle-filter" value="Legume" />Legumes
                  </label>

                  <label class="btn btn-sm btn-primary " style="color:#fff;">
                        <input type="radio" name="shuffle-filter" value="outro" />Outros
                  </label>
                </div>
              </div>



              <?php
              //    $max = sizeof($fotoP);
              //   echo "tamnho" .$max; 
              ?>

              <div class="row shuffle-wrapper col-12" >


                <?php
                while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                  $produto = new Produto;
                  $produto->buildFromArray($linha);
                  $fotoP[] = $produto->getFotoProduto();
                  $categorias[] = $produto->getCategoria();
                  $nome[] = $produto->getNome();
                ?>

                  <div class="portfolio-item shuffle-item col-xs-12 col-sm-6   col-md-3"  data-groups="[&quot;<?php echo  $categorias[$x] ?>&quot;]">

                    <div class="portfolio-content1" ">
                      <img src="<?php echo $fotoP[$x] ?>">
                      <p>       <?php echo $nome[$x] ?> </p>
                    </div>

                    <div class="portfolio-nome">
                      <a href='lista-produto.php?id=<?php echo $produto->getCodigo(); ?>'>
                        <i class="fa fa-search fa-2x black-text" style="text-align: center;"></i>
                        <p> Ver detalhes</p>
                      </a>


 


                    </div>
                  </div>


            <?php
                  $x++;
                }
            ?>

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