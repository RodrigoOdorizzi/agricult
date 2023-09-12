<<<<<<< HEAD
<?php

include_once "acao_pessoa.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : "";
$obj;
if ($acao == 'editar') {
    $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : "";
    if ($codigo > 0)
        $obj = show_pessoa($codigo);
}

<<<<<<< HEAD
   include 'header.php';
 

   ?>
=======


   include 'header.php' 

?>
>>>>>>> retiradocadastroconsumidor
=======
<?php include 'header.php' ?>
>>>>>>> main

<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1>Cadastro Produtor</h1>
                    <p>preencha abaixo as informações para cadastro</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact form start -->
<section class="contact-form">
    <div class="container">
        <div class="row">
<<<<<<< HEAD


<<<<<<< HEAD
            <form action="acao_pessoa" id="contact-form" method="post" enctype="multipart/form-data">
=======
            <form action="acao_pessoa" id="contact-form" method="post">
>>>>>>> retiradocadastroconsumidor
                <div class="col-md-12 col-sm-12">
                    <div class="block">
                        <div class="form-group">

                            <input readonly type="hidden" class="form-control" placeholder="Código não editável" name="codigo" id="codigo" value="<?php if ($acao == "editar") echo $obj->getCodigo();
                                                                                                                                                    else echo 0;    ?>">
                        </div>


                        <div class="form-group">
<<<<<<< HEAD
                            <input type="text" name="nome" class="form-control" placeholder="Nome completo" required>
=======
                            <input type="text" name="nome" class="form-control" placeholder="Nome completo">
>>>>>>> retiradocadastroconsumidor

                        </div>

                        <div class="form-group">
                            <input name="email" type="text" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input name="telefone" type="text" class="form-control" placeholder="Telefone">
=======
            <form id="contact-form">
                <div class="col-md-12 col-sm-12">
                    <div class="block">
                        <div class="form-group">
                            <input name="user_name" type="text" class="form-control" placeholder="Nome completo">
                        </div>
                        <div class="form-group">
                            <input name="user_email" type="text" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input name="user_fone" type="text" class="form-control" placeholder="Telefone">
>>>>>>> main
                        </div>



<<<<<<< HEAD
                        <div class="form-group">
                            <input name="endereco" type="text" class="form-control" placeholder="Informe seu endereço">
                        </div>
                    
                        <div class="form-group" >
                            
                        <select class="form-control"  name="id_estado" aria-label=".form-select-lg example">
                        
                        <option selected >Selecione seu estado</option>

                            <option value="AC"> Acre

<<<<<<< HEAD
                            </option>

                            <option value="AL">Alagoas
=======

>>>>>>> retiradocadastroconsumidor

                        <div class="form-group" >

<<<<<<< HEAD
                            </option>
                            <option value="AP">
                                Amapá
=======
>>>>>>> retiradocadastroconsumidor

                        <select class="form-control"  name="id_estado" aria-label=".form-select-lg example">
                        
                        <option selected >Selecione seu estado</option>

<<<<<<< HEAD
                            </option>
                            <option value="AM">
                                Amazonas

                            </option>

                            <option value="BA">
                                Bahia

                            </option>

                            <option value="CE">
                                Ceará

                            </option>

                            <option value="ES">
                                Espírito Santo


                            </option>
                            <option value="GO">
                                Goiás
                            </option>


                            <option value="MA">
                                Maranhão

                            </option>

                            <option value="MT">
                                Mato Grosso


                            </option>
                            <option value="MS">
                                Mato Grosso do Sul

                            </option>

                            <option value="MG">
                                Minas Gerais


                            </option>
                            <option value="PA">
                                Pará

                            </option>
                            <option value="PB">
                                Paraíba

                            </option>

                            <option value="PR">
                                Paraná

                            </option>

                            <option value="PE">
                                Pernambuco

                            </option>

                            <option value="PI">
                                Piauí
=======
                            <option value="AC"> Acre

                            </option>

                            <option value="AL">Alagoas
>>>>>>> retiradocadastroconsumidor

                            </option>

<<<<<<< HEAD
                            <option value="RJ">
                                Rio de Janeiro

                            </option>

                            <option value="RN">
                                Rio Grande do Norte


                            </option>
                            <option value="RS">
                                Rio Grande do Sul

                            </option>

                            <option value="RO">
                                Rondônia


                            <option value="RR">
                                Roraima


                            </option>
                            <option value="SC">
                                Santa Catarina

                            </option>

                            <option value="SP">
                                São Paulo

                            </option>

                            <option value="SE">
                                Sergipe

                            </option>

                            <option value="TO">
                                Tocantins


                            </option>
                            <option value="DF">
                                Distrito Federal
                            </option>
                        </select>
                    </div>




<!-- -->
                    <div class="form-group">
                        <input name="nascimento" type="text" class="form-control" placeholder="Informe sua data de nascimento">
                    </div>
                    

                    <div class="form-group">
                    <p>
                <label for="Selecione o arquivo"></label>  </p>

                    <input type="file" name="imagem" class="form-control"  accept="image/*">    
                
                </div>

                

                    <div class="form-group">
                        <input name="cidade" type="text" class="form-control" placeholder="cidade">
                    </div>




                    <div class="form-group">
                        <input name="usuario" type="user" class="form-control" placeholder="Informe um nome de usuário">
                    </div>


                    <div class="form-group">
                        <input name="senha" type="password" class="form-control" placeholder="Informe uma senha">
                    </div>
 
                    <input type="submit" class="btn btn-sm btn-secondary"  name="acao" id="acao" value="salvar"> 

=======
                            </option>
                            <option value="AP">
                                Amapá


                            </option>
                            <option value="AM">
                                Amazonas

                            </option>

                            <option value="BA">
                                Bahia

                            </option>

                            <option value="CE">
                                Ceará

                            </option>

                            <option value="ES">
                                Espírito Santo


                            </option>
                            <option value="GO">
                                Goiás
                            </option>


                            <option value="MA">
                                Maranhão

                            </option>

                            <option value="MT">
                                Mato Grosso


                            </option>
                            <option value="MS">
                                Mato Grosso do Sul

                            </option>

                            <option value="MG">
                                Minas Gerais


                            </option>
                            <option value="PA">
                                Pará

                            </option>
                            <option value="PB">
                                Paraíba

                            </option>

                            <option value="PR">
                                Paraná

                            </option>

                            <option value="PE">
                                Pernambuco

                            </option>

                            <option value="PI">
                                Piauí

                            </option>

                            <option value="RJ">
                                Rio de Janeiro

                            </option>

                            <option value="RN">
                                Rio Grande do Norte


                            </option>
                            <option value="RS">
                                Rio Grande do Sul

                            </option>

                            <option value="RO">
                                Rondônia


                            <option value="RR">
                                Roraima


                            </option>
                            <option value="SC">
                                Santa Catarina

                            </option>

                            <option value="SP">
                                São Paulo

                            </option>

                            <option value="SE">
                                Sergipe

                            </option>

                            <option value="TO">
                                Tocantins


                            </option>
                            <option value="DF">
                                Distrito Federal
                            </option>
                        </select>


                    </div>





                    <div class="form-group">
                        <input name="nascimento" type="text" class="form-control" placeholder="Informe sua data de nascimento">
                    </div>


                    <div class="form-group">
                        <input name="cidade" type="text" class="form-control" placeholder="cidade">
                    </div>




                    <div class="form-group">
                        <input name="usuario" type="user" class="form-control" placeholder="Informe um nome de usuário">
                    </div>


                    <div class="form-group">
                        <input name="senha" type="password" class="form-control" placeholder="Informe uma senha">
                    </div>



                    <br><button class="btn btn-sm btn-secondary" type="submit" name="acao" id="acao" value="salvar">Salvar</button>

>>>>>>> retiradocadastroconsumidor
                </div>
        </div>

    </div>
    <div class="error" id="error">Desculpe, Cadastro não salvo.!</div>
    <div class="success" id="success">Cadastro Salvo com sucesso</div>
    </form>

    </div>

    </div>
</section>


<?php
<<<<<<< HEAD
 include 'footer.php';
=======
 // include 'footer.php' 
>>>>>>> retiradocadastroconsumidor
?>



<!-- 
    Essential Scripts
    =====================================-->

<<<<<<< HEAD
    <script src="js/script.js"></script>
=======
>>>>>>> retiradocadastroconsumidor

<!-- Main jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap 3.1 -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick Carousel -->
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- filter -->
<script src="plugins/shuffle/shuffle.min.js"></script>
<script src="plugins/SyoTimer/jquery.syotimer.min.js"></script>

<!-- Form Validator -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/map.js"></script>

<<<<<<< HEAD
=======
<script src="js/script.js"></script>
>>>>>>> retiradocadastroconsumidor
=======

                        <div class="form-group">
                            <input name="user_endereco" type="text" class="form-control" placeholder="Informe seu endereço">
                        </div>

                        <div class="form-group">
                            <input name="user_cidade" type="text" class="form-control" placeholder="cidade">
                        </div>


                        <div class="form-group">

                            <label class="form-label" for="customFile">Envia sua foto</label>
                            <input type="file" class="form-control" id="customFile" />


                        </div>


                        <div class="form-group">
                            <input name="user_senha" type="password" class="form-control" placeholder="Informe uma senha">
                        </div>


                        <div class="form-group">
                            <input name="user_senha2" type="password" class="form-control" placeholder="Confirme sua senha">
                        </div>


                        <button class="btn btn-default" type="submit">Cadastrar</button>

                                            </div>
                </div>
              
                </div>
                <div class="error" id="error">Sorry Msg dose not sent</div>
                <div class="success" id="success">Message Sent</div>
            </form>
        </div>

    </div>
</section>


<?php include 'footer.php' ?>
>>>>>>> main
