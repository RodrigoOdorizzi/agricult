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
  $title = "Lista de produtos";
  $numero = '';
  $consulta = isset($_POST['consulta']) ? $_POST['consulta'] : "";
  $categorias[] = "";
  $fotoP[] = "";
  $nome[] = "";
  $x = 1;
  $max;
  $codigo =  $_SESSION['codigo']; 
  ?>


<script>
    function excluirRegistro(url) {
        if (confirm("Confirmar Exclusão?"))
            location.href = url;
    }
</script>

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
              <p>Encontre os produtos 
             
            </p>
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

    $codigo = $_SESSION['codigo'];

    $pdo = Conexao::getInstance();
    $consulta = $pdo->query("SELECT * FROM produto  
  WHERE cod_vendedor = '$codigo'
  ");


    ?>
  
<div id="content">
            <div class="container">
                <!-- section default -->
                <section class="row" id="features">
                    <div class="col-lg-12" style="padding-top: 20px;  ">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>

                                    <th scope="col">Nome</th>
                                    <th scope="col">Detalhes</th>
                                    <th scope="col">Alterar</th>
                                    <th scope="col">Excluir</th>

                                </tr>
                            </thead>
                            <tbody>



                            <?php
                while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                  $produto = new Produto;
                  $produto->buildFromArray($linha);
                  $fotoP[] = $produto->getFotoProduto();
                  $categorias[] = $produto->getCategoria();
                  $nome[] = $produto->getNome();
              
                ?>
                


 
                                    <tr>

                                        <td><?php echo $produto->getNome(); ?></td>

                                        <td><a href='lista-produto.php?id=<?php echo $produto->getCodigo(); ?>'> <i class="fa fa-search fa-2x black-text" style="text-align: center;"></i> </a></td>
                                        <td><a href='cad_pessoa.php?acao=editar&codigo=<?php echo $produto->getCodigo(); ?>'><i class="fa fa-pencil-square-o fa-2x black-text""></i></a></td>
                                        <td><a href=" javascript:excluirRegistro('acao_produto.php?acao=excluir&codigo=<?php echo $produto->getCodigo(); ?>')"><i class="fa fa-trash-o fa-2x black-text""></a></td>
                                    </tr>    
                                    
                                    
                                    <?php    }
   ?>


                        

                            </tbody>
                        </table>


                    </div>
                </section>


            </div>
        </div>




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