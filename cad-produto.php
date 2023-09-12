<?php include 'header.php' ?>

<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1>Cadastro de produtos</h1>
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



            <form action="acaoProduto" id="contact-form" method="post">
                <div class="col-md-12 col-sm-12">
                    <div class="block">
                        <div class="form-group">

                            <input readonly type="hidden" class="form-control" placeholder="Código não editável" name="codigo" id="codigo" value="<?php if ($acao == "editar") echo $obj->getCodigo();
                                                                                                                                                    else echo 0;    ?>">
                        </div>


                        <div class="form-group">
                            <input type="text" name="nome" class="form-control" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <input name="preco" type="text" class="form-control" placeholder="Preço">
                        </div>
                        <div class="form-group">
                         
                        
                        
                        <input name="cod_vendedor" type="hidden" class="form-control" placeholder="Código do vendedor" value=<?php echo $_SESSION['codigo'] ?> >
                        </div>




                        <div class="form-group">
                            <select class="form-control" name="categoria" aria-label=".form-select-lg example">

                                <option selected>Selecione a Categoria</option>

                                <option value="Carne"> Carnes

                                </option>
                                <option value="Fruta"> Frutas

                                </option>


                                <option value="Hortalica"> Hortaliças

                                </option>

                                <option value="Legume"> Legumes

                                </option>


                                <option value="Outro"> Outros

                                </option>
                            </select>
                        </div>







                        <br><button class="btn btn-sm btn-secondary" type="submit" name="acao" id="acao" value="salvar">Salvar</button>

                    </div>
                    </div>
        <div class="error" id="error">Sorry Msg dose not sent</div>
        <div class="success" id="success">Message Sent</div>
        </form>
    </div>

    </div>
</section>


<?php include 'footer.php' ?>