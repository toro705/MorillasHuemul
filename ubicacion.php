<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'ubicacion');

 	$metas = array(
		'titulo' 		=> $txt[SECCION.'_metas'][0],
		'descripcion' 	=> $txt[SECCION.'_metas'][1],
		'img' 			=> '',
		'slider' 		=> $txt[SECCION.'_metas'][2],
	);

	include('header.php');

?>
	<?php include('templates/reservas-fixed.php'); ?>

	<section id="ubicacion__detalle" class="descanso__detalle bg-1 banda">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<h2 class="text-center"><?=$txt[SECCION.'_descrip'][0] ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
					<p class="paragraph-1 text-center"><?=$txt[SECCION.'_descrip'][1] ?></p>
				</div>
			</div>
		</div>
	</section>	
	<section id="map">
	</section>
	<section id="ubicacion__slider" class="bg-1">
		<div class="ubicacion__slider__slider">
			<div class="owl-carousel">
	      		<div class="item-1">
	       		 <img class="img-responsive slider-2__imagen" src="images/slider-ubicacion/1.png">
			    </div>
	      		<div class="item-2">
	       		 <img class="img-responsive slider-2__imagen" src="images/slider-ubicacion/2.png">
			    </div>
	      		<div class="item-3">
	       		 <img class="img-responsive slider-2__imagen" src="images/slider-ubicacion/3.png">
			    </div>
			</div>
		</div>
	</section>
<?php include('footer.php'); ?>