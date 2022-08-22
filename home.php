<body id="body">

    <?php include 'header.php' ?>





    <!-- Slider Start -->




    <section class="slider pro">
        <div class="container cad">
            <div class="row tp-1">
                <div class="col-md-12">
                    <div class="block">

                        <h1 class=" animated fadeInUp">Faça seu cadastro aqui <br> </h1>


                        <!-- 
                         <a href="https://themefisher.com/free-bootstrap-templates/" target="_blank" class="btn btn-main animated fadeInUp">Free Bootstrap Templates</a>
 -->

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



    <!-- Wrapper Start -->
    <section class="about section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">

                    <div class=" section-title cad">
                        <h2>Selecione uma opção</h2>
                    </div>



                    <div class=" col-md-6 portfolio-item shuffle-item  " data-groups=" [&quot;design&quot;]" onclick="myFunction()">

                        <img src="images/portfolio/work1.jpg">



                        <div class="portfolio-hover">
                            <div class="portfolio-content">
                                <h3>consumidor</h3>
                            </div>
                        </div>




                        <!--     <div class=" section-title cad">
                                <h2>Consumidor</h2>
                            </div> -->
                    </div>
                    <div class="col-md-6 portfolio-item dir shuffle-item" data-groups="[&quot;design&quot;,&quot;illustration&quot;]" onclick="myFunction2()">
                        <img src="images/portfolio/work2.jpg" alt="">

                        <div class="portfolio-hover">
                            <div class="portfolio-content">
                                <h3>Produtor</h3>

                            </div>
                        </div>
                        <!-- 
                            <div class=" section-title cad">
                                <h2>Produtor</h2>
                            </div>
-->
                    </div>
                </div>




            </div>

            <!-- .col-md-7 close -->

            <!-- 
                <div class="col-md-5 col-sm-12">
                    <div class="block">
                        <img src="images/wrapper-img.png" alt="Img">
                    </div>
                </div>
                
                -->

            <!-- .col-md-5 close -->


        </div>
        </div>
    </section>







    <section class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="post post-single">
                        <div class="post-comments-form" id="myDIV1">
                            <h3 class=" post-sub-heading">Formulario Consumidor</h3>


                            <form method="post" action="#" id="form" role="form">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <!-- Name -->
                                        <input type="text" name="name" id="name" class=" form-control" placeholder="Name *" maxlength="100" required="">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <!-- sobrename -->
                                        <input type="text" name="sobrename" id="sobrename" class=" form-control" placeholder="Sobrenome *" maxlength="100" required="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <!-- fone -->
                                        <input type="text" name="fone" id="fone" class=" form-control" placeholder="Telefone *" maxlength="100" required="">

                                    </div>

                                    <div class="col-md-6 form-group">
                                        <!-- Email -->
                                        <input type="text" name="email" id="email" class=" form-control" placeholder="Email *" maxlength="100" required="">
                                    </div>



                                    <div class="form-group col-md-6">
                                        <!-- Endereço -->
                                        <input type="text" name="endereco" id="endereco" class=" form-control" placeholder="Endereço *" maxlength="100" required="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <!-- número -->
                                        <input type="text" name="numero" id="numero" class=" form-control" placeholder="Número *" maxlength="100" required="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <!-- Bairro -->
                                        <input type="text" name="bairro" id="bairro" class=" form-control" placeholder="Bairro *" maxlength="100" required="">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <!-- Cidade -->
                                        <input type="text" name="cidade" id="cidade" class=" form-control" placeholder="Cidade *" maxlength="100" required="">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <!-- CEP -->
                                        <input type="text" name="cep" id="cep" class=" form-control" placeholder="CEP *" maxlength="100" required="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <!-- Estado -->
                                        <input type="text" name="estado" id="estado" class=" form-control" placeholder="Estado *" maxlength="100" required="">
                                    </div>

                                    <!-- senha para usuário -->


                                    <div class="form-group col-md-6">
                                        <!-- Estado -->
                                        <input type="password" name="senha" id="senha" class=" form-control" placeholder="Digite uma senha *" maxlength="100" required="">

                                    </div>


                                    <div class="form-group col-md-6">
                                        <!-- CPF -->
                                        <input type="text" name="cpf" id="cpf" class=" form-control" placeholder="CPF *" maxlength="100" required="">
                                    </div>



                                    <div class="form-group col-md-6">
                                        <!-- CNPJ -->



                                        <div class="form-group col-md-6">


                                            Possui CNPJ?


                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="nao" value="nao" checked>
                                                <label class="form-check-label" for="nao">
                                                    Não
                                                </label>


                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="sim" value="sim">
                                                <label class="form-check-label" for="sim">
                                                    Sim
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">

                                            <input type="text" name="cnpj" id="cnpj" class=" form-control" placeholder="CNPJ *" maxlength="100" required="">
                                        </div>
                                    </div>

                                    <!-- Send Button -->
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-main ">
                                            Send comment
                                        </button>
                                    </div>

                            </form>


                        </div>






                        <div class="post-comments-form" id="myDIV2">
                            <h3 class="post-sub-heading">Formulario produtor</h3>

























































                            <form method="post" action="#" id="form2" role="form">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <!-- Name -->
                                        <input type="text" name="name" id="name" class=" form-control" placeholder="Name *" maxlength="100" required="">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <!-- sobrename -->
                                        <input type="text" name="sobrename" id="sobrename" class=" form-control" placeholder="Sobrenome *" maxlength="100" required="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <!-- fone -->
                                        <input type="text" name="fone" id="fone" class=" form-control" placeholder="Telefone *" maxlength="100" required="">

                                    </div>

                                    <div class="col-md-6 form-group">
                                        <!-- Email -->
                                        <input type="text" name="email" id="email" class=" form-control" placeholder="Email *" maxlength="100" required="">
                                    </div>



                                    <div class="form-group col-md-6">
                                        <!-- Endereço -->
                                        <input type="text" name="endereco" id="endereco" class=" form-control" placeholder="Endereço *" maxlength="100" required="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <!-- número -->
                                        <input type="text" name="numero" id="numero" class=" form-control" placeholder="Número *" maxlength="100" required="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <!-- Bairro -->
                                        <input type="text" name="bairro" id="bairro" class=" form-control" placeholder="Bairro *" maxlength="100" required="">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <!-- Cidade -->
                                        <input type="text" name="cidade" id="cidade" class=" form-control" placeholder="Cidade *" maxlength="100" required="">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <!-- CEP -->
                                        <input type="text" name="cep" id="cep" class=" form-control" placeholder="CEP *" maxlength="100" required="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <!-- Estado -->
                                        <input type="text" name="estado" id="estado" class=" form-control" placeholder="Estado *" maxlength="100" required="">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <!-- foto de perfil-->
                                        <input type="text" name="estado" id="estado" class=" form-control" placeholder="Estado *" maxlength="100" required="">
                                    </div>




                                    <div class="form-group col-md-6">
                                        <!-- CPF -->
                                        <input type="text" name="cpf" id="cpf" class=" form-control" placeholder="CPF *" maxlength="100" required="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <!-- CNPJ -->



                                        <div class="form-group col-md-6">


                                            Possui CNPJ?


                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="nao" value="nao" checked>
                                                <label class="form-check-label" for="nao">
                                                    Não
                                                </label>


                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="sim" value="sim">
                                                <label class="form-check-label" for="sim">
                                                    Sim
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">

                                            <input type="text" name="cnpj" id="cnpj" class=" form-control" placeholder="CNPJ *" maxlength="100" required="">
                                        </div>
                                    </div>

                                    <!-- Send Button -->
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-main ">
                                            Send comment
                                        </button>
                                    </div>

                            </form>





                        </div>





                    </div>
                </div>

            </div>
        </div>
    </section>









    <!--  

    <section class="feature bg-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-6" style="background:red">
                    <h2 class="section-subtitle">WE BELIEVE IN GREAT IDEAS</h2>
                    <p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <a href="#" class="btn btn-view-works">View Works</a>
                </div>
            </div>
        </div>
    </section>


    -->
    <!-- Service Start -->
    <section class="service">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Anuncie conosco</h2>
                    <p>anunciando conosco, suas vendas vão muito mais longe</p>
                </div>
            </div>
            <div class="row ">

                <!-- style="background-color:red" -->

                <div class="col-sm-6 col-md-3">
                    <div class="service-item">
                        <i class="icon ion-coffee"></i>
                        <h4>Branding</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="service-item">
                        <i class="ion-compass"></i>
                        <h4>Web Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="service-item">
                        <i class="ion-image"></i>
                        <h4>App Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="service-item">
                        <i class="ion-bug"></i>
                        <h4>Start Up</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="service-item">
                        <i class="ion-headphone"></i>
                        <h4>Logo Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="service-item">
                        <i class="ion-leaf"></i>
                        <h4>Development</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="service-item">
                        <i class="ion-planet"></i>
                        <h4>Brand Identity</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="service-item">
                        <i class="ion-earth"></i>
                        <h4>Brand Identity</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action Start -->

    <section class="call-to-action bg-1 section-sm overly ho">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2>We design delightful digital experiences.</h2>
                        <p>Read more about what we do and our philosophy of design. Judge for yourself The work and results <br> we’ve achieved for other clients, and meet our highly experienced Team who just love to design.</p>
                        <a class="btn btn-main btn-solid-border" href="#">Tell Us Your Story</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Start -->
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h2>Fatos sobre nós</h2>
                    <p>Algumas estatisticas sobre nossa plataforma </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="block">
                        <ul class="counter-box clearfix">
                            <li>
                                <div class="counter-item">
                                    <i class="ion-ios-chatboxes-outline"></i>
                                    <h4 class="count" data-count="99">0</h4>
                                    <span>Cups Of Coffee</span>
                                </div>
                            </li>
                            <li>
                                <div class="counter-item">
                                    <i class="ion-ios-glasses-outline"></i>
                                    <h4 class="count" data-count="445">0</h4>
                                    <span>Article Written</span>
                                </div>
                            </li>
                            <li>
                                <div class="counter-item">
                                    <i class="ion-ios-compose-outline"></i>
                                    <h4 class="count" data-count="125">0</h4>
                                    <span>Projects Completed</span>
                                </div>
                            </li>
                            <li>
                                <div class="counter-item">
                                    <i class="ion-ios-timer-outline"></i>
                                    <h4 class="count" data-count="200">0</h4>
                                    <span>Combined Projects</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <div class="testimonial-carousel text-center">
                        <div class="testimonial-slider owl-carousel">
                            <div>
                                <i class="ion-quote"></i>
                                <p>"This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd."</p>
                                <div class="user">
                                    <img src="images/item-img1.jpg" alt="Pepole">
                                    <p><span>Rose Ray</span> CEO-Themefisher</p>
                                </div>
                            </div>
                            <div>
                                <i class="ion-quote"></i>
                                <p>"This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd."</p>
                                <div class="user">
                                    <img src="images/item-img1.jpg" alt="Pepole">
                                    <p><span>Rose Ray</span> CEO-Themefisher</p>
                                </div>
                            </div>
                            <div>
                                <i class="ion-quote"></i>
                                <p>"This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd."</p>
                                <div class="user">
                                    <img src="images/item-img1.jpg" alt="Pepole">
                                    <p><span>Rose Ray</span> CEO-Themefisher</p>
                                </div>
                            </div>
                            <div>
                                <i class="ion-quote"></i>
                                <p>"This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd."</p>
                                <div class="user">
                                    <img src="images/item-img1.jpg" alt="Pepole">
                                    <p><span>Rose Ray</span> CEO-Themefisher</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php' ?>

    <script>
        function myFunction() {
            var x = document.getElementById("myDIV1");
            var y = document.getElementById("myDIV2");
            if ((x.style.display === "block") || (y.style.display === "block")) {
                x.style.display = "block";
                y.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }


        function myFunction2() {
            var x = document.getElementById("myDIV1");
            var y = document.getElementById("myDIV2");
            if ((x.style.display === "block") || (y.style.display === "block")) {
                x.style.display = "none";

                y.style.display = "block";
            } else {
                y.style.display = "block";
            }
        }


        $(document).ready(function() {
            $('#cnpj').hide();
            // aqui um seletor por name, para pegar todos os radio buttons "flexRadioDefault"
            $('input:radio[name="flexRadioDefault"]').change(function() {
                // aqui, this é o radio quem foi clicado, então basta comparar o valor com val()
                if ($(this).val() == "sim") {
                    $('#cnpj').show();
                } else {
                    $('#cnpj').hide();
                }
            });
        });
    </script>


</body>

</html>