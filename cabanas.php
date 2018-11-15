<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'cabanas');

 	$metas = array(
		'titulo' 		=> $txt[SECCION.'_metas'][0],
		'descripcion' 	=> $txt[SECCION.'_metas'][1],
		'img' 			=> '',
		'slider' 		=> '',
	);

	include('header.php');

?>

	<article>
		<?php array_push($js, 'slider-principal');
			$slider_principal = array(
	        array(
	        	'slider',
	        	'slider'
	        	),
	      );
		?>
	<?php include('templates/reservas-fixed.php'); ?>
		<div class="slider-principal">
			<div class="absolute go-down"><a href="#home__cabañas"><i class="fa fa-chevron-down" aria-hidden="true"></i></a></div>
			<div class="owl-carousel">
	      		<div class="item-1">
	       		 <img class="img-responsive slider-principal__imagen" src="images/slider-cabanas/1-1920-x1.jpg">
			      <div class="slider-principal__contenido">
			      	<div class="container-fluid">
			      		<div class="row">  
				      		<div class="col-xs-12">
				      			<div class="slider-principal__texto">
				      				<h1 class="h1 color-1 text-left"><?=$txt[SECCION.'_slider-main'][0] ?></h1>
				      			</div>
				      		</div>
				      	</div>
			      	</div>
			      </div>
			    </div>
	      		<div class="item-1">
	       		 <img class="img-responsive slider-principal__imagen" src="images/slider-cabanas/2-1920-x1.jpg">
			      <div class="slider-principal__contenido">
			      	<div class="container-fluid">
			      		<div class="row">  
				      		<div class="col-xs-12">
				      			<div class="slider-principal__texto">
				      				<h1 class="h1 color-1 text-right"><?=$txt[SECCION.'_slider-main'][0] ?></h1>
				      			</div>
				      		</div>
				      	</div>
			      	</div>
			      </div>
			    </div>
	      		<div class="item-2">
	       		 <img class="img-responsive slider-principal__imagen" src="images/slider-cabanas/3-1920-x1.jpg">
			      <div class="slider-principal__contenido">
			      	<div class="container-fluid">
			      		<div class="row">  
				      		<div class="col-xs-12">
				      			<div class="slider-principal__texto">
				      				<h1 class="h1 color-1 text-left"><?=$txt[SECCION.'_slider-main'][0] ?></h1>
				      			</div>
				      		</div>
				      	</div>
			      	</div>
			      </div>
			    </div>
			</div>
		</div>
	</article>
	<section id="cabañas__detalle" class="cabañas__detalle bg-1 banda">
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
	<section class="cabañas__cabañas bg-1">
		<div class="cabañas__cabañas__datos bg-2">
			<div class="cabañas__cabañas__datos__container">
				<div class="col-sm-12">
					<h2 class="text-left"><?=$txt[SECCION.'_cabanas'][0] ?></h2>
					<p class="paragraph-4"><?=$txt[SECCION.'_cabanas'][1] ?></p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="cabañas__cabañas__slider">
		<?php define("SLIDER2", "definido"); ?>
			<div class="slider-2">
				<div class="owl-carousel">
		      		<div class="item-1">
		       		 <img class="img-responsive slider-2__imagen" src="images/cabanas.jpg">
				    </div>
		      		<div class="item-2">
		       		 <img class="img-responsive slider-2__imagen" src="images/cabanas.jpg">
				    </div>
		      		<div class="item-3">
		       		 <img class="img-responsive slider-2__imagen" src="images/cabanas.jpg">
				    </div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</section>		

	<section class="home__cuentan-con banda">
		<div class="container">
			<div class="text-center">
				<h3 class="h4 color-1"><?=$txt[SECCION.'_cuentan-con'][0] ?></h3>
				<div class="icons-container">
					<i class="icn icn-cuentan-con-1">
						<div class="cuentan-con__detalle anim-suave"><i class="fa fa-caret-up"></i><?=$txt[SECCION.'_cuentan-con'][1] ?></div>
					</i>
					<i class="icn icn-cuentan-con-2">
						<div class="cuentan-con__detalle anim-suave"><i class="fa fa-caret-up"></i><?=$txt[SECCION.'_cuentan-con'][2] ?></div>
					</i>
					<i class="icn icn-cuentan-con-3">
						<div class="cuentan-con__detalle anim-suave"><i class="fa fa-caret-up"></i><?=$txt[SECCION.'_cuentan-con'][3] ?></div>
					</i>
					<i class="icn icn-cuentan-con-4">
						<div class="cuentan-con__detalle anim-suave"><i class="fa fa-caret-up"></i><?=$txt[SECCION.'_cuentan-con'][4] ?></div>
					</i>
					<i class="icn icn-cuentan-con-5">
						<div class="cuentan-con__detalle anim-suave"><i class="fa fa-caret-up"></i><?=$txt[SECCION.'_cuentan-con'][5] ?></div>
					</i>
					<i class="icn icn-cuentan-con-6">
						<div class="cuentan-con__detalle anim-suave"><i class="fa fa-caret-up"></i><?=$txt[SECCION.'_cuentan-con'][6] ?></div>
					</i>
					<i class="icn icn-cuentan-con-7">
						<div class="cuentan-con__detalle anim-suave"><i class="fa fa-caret-up"></i><?=$txt[SECCION.'_cuentan-con'][7] ?></div>
					</i>
				</div>
			</div>
		</div>
	</section>

	<?php array_push($js, 'tabs') ?>
		<section class="tab-seccion">
			<div class="hidden-xs">
				<nav class="tab-nav-container slider-cabanas__hash-selector bg-3">
					<ul class="unstyled-list">
						<li class="tab-nav"><a href="#cabana1"><?=$txt[SECCION.'_slider'][0] ?> 1</a></li>
						<li><a class="tab-nav" href="#cabana2"><?=$txt[SECCION.'_slider'][0] ?> 2</a></li>
						<li><a class="tab-nav" href="#cabana3"><?=$txt[SECCION.'_slider'][0] ?> 3</a></li>
						<li><a class="tab-nav" href="#cabana4"><?=$txt[SECCION.'_slider'][0] ?> 4</a></li>
						<li><a class="tab-nav" href="#cabana5"><?=$txt[SECCION.'_slider'][0] ?> 5</a></li>
						<li><a class="tab-nav" href="#cabana6"><?=$txt[SECCION.'_slider'][0] ?> 6</a></li>
					</ul>
				</nav>
			</div>
			<div class="tab-container">
				<div class="">
					<div class="slider-cabanas">
						<div class="tab-content" id="cabana1">
							<div class="container visible-xs">
								<div class="row">
									<div class="col-xs-12">
										<h2 class="text-center"><?=$txt[SECCION.'_slider'][0] ?> 1</h2>
									</div>
								</div>
							</div>
							<div class="owl-carousel">
					      		<div class="item-1 cabana1" data-hash="cabana1">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-2 cabana2" data-hash="cabana2">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-3 cabana3" data-hash="cabana3">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-1 cabana4" data-hash="cabana4">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-2 cabana5" data-hash="cabana5">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-3 cabana6" data-hash="cabana6">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
							</div>	
							<div class="clearfix"></div>
						</div>
						<div class="tab-content" id="cabana2">
							<div class="container visible-xs">
								<div class="row">
									<div class="col-xs-12">
										<h2 class="text-center"><?=$txt[SECCION.'_slider'][0] ?> 2</h2>
									</div>
								</div>
							</div>
							<div class="owl-carousel">
					      		<div class="item-1 cabana1" data-hash="cabana1">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-2 cabana2" data-hash="cabana2">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-3 cabana3" data-hash="cabana3">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-1 cabana4" data-hash="cabana4">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-2 cabana5" data-hash="cabana5">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-3 cabana6" data-hash="cabana6">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
							</div>	
							<div class="clearfix"></div>
						</div>
						<div class="tab-content" id="cabana3">
							<div class="container visible-xs">
								<div class="row">
									<div class="col-xs-12">
										<h2 class="text-center"><?=$txt[SECCION.'_slider'][0] ?> 3</h2>
									</div>
								</div>
							</div>
							<div class="owl-carousel">
					      		<div class="item-1 cabana1" data-hash="cabana1">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-2 cabana2" data-hash="cabana2">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-3 cabana3" data-hash="cabana3">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-1 cabana4" data-hash="cabana4">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-2 cabana5" data-hash="cabana5">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-3 cabana6" data-hash="cabana6">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
							</div>	
							<div class="clearfix"></div>
						</div>
						<div class="tab-content" id="cabana4">
							<div class="container visible-xs">
								<div class="row">
									<div class="col-xs-12">
										<h2 class="text-center"><?=$txt[SECCION.'_slider'][0] ?> 4</h2>
									</div>
								</div>
							</div>
							<div class="owl-carousel">
					      		<div class="item-1 cabana1" data-hash="cabana1">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-2 cabana2" data-hash="cabana2">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-3 cabana3" data-hash="cabana3">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-1 cabana4" data-hash="cabana4">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-2 cabana5" data-hash="cabana5">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-3 cabana6" data-hash="cabana6">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
							</div>	
							<div class="clearfix"></div>
						</div>
						<div class="tab-content" id="cabana5">
							<div class="container visible-xs">
								<div class="row">
									<div class="col-xs-12">
										<h2 class="text-center"><?=$txt[SECCION.'_slider'][0] ?> 5</h2>
									</div>
								</div>
							</div>
							<div class="owl-carousel">
					      		<div class="item-1 cabana1" data-hash="cabana1">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-2 cabana2" data-hash="cabana2">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-3 cabana3" data-hash="cabana3">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-1 cabana4" data-hash="cabana4">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-2 cabana5" data-hash="cabana5">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-3 cabana6" data-hash="cabana6">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
							</div>	
							<div class="clearfix"></div>
						</div>
						<div class="tab-content" id="cabana6">
							<div class="container visible-xs">
								<div class="row">
									<div class="col-xs-12">
										<h2 class="text-center"><?=$txt[SECCION.'_slider'][0] ?> 6</h2>
									</div>
								</div>
							</div>
							<div class="owl-carousel">
					      		<div class="item-1 cabana1" data-hash="cabana1">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-2 cabana2" data-hash="cabana2">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-3 cabana3" data-hash="cabana3">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-1 cabana4" data-hash="cabana4">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-2 cabana5" data-hash="cabana5">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
					      		<div class="item-3 cabana6" data-hash="cabana6">
					       		 <img class="slider-cabanas__imagen" src="images/cabana-1.jpg">
							    </div>
							</div>	
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</section>
<?php include('footer.php'); ?>