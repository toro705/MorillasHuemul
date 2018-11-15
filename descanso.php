<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'descanso');

 	$metas = array(
		'titulo' 		=> $txt[SECCION.'_metas'][0],
		'descripcion' 	=> $txt[SECCION.'_metas'][1],
		'img' 			=> '',
		'slider' 	=> $txt[SECCION.'_metas'][2],
	);

	include('header.php');

?>
<?php include('templates/reservas-fixed.php'); ?>

	<section id="descanso__detalle" class="descanso__detalle bg-1 banda">
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
	<section class="descanso__actividades bg-1">
		<div class="descanso__actividades__datos bg-2">
			<div class="descanso__actividades__datos__container">
				<div class="col-sm-12">
					<h2 class="text-left"><?=$txt[SECCION.'_actividades'][0] ?></h2>
						<p class="paragraph-4"><?=$txt[SECCION.'_actividades'][1] ?>
						</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="descanso__actividades__slider">
		<?php define("SLIDER2", "definido"); ?>
			<div class="slider-2">
				<div class="owl-carousel">
		      		<div class="item-1">
		       		 <img class="img-responsive slider-2__imagen" src="images/actividad.jpg">
				    </div>
		      		<div class="item-2">
		       		 <img class="img-responsive slider-2__imagen" src="images/actividad2.jpg">
				    </div>
		      		<div class="item-3">
		       		 <img class="img-responsive slider-2__imagen" src="images/actividad3.jpg">
				    </div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</section>		

<?php include('footer.php'); ?>