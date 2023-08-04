<?php
include 'connect/connect.php';
  

$acao = '';
if (isset($_GET["acao"]))
	$acao = $_GET["acao"];

if ($acao == "logoff") {
	session_start();
	session_destroy();
	 
 	header("location:index");
} else {
	if (isset($_POST["acao"])) {
		$acao = $_POST["acao"];
		if ($acao == "login") {
		 
			
			if (isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['pass']) && !empty($_POST['pass'])){
				$user = addslashes($_POST['user']);
				$senha = addslashes($_POST['pass']);
			 	logar($user, $senha);
				 
}
		  else
		  
	   header("location:cadastro");

	 }
	}
}

function logar($user, $senha)
{
	 
	session_start();
 

	$sql = "SELECT * FROM " . $GLOBALS['tb_login'] .
		" WHERE usuario = '$user'";
	$result = mysqli_query($GLOBALS['conexao'], $sql);
	$senhaBD = "";
	$usuario = "";
	$nome = "";

 

	while ($row = mysqli_fetch_array($result)) {
		$senhaBD = $row['senha'];
		$usuario = $row['usuario'];
		$nome = $row['nome'];	
		
		
	}
 	

//	$senha = sha1($senha);
	
	if ($senha == $senhaBD) {
		
		$_SESSION['user'] = $usuario;
		$_SESSION['nome'] = $nome;
		
		header("location:index");
	
       
	}  else {
	$_SESSION['valida']='2';
		    
	     $_SESSION['msg'] = "<div class='alert alert-danger'>Login ou senha incorreto!</div>";
		 header("location:cadastro");
}
}


?>