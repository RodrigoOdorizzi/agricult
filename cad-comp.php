<?php include 'header.php' ?>

<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1>Cadastro comprador</h1>
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
                        </div>




                        <div class="form-group">
                            <input name="user_endereco" type="text" class="form-control" placeholder="Informe seu endereço">
                        </div>

                        <div class="form-group">
                            <input name="user_cidade" type="text" class="form-control" placeholder="cidade">
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