<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'ofertas');

 	$metas = array(
		'titulo' 		=> $txt[SECCION.'_metas'][0],
		'descripcion' 	=> $txt[SECCION.'_metas'][1],
		'img' 			=> '',
		'slider' 		=> $txt[SECCION.'_metas'][2],
	);

	include('header.php');

?>
	<?php include('templates/reservas-fixed.php'); ?>

	<section class="bg-1 banda">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<h2 class="text-center"><?=$txt[SECCION.'_descrip'][0] ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1">
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
				<div class="col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1">
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
				<div class="col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1">
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
				<div class="col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1">
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

<?php include('footer.php'); ?>