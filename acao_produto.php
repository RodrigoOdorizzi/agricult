<?php
require_once "conf/Conexao.class.php";
require_once "conf/Crud.class.php";
require_once "autoload.php";
// include_once "conf/default.inc.php";

$acao = '';
$codigo = '';
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

if ($acao == "excluir") {
    excluir_produto($codigo);
} elseif ($acao == "salvar") {
    if ($codigo == 0){
    
        
if(isset($_FILES['fotoProduto'])){
    $foto = $_FILES['fotoProduto'];
 
     $pasta = "fotoProduto/";
     $nomeDoArquivo = $foto ['name'] ;
     $novoNomeArquivo = uniqid();
     $extencao = strtolower(pathinfo($nomeDoArquivo,PATHINFO_EXTENSION));
     
     $caminho =  $pasta.$novoNomeArquivo.".".$extencao;

     if($extencao != "jpg" && $extencao != 'png')
     die("formato inválido!");
 
     $imagemok = move_uploaded_file($foto["tmp_name"],$caminho);
  
     if(   $imagemok ){
     echo "imagem enviada com sucesso  , <a target=\"_blank\"  href=\"fotoProduto/$novoNomeArquivo.$extencao\"> $caminho</a>";
    
     inserir_produto($codigo);

   }  else 
     echo " Falha ao enviar arquivo!";
  
 }
     

		 
	}    else{
 
		editar_produto($codigo);
	}
}

// Métodos para cada operação



function inserir_produto($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'produto');
    $produto = dadosForm_produto();

    // Inseri os dados do usuário

    $arrayProduto = array('nome' => $produto->getNome(), 'preco' => $produto->getPreco(), 'categoria' => $produto->getCategoria(), 'fotoProduto' => $produto->getFotoProduto(), 'cod_vendedor' => $produto->getCod_vendedor());
    $retorno = $crud->insert($arrayProduto);

	header("location:cad-produto.php");
}


function editar_produto($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'produto');
    $produto = dadosForm_produto();
    $arrayProduto = array('nome' => $produto->getNome(), 'preco' => $produto->getPreco(), 'categoria' => $produto->getCategoria(), 'fotoProduto' => $produto->getFotoProduto(), 'cod_vendedor' => $produto->getCod_vendedor());
    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->update($arrayProduto, $arrayCond);
    header("location:index_produto.php");
}

function excluir_produto($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'produto');
    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->delete($arrayCond);
    header("location:meu-produto.php");
}


function show_produto($id)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'produto');

    $sql        = "SELECT * FROM produto WHERE codigo = ?";
    $arrayParam = array($id);
    $dados = $crud->getSQLGeneric($sql, $arrayParam, FALSE);
    $produto = new Produto;
    $produto->buildFromObj($dados);
    return $produto;
}

// Busca as informações digitadas no form

function dadosForm_produto()
{
    $produto = new Produto;
    $dados = array();
    $dados['codigo'] = $_POST['codigo'];
    $dados['nome'] = $_POST['nome'];
    $dados['preco'] = $_POST['preco'];
    $dados['categoria'] = $_POST['categoria'];
     $dados['fotoProduto'] = $GLOBALS['caminho'];
    $dados['cod_vendedor'] = $_POST['cod_vendedor'];
    $produto->buildFromArray($dados);
    return $produto;
}
