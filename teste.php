<?php 

?>


<html>
    <head>
    <meta charset="utf-8">
    <title>MusicDot</title>
  </head>
  <body>
 

  <form method="POST" action="teste1" enctype="multipart/form-data">
<p>
  <label for="Selecione o arquivo"></label>  </p>
  <input type="file" name="imagem"  >
  <input type="hidden" name="teste" value="<?php $novoNomeArquivo?>">
  
  <input type="submit" class="btn btn-sm btn-secondary"  name="acao" id="acao" value="salvar"> 


  </form>
  </body>
</html>