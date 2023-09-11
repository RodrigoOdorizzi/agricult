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
<<<<<<< HEAD
				$codigo = addslashes($_POST['codigo']);
				logar($user, $senha);
=======
			 	logar($user, $senha);
>>>>>>> retiradocadastroconsumidor
				 
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
<<<<<<< HEAD
	$codigo = "";
=======
>>>>>>> retiradocadastroconsumidor

 

	while ($row = mysqli_fetch_array($result)) {
		$senhaBD = $row['senha'];
		$usuario = $row['usuario'];
		$nome = $row['nome'];	
<<<<<<< HEAD
		$codigo = $row['codigo'];
=======
		
>>>>>>> retiradocadastroconsumidor
		
	}
 	

//	$senha = sha1($senha);
	
	if ($senha == $senhaBD) {
		
		$_SESSION['user'] = $usuario;
		$_SESSION['nome'] = $nome;
<<<<<<< HEAD
		$_SESSION['codigo'] = $codigo;
	
	
		$_SESSION['msg'] =  "<div class='alert alert-success'>Sucesso!</div>";

		header("location:index");
	  
       
	}  else {
	$_SESSION['valida']='2';																																
=======
		
		header("location:index");
	
       
	}  else {
	$_SESSION['valida']='2';
>>>>>>> retiradocadastroconsumidor
		    
	     $_SESSION['msg'] = "<div class='alert alert-danger'>Login ou senha incorreto!</div>";
		 header("location:cadastro");
}
}


?>