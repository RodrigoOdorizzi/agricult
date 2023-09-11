<<<<<<< HEAD
<?php 

?>


<html>
    <head>
    <meta charset="utf-8">
    <title>MusicDot</title>
  </head>
  <body>
 

  <form method="POST" action="teste1" enctype="multipart/form-data">
<p>
  <label for="Selecione o arquivo"></label>  </p>
  <input type="file" name="imagem"  >
  <input type="hidden" name="teste" value="<?php $novoNomeArquivo?>">
  
  <input type="submit" class="btn btn-sm btn-secondary"  name="acao" id="acao" value="salvar"> 


  </form>
  </body>
</html>
=======
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Aviato E-Commerce Template">
  
  <meta name="author" content="Themefisher.com">

  <title>Airspace | Creative Agency Bootstrap template</title>

</head>

<body id="body">


<?php
// Página 01

session_start();

echo 'Esta é a página 01, onde a sessão será criada';

$_SESSION['aula'] = "<div class='alert alert-danger'>Login ou senha incorreto!</div>";
$_SESSION['hora'] = time();

// Link para a página 02:
echo '<br /><a href="pagina2.php">Clique para ir à página 02</a>';
?>


    </body>

    </html>
>>>>>>> retiradocadastroconsumidor
