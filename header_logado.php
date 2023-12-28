   
   
   <style>
 *{
  margin: 0;
  padding: 0;
}
    
.sub {
  display: none;
  position: absolute;
}

ul {
  list-style: none;
}

.principal{
  background-color:#347cb4;
  display: inline-block;
  cursor: pointer;
  padding:5px 5px 5px 5px;
}

.sub li {
  display: block;
 
  background-color:#fff;
  color:#347cb4;
  padding: 10px;
}
.sub li:hover{
    background-color:#1f496b;
color:#fff;  
}

   </style>

   <!-- Header Start -->
    <header class="navigation">
    <div class="container" >
            <div class="row">


                <div class="col-md-6">
                    <a href="index">
                        <img src="images/rural.png" alt="Logo">
                    </a>
                </div>
 
              
                 
                        <div class="col-md-6" >
                        <ul class="men">

                        <li>
                            <a class="btn btn-primary"  href="acaoLogin.php?acao=logoff">Sair</a>
                   
                            </li> 
                            <li>
                       
                            <div id="conteudo"> 
                                 <ul>
  <li class="principal btn btn-primary" onclick="mostraSub('sub1')" onmouseleave="escondeSub('sub1')">  
  <i class="ion-android-person"></i> Painel do usuário

    <ul class="sub" id="sub1">
      <li><a href="meu-produto" target="_blank">Meus produtos</a></li>
      <li>Sub 2</li>
      <li>Sub 1</li>
      <li>Sub 1</li>
    </ul>

</ul>
 

</div>
                           </li>

                    <li>              
                            <?php
                        echo 'Bem vindo ' . $_SESSION['nome']; 
                            ?>
                            </li>
                          </ul> 
                           </div>
                <!-- header Nav Start -->

                <div class="col-md-12" >
                    <!-- Collect the nav links, forms, and other content for toggling -->


                    <nav class="navbar-nav navbar ">
                        <ul class="nav navbar-nav">
                            <li><a href="index">Início</a></li>
                            <li><a href="Produto">Produtos</a></li>
                            <li><a href="Quem_somos">Quem somos </a></li>

                            <li>
                                <a href="noticia">Noticias </a>
                            </li>
                            <li>
                                <a href="Nota_fiscal">NFP-e </a>

                            </li>
                            <li><a href="contato">Contato</a></li>
                        </ul>
                    </nav>
                </div>









            </div>
        </div>

    <!-- widged do tempo -->
    
    
         
        <div id="ww_adff56ac66a6d"  v='1.3' loc='auto' a='{"t":"ticker","lang":"pt","sl_lpl":1,"ids":[],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>Mais previsões: <a href="https://oneweather.org/pt/lisbon/" id="ww_adff56ac66a6d_u" target="_blank">Lisboa tempo por hora</a></div><script async src="https://app2.weatherwidget.org/js/?id=ww_adff56ac66a6d"></script>
        <script>

function mostraSub(sub){
  subfilho = document.getElementById(sub);
  subfilho.style.display = 'block';
}

function escondeSub(sub){
  subfilho = document.getElementById(sub);
  subfilho.style.display = 'none'; 
}
            </script>



    </header>