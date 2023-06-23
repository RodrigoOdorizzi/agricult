 <?php

	require __DIR__ . '/vendor/autoload.php';
	require __DIR__ . '//header.php';

	// include 'header.php';

	use \App\Feed\Blog;
	$obFeed = new Blog;

	//variavel data
	$lastUpdate = date('d/m/y á\s H:i:s', strtotime($obFeed->getLastUpdate()));
	//variavel que guarda posicao do item
	$items = '';
	
	   foreach($obFeed->getItems() as $item){
	 
	 

		$image= $item->enclosure->attributes()->url;

		$date = date('d/m/y á\s H:i:s', strtotime($item->pubDate));
		$dc = $item->children("http//purl.org/dc/elementos/1.1/");
		$link=$item->link;


		$items.='


		<div class="col-md-6 " style="background-color: rgb(187, 34, 65);">
		<div class="post">
			<div class="post-thumb">
				<a href="blog-single.html">
					<img class="img-responsive" src="'.$image.' " alt=" ">
				</a>
			</div>
			<h3 class="post-title"><a href=""> '.$item->title.'</a></h3>
			<div class="post-meta">
				<ul>
					<li>
						<i class="ion-calendar"></i> '.$date. '
					</li>
				 
				

				</ul>
			</div>
			<div class="post-content h-100">
				<p> '.$item->description.'</p>
				<a href="'.$item->link.'" class="btn btn-main">Saiba mais</a>
			</div>
		</div>
	</div>';

	  
         }
	  


 
		?>



 <section class="page-title bg-2">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-12">
 				<div class="block">
 					<h1><?=$obFeed->getTitle()?></h1>
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
 				<li><a href="#">Prev</a>
 				</li>
 				<li class="active"><a href="#">1</a>
 				</li>
 				<li><a href="#">2</a>
 				</li>
 				<li><a href="#">3</a>
 				</li>
 				<li><a href="#">4</a>
 				</li>
 				<li><a href="#">5</a>
 				</li>
 				<li><a href="#">Next</a>
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