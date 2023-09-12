<html>
<body>

 
<?php 

session_start();
    
  if (isset($_SESSION['usuario'])){
     header("location:index.php");
    }

 require 'header.php' ?>





<section class="coming-soon text-center overly">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="block">
       
  
<?php 
	if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }

 ?>


  <h3>
    Faça login para poder divulgar os seus produtos
  </h3>
  <form action="acaoLogin" id="contact-form" method="post">
 
  <div class="form-group">
   <input type="text" id="user" name="user"  class="form-control" placeholder="Usuário"  required>
    </div> 
 
    <div class="form-group">
       <input type="passord" name="pass" class="form-control" placeholder="Senha"   required>
  </div>
  
  
  <input type="submit" class="btn btn-primary"  name="acao" id="acao" value="login">
  </form>
 
  <!-- Register buttons -->
  <div class="text-center">
     
    <div class="row">
        <div class="col-sm" >

            <!-- Simple link -->
   <h4>  Esqueceu sua senha?  
     <a class="teste" shref="#!">Clique aqui!</a><h4>
          </div>
      </div>
    
    <p>Ainda não possui cadastro?
         </p>
    <button type="button" class="btn btn-m btn-secondary ">
 

        <a href="cad-prod" target=”_blank” rel="noopener noreferer">Registre-se aqui!</a>
     

    </button>
   
  </div>




  </div>  
</div>
      </div>
    </div>
  </section>

<?php   require 'footer.php' ?>


</body>
</html>