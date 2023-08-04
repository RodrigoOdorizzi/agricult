    <!-- Header Start -->
<header class="navigation">
      <div class="container"  > 
<div class="row">

             <div class="col " >
                    <div class="nav navbar-nav men">        
                <a href="index">
                             <img src="images/rural.png" alt="Logo">
                            </a>    
                            </div>
                            </div>
                          

                

                            <div class="col men" >
                         <ul class="navbar-nav navbar ">
                                              
                                                  <li> 
                                                     <?php  
                                 echo 'Bem vindo '. $_SESSION['nome'];
                                 ?>
                                  <a class="btn btn-primary btn-rounded my-0" href="acaoLogin.php?acao=logoff" >Sair</a>
                                               </li>                         
                         </ul>                         
                         </div>





 
            <!-- header Nav Start -->
          
            <div class="col men" >
                   <!-- Collect the nav links, forms, and other content for toggling -->
                     
            <nav class="navbar-nav navbar ">
                       <ul class="nav navbar-nav">
                        <li><a href="index">Início</a></li>                            
                                <li><a href="Produto">Produtos</a></li>
                                <li><a href="Quem_somos">Quem somos </a></li>
                             
                                <li>
                                    <a href="noticia">Noticias </a>
                                </li>
                                <li >
                                    <a href="Nota_fiscal">NFP-e  </a>
                                  
                                </li>
                                <li><a href="contato">Contato</a></li>
                               </ul>   
                        </nav>
            </div>

                  
                        
                         




     
    </div> 
    </div>
</header>