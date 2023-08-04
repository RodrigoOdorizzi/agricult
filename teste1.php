 
 
  
  <?php
// E esta é a página 02, onde recuperaremos as variáveis de sessão

session_start();


if(isset($_SESSION['aula'])){
    echo $_SESSION['aula'];
    unset($_SESSION['aula']);
  }

?>


 