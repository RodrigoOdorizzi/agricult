<?php
 
require_once "conf/Conexao.class.php";
require_once "conf/Crud.class.php";
require_once "autoload.php";
// include_once "conf/default.inc.php";

 








$acao = '';
$codigo = '';
$consulta;
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET': {
            $acao = isset($_GET['acao']) ? $_GET['acao'] : "";
            $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : 0;
        }
        break;
    case 'POST': {

        
            $acao = isset($_POST['acao']) ? $_POST['acao'] : "";
            $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : "";
        
      
        }
        break;
}


 if ($acao == "salvar") {
 
   
    

$novoNomeArquivo = '';

if(isset($_FILES['imagem'])){
    $foto = $_FILES['imagem'];
 
     $pasta = "images/";
     $nomeDoArquivo = $foto ['name'] ;
     $novoNomeArquivo = uniqid();
     $extencao = strtolower(pathinfo($nomeDoArquivo,PATHINFO_EXTENSION));
 
     if($extencao != "jpg" && $extencao != 'png')
     die("formato inválido!");
 
     $imagemok = move_uploaded_file($foto["tmp_name"],$pasta.$novoNomeArquivo.".".$extencao);
 
 
     if(   $imagemok )
     echo "imagem enviada com sucesso  , <a target=\"_blank\"  href=\"images/$novoNomeArquivo.$extencao\">ddd</a>";
    
     else 
     echo " Falha ao enviar arquivo!";
 
 
 }
 
      
} else
echo 'não é';

  
 
  