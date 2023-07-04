 <?php

	require __DIR__ . '/vendor/autoload.php';
	require __DIR__ . '//header.php';

	
	
//quantidada de noticias mostrada por pagina
$item_por_pagina=2;
//quantidade total de itens

$pagina=intval($_GET['pagina']);
$total_noticia=0; 
//quantidade de paginas
 
 

	use \App\Feed\Blog;
	$obFeed = new Blog;

	//variavel data
	$lastUpdate = date('d/m/y á\s H:i:s', strtotime($obFeed->getLastUpdate()));
	//variavel que guarda posicao do item
	$items = '';
	
	//itera cada item do feed
	   foreach($obFeed->getItems() as $item){
	   $total_noticia++; 

		$image= $item->enclosure->attributes()->url;

		$date = date('d/m/y á\s H:i:s', strtotime($item->pubDate));
		$dc = $item->children("http//purl.org/dc/elementos/1.1/");
		$link=$item->link;

		
		$items.='

		<div class="col-md-6 " >
		<div class="post">
			<div class="post-thumb" >
				<a href="blog-single.html">
					<img class="img-responsive" src="'.$image.' " alt=" ">
				</a>
			</div>
			<h4 class="post-title"><a href=""> '.$item->title.'</a></h4>
			<div class="post-meta">
				<ul>
					<li>
						<i class="ion-calendar"></i> '.$date. '
					</li>
				 		</ul>
			</div>
			<div class="post-content  " >
				<p> '.$item->description.'</p>
				<a href="'.$item->link.'" target=”_blank” rel=”noopener noreferer” class="btn btn-main">Saiba mais</a>
			</div>
		</div>
	</div>';	  
         }
		?>
 
<?php

$total_pagina= ceil($total_noticia / $item_por_pagina) ;


 echo $pagina;
?>

 <section class="page-title bg-2">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-12">
 				<div class="block">
 					<h1>Noticias</h1>
 					<p> Confira as novidades na área agrícola</p>
 					<p class="text-muted mb-4"> atualizado em <?= $lastUpdate ?></p>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>
 
 <div class="page-wrapper">
 	<div class="container">
 		<div class="row">
		 <?=$items?> 			
 		</div>
 		<div class="text-center">
 			<ul class="pagination post-pagination">
 				<li><a href="noticia.php?pagina=0">Prev</a>
 				</li>
 			
			<?php 
			for ($x=0;$x > $total_pagina;$x++){ 
				
				
				$estilo = "";
				if($pagina == $x) 
					$estilo = "class=\"active\"";
				?>
			 
				<li<?php echo $estilo; ?> ><a href="noticia.php?pagina=<?php echo $i;?>">echo $x+1; ?></a>
 				</li> 
				<?php } ?>

 				<li><a href="noticia.php?pagina=<?php echo $total_pagina-1;?>">Next</a>
 				</li>
 			</ul>
 		</div>						 
 	</div>
 </div>

 
 <div class="col-md-12">
 	<?php
		include 'footer.php'
		?>
 </div>
 </body>
 </html>