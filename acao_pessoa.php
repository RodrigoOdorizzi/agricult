<?php
 
require_once "conf/Conexao.class.php";
require_once "conf/Crud.class.php";
require_once "autoload.php";
// include_once "conf/default.inc.php";

<<<<<<< HEAD
  
$acao = '';
$codigo = '';
$consulta;
=======
$acao = '';
$codigo = '';
>>>>>>> retiradocadastroconsumidor
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET': {
            $acao = isset($_GET['acao']) ? $_GET['acao'] : "";
            $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : 0;
        }
        break;
    case 'POST': {
<<<<<<< HEAD
        
            $acao = isset($_POST['acao']) ? $_POST['acao'] : "";
            $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : "";
              
=======

        
            $acao = isset($_POST['acao']) ? $_POST['acao'] : "";
            $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : "";
        
      
>>>>>>> retiradocadastroconsumidor
        }
        break;
}

if ($acao == "excluir") {
   
    excluir_pessoa($codigo);
  
} elseif ($acao == "salvar") {
<<<<<<< HEAD

    if ($codigo == 0){
 

if(isset($_FILES['imagem'])){
    $foto = $_FILES['imagem'];
 
     $pasta = "images/";
     $nomeDoArquivo = $foto ['name'] ;
     $novoNomeArquivo = uniqid();
     $extencao = strtolower(pathinfo($nomeDoArquivo,PATHINFO_EXTENSION));
     
     $caminho =  $pasta.$novoNomeArquivo.".".$extencao;

     if($extencao != "jpg" && $extencao != 'png')
     die("formato inválido!");
 
     $imagemok = move_uploaded_file($foto["tmp_name"],$caminho);
  
     if(   $imagemok ){
     echo "imagem enviada com sucesso  , <a target=\"_blank\"  href=\"images/$novoNomeArquivo.$extencao\"> $caminho</a>";
    
     inserir_pessoa($codigo);

   }  else 
     echo " Falha ao enviar arquivo!";
  
 }
     
=======
    if ($codigo == 0){
 
        inserir_pessoa($codigo);
>>>>>>> retiradocadastroconsumidor
    } else
   
        editar_pessoa($codigo);
}
<<<<<<< HEAD
if($acao == "localizar"){
  
echo show_pessoa(3);
 
} 
// Métodos para cada operação

function inserir_pessoa($codigo)
{
=======

// Métodos para cada operação



function inserir_pessoa($codigo)
{

>>>>>>> retiradocadastroconsumidor
   
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'pessoa');
    $pessoa = dadosForm_pessoa();

    // Inseri os dados do usuário

<<<<<<< HEAD
    $arrayPessoa = array('nome' => $pessoa->getNome(), 'email' => $pessoa->getEmail(), 'telefone' => $pessoa->getTelefone(), 'endereco' => $pessoa->getEndereco(), 'id_estado' => $pessoa->getId_estado(), 'nascimento' => $pessoa->getNascimento() , 'imagem' => $pessoa->getImagem() ,'cidade' => $pessoa->getCidade(), 'usuario' => $pessoa->getUsuario(), 'senha' => $pessoa->getSenha());
    $retorno   = $crud->insert($arrayPessoa);

  
  //    header("location:cad-prod"); 
      return $retorno;
=======
    $arrayPessoa = array('nome' => $pessoa->getNome(), 'email' => $pessoa->getEmail(), 'telefone' => $pessoa->getTelefone(), 'endereco' => $pessoa->getEndereco(), 'id_estado' => $pessoa->getId_estado(), 'nascimento' => $pessoa->getNascimento() , 'cidade' => $pessoa->getCidade(), 'usuario' => $pessoa->getUsuario(), 'senha' => $pessoa->getSenha());
    $retorno   = $crud->insert($arrayPessoa);

 //   header("location:_/cad_prod.php");
>>>>>>> retiradocadastroconsumidor
}


function editar_pessoa($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'pessoa');
    $pessoa = dadosForm_pessoa();

<<<<<<< HEAD
    $arrayPessoa = array('nome' => $pessoa->getNome(), 'email' => $pessoa->getEmail(), 'telefone' => $pessoa->getTelefone(), 'endereco' => $pessoa->getEndereco(), 'id_estado' => $pessoa->getId_estado(), 'nascimento' => $pessoa->getNascimento() , 'imagem' => $pessoa->getImagem() ,'cidade' => $pessoa->getCidade(), 'usuario' => $pessoa->getUsuario(), 'senha' => $pessoa->getSenha());
=======
    $arrayPessoa = array('nome' => $pessoa->getNome(), 'telefone' => $pessoa->getTelefone(), 'endereco' => $pessoa->getEndereco(), 'id_estado' => $pessoa->getId_estado(), 'nascimento' => $pessoa->getNascimento() , 'cidade' => $pessoa->getCidade(), 'usuario' => $pessoa->getUsuario(), 'senha' => $pessoa->getSenha());
>>>>>>> retiradocadastroconsumidor
    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->update($arrayPessoa, $arrayCond);
   // header("location:index_pessoa.php");
}

function excluir_pessoa($codigo)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'pessoa');

    $arrayCond = array('codigo=' => $codigo);
    $retorno   = $crud->delete($arrayCond);
    header("location:index_pessoa.php");
}


function show_pessoa($id)
{
    $pdo = Conexao::getInstance();
    $crud = Crud::getInstance($pdo, 'pessoa');
    $sql        = "SELECT * FROM pessoa WHERE codigo = ?";
    $arrayParam = array($id);
    $dados = $crud->getSQLGeneric($sql, $arrayParam, FALSE);
    $pessoa = new Pessoa;
    $pessoa->buildFromObj($dados);
    return $pessoa;
}


// Busca as informações digitadas no form

function dadosForm_pessoa()
{
 

    $pessoa = new Pessoa;
    $dados = array();
    $dados['codigo'] = $_POST['codigo'];
    $dados['nome'] = $_POST['nome'];
    $dados['email'] = $_POST['email'];
    $dados['telefone'] = $_POST['telefone'];
    $dados['endereco'] = $_POST['endereco'];
    $dados['id_estado'] = $_POST['id_estado'];
    $dados['nascimento'] = $_POST['nascimento'];
<<<<<<< HEAD
    $dados['imagem'] = $GLOBALS['caminho'];
    $dados['cidade'] = $_POST['cidade'];
    $dados['usuario'] = $_POST['usuario'];
    $dados['senha'] = $_POST['senha'];  
    $pessoa->buildFromArray($dados);
=======
    $dados['cidade'] = $_POST['cidade'];
    $dados['usuario'] = $_POST['usuario'];
    $dados['senha'] = $_POST['senha'];
  
    $pessoa->buildFromArray($dados);
   
  
   
>>>>>>> retiradocadastroconsumidor
    return $pessoa;

      
}  
 
<<<<<<< HEAD

 
  
=======
?>
>>>>>>> retiradocadastroconsumidor
