<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'home');

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
	       		 <img class="img-responsive slider-principal__imagen" src="images/slider-principal/1-1920-x1.jpg">
			      <div class="slider-principal__contenido">
			      	<div class="container-fluid">
			      		<div class="row">  
				      		<div class="col-xs-12">
				      			<div class="slider-principal__texto">
				      				<h1 class="h1 color-1 text-left"><?=$txt['slider_home'][0] ?></h1>
				      			</div>
				      		</div>
				      	</div>
			      	</div>
			      </div>
			    </div>
	      		<div class="item-2">
	       		 <img class="img-responsive slider-principal__imagen" src="images/slider-principal/2-1920-x1.jpg">
			      <div class="slider-principal__contenido">
			      	<div class="container-fluid">
			      		<div class="row">  
				      		<div class="col-xs-12">
				      			<div class="slider-principal__texto">
				      				<h1 class="h1 color-1 text-right"><?=$txt['slider_home'][1] ?></h1>
				      			</div>
				      		</div>
				      	</div>
			      	</div>
			      </div>
			    </div>
	      		<div class="item-3">
	       		 <img class="img-responsive slider-principal__imagen" src="images/slider-principal/3-1920-x1.jpg">
			      <div class="slider-principal__contenido">
			      	<div class="container-fluid">
			      		<div class="row">  
				      		<div class="col-xs-12">
				      			<div class="slider-principal__texto">
				      				<h1 class="h1 color-1 text-left"><?=$txt['slider_home'][2] ?></h1>
				      			</div>
				      		</div>
				      	</div>
			      	</div>
			      </div>
			    </div>
			</div>
		</div>
	</article>
	<section id="home__cabañas" class="home__cabañas bg-1 banda">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<h2 class="text-center"><?=$txt[SECCION][0] ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
					<p class="paragraph-1 text-center"><?=$txt[SECCION][1] ?></p>
				</div>
			</div>
		</div>
	</section>		
	<section class="home__tripadvisor banda bg-2">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
						<i class="fa fa-tripadvisor"></i>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
					<h4 class="text-center"><?=$txt[SECCION.'_advisor'][0] ?></h4>	
						<hr>
					<p class="paragraph-2">
						<b>Martinez</b>
						<br> Buenos Aires, Argentina
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="home__ofertas-destacadas banda bg-1">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3">
					<h5 class="text-left"><?=$txt['gral'][1] ?></h5>
					<hr>
					<a href="<?=url('ofertas')?>" class="btn btn-celeste"><?=$txt['gral'][2] ?></a>
				</div>
				<div class="clearfix visible-xs"></div>
				<div class="col-sm-12 col-md-9">
					<div class="oferta">
						<div class="oferta__img"><a href="<?=url('reservas')?>"><img src="images/oferta.jpg" alt="oferta" class="img-responsive"></a></div>
						<div class="oferta__detalle">
							<h4><a href="<?=url('reservas')?>"><?=$txt[SECCION.'_ofertas'][0] ?></a></h4>
							<p class="paragraph-3"><?=$txt[SECCION.'_ofertas'][1] ?></p>
						</div>
						<div class="oferta__valor">
							<div class="oferta__valor__valor text-center">
								<p class="valor">$890</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="oferta__reservar anim-suave"><a href="<?=url('reservas')?>"><i class="fa fa-caret-up"></i> <?=$txt[SECCION.'_ofertas'][2] ?></a></div>
					</div>
				</div>		
			</div>
		</div>
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
	<section class="home__ubicacion bg-1">
		<div class="home__ubicacion__datos bg-4">
			<div class="home__ubicacion__datos__container">
				<div class="col-sm-12">
					<div class="footer-title"><i class="fa fa-map-marker"></i><b><?=$txt['pie'][0] ?></b></div>
					<div class="footer-cont">
						<p><?= Empresa::$direccion ?></p>
						<p><?= Empresa::$CP ?> <?= Empresa::$localidad ?>, <?= Empresa::$pais ?></p>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="footer-title"><i class="fa fa-envelope"></i><b><?=$txt['pie'][1] ?></b></div>
					<div class="footer-cont">
						<a href="mailto:<?= Empresa::$email ?>"><?= Empresa::$email ?></a>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="footer-title"><i class="fa fa-user"></i><b><?=$txt['pie'][2] ?></b></div>
					<div class="footer-cont redes-circle">
	                    <a target="_blank" href="<?= Empresa::$redes['fb']?>"><span class="anim-suave"><i class="fa fa-facebook" aria-hidden="true"></i></span></a>
	                    <a target="_blank" href="<?= Empresa::$redes['tw']?>"><span class="anim-suave"><i class="fa fa-twitter" aria-hidden="true"></i></span></a>
	                    <a target="_blank" href="<?= Empresa::$redes['gp']?>"><span class="anim-suave"><i class="fa fa-google-plus" aria-hidden="true"></i></span></a>
	                    <a target="_blank" href="<?= Empresa::$redes['in']?>"><span class="anim-suave"><i class="fa fa-instagram" aria-hidden="true"></i></span></a>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div id="map" class="home__ubicacion__mapa">
			
		</div>
		<div class="clearfix"></div>
	</section>
<?php include('footer.php'); ?>