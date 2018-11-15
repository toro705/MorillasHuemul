<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página	
 	define('SECCION', 'reservas');

 	$metas = array(
		'titulo' 		=> $txt[SECCION.'_metas'][0],
		'descripcion' 	=> $txt[SECCION.'_metas'][1],
		'img' 			=> '',
		'slider' 		=> $txt[SECCION.'_metas'][2],
	);

	include('header.php');

?>

	<section id="contacto" class="banda bg-1">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-left">
					<h2><?=$txt[SECCION][0] ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9 col-lg-8">
						<?php include('includes/forms/reservas.php'); ?>
						<?= $form_reservas->mensaje_estado ?>
						<?php if ($form_reservas->estado != 'ok') { ?>
						<form id="contact-form" class="form-horizontal" role="form" method="post">
						  <div class="col-sm-6">
						  	<div class="row">
							  	<div class="text-left">
									<label for="llegada" class="llegada-label calendar form-group text-left">
							    		<span><?=$txt[SECCION][2] ?></span>
									 	<input type="text" class="form-control datepicker " id="llegada" placeholder="" data-date-format="dd/mm/yyyy"> 
									</label>
							  	</div> 
							</div>							  	
						  </div>
						  <div class="col-sm-6 visible-xs">
						  	<div class="row">
							  	<div class="text-left">
									<label for="salida" class="salida-label calendar form-group text-left">
									    <span><?=$txt[SECCION][3] ?></span>
										<input type="text" class="form-control datepicker" id="salida" placeholder="" data-date-format="dd/mm/yyyy">
									</label>
							  	</div>
						  	</div>
						  </div>							  

						  <div class="col-sm-6">
							  <div class="row">
							  	<div class="text-left">
									<label for="noches" class="adultos-label select form-group text-left">
							    		<span><?=$txt[SECCION][4] ?></span>
										<select name="noches" id="adultos" placeholder="" class="form-control">
											<option value="" disabled></option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</label>
							  	</div>
						  	  </div>
		   			  	  </div>
						  <div class="col-sm-6 hidden-xs">
						  	<div class="row">
							  	<div class="text-left">
									<label for="salida" class="salida-label calendar form-group text-left">
									    <span><?=$txt[SECCION][3] ?></span>
										<input type="text" class="form-control datepicker" id="salida" placeholder="" data-date-format="dd/mm/yyyy">
									</label>
							  	</div>
						  	</div>
						  </div>		   			  	  
						  <div class="col-sm-6">
							  <div class="row">

							  	<div class="text-left">
									<label for="cantidad" class="niños-label select form-group text-left">
							    		<span><?=$txt[SECCION][5] ?></span>
										<select name="cantidad" id="adultos" placeholder="" class="form-control">
											<option value="" disabled></option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</label>
							  	</div>
							  	
							  </div>
						  </div>
	   				  	  <div class="clearfix">
	   				  	  </div>
						  <div class="form-group text-left">
							    <label for="nombre" class="col-sm-3"><?=$txt[SECCION][6] ?></label>
							    <div class="col-sm-9">
							      <input type="nombre" class="form-control" id="nombre" name="nombre" value="<?= (isset($_POST['nombre'])) ? $_POST['nombre'] : ''; ?>" placeholder="">
							    </div>
						  </div>
						  <div class="form-group text-left">
							    <label for="apelido" class="col-sm-3"><?=$txt[SECCION][7] ?></label>
							    <div class="col-sm-9">
							      <input type="text" class="form-control" id="apellido" name="apellido" value="<?= (isset($_POST['apellido'])) ? $_POST['apellido'] : ''; ?>" placeholder="">
							    </div>
						  </div>
						  <div class="form-group text-left">
							    <label for="email" class="col-sm-3"><?=$txt[SECCION][8] ?></label>
							    <div class="col-sm-9">
							      <input type="email" class="form-control" id="email" name="email" value="<?= (isset($_POST['email'])) ? $_POST['email'] : ''; ?>" placeholder="">
							    </div>
						  </div>
						  <div class="form-group text-left">
							    <label for="provincia" class="col-sm-3"><?=$txt[SECCION][9] ?></label>
							    <div class="col-sm-9">
							      <input type="text" class="form-control" id="provincia" name="provincia" value="<?= (isset($_POST['provincia'])) ? $_POST['provincia'] : ''; ?>" placeholder="">
							    </div>
						  </div>
						  <div class="form-group text-left">
							    <label for="pais" class="col-sm-3"><?=$txt[SECCION][10] ?></label>
							    <div class="col-sm-9">
							      <input type="text" class="form-control" id="pais" name="pais" value="<?= (isset($_POST['pais'])) ? $_POST['pais'] : ''; ?>" placeholder="">
							    </div>
						  </div>
						  <div class="form-group text-left">
							    <label for="comentarios" class="col-sm-3"><?=$txt[SECCION][11] ?></label>
							    <div class="col-sm-9">
									<textarea name="comentarios" id="comentarios" cols="30" rows="5" class="form-control"><?= (isset($_POST['comentarios'])) ? $_POST['comentarios'] : ''; ?></textarea>
							    </div>
						  </div>
						  <div class="form-group text-left">
					            <div class="col-xs-12 col-sm-9 col-sm-offset-3">
									<?php foreach($form_reservas->campos AS $c){
										if($c->name == 'captcha'){
										?>
										<div class="form-group">
											<div class="col-xs-12 text-center">
							                    <div class="grecaptcha" data-sitekey="<?=$c->site_key; ?>" data-theme="light" data-size="normal" style="overflow: hidden; border-radius: 5px; margin: 0 auto; display: inline-block">
													<noscript>
													  	<div style="width: 100%; height: 500px; margin: 0 auto;">
															<iframe src="https://www.google.com/recaptcha/api/fallback?k=<?=$c->site_key; ?>"
															        frameborder="0" scrolling="no"
															        style="width: 100%; height:422px; border-style: none;">
															</iframe>
															<textarea style="width:285px; height:60px;" id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response"></textarea>
													  </div>
													</noscript> 
							                    </div>
							                </div>
						                </div>
						                <?php }
					                } ?>
					            </div>
				            </div>
						  <div class="form-group">
						    <div class="col-sm-9 col-sm-offset-3 text-center">
						      <button type="submit" class="btn btn-azul"><?=$txt[SECCION][12] ?></button>
						    </div>
						  </div>
						</form>
						<?php } ?>							
				</div>
				<div class="col-md-3 col-lg-3 col-lg-offset-1">
					<i class="icn icn-telefono-circle"></i>
					<p class="h2 contacto-texto"><?=$txt[SECCION][13] ?></p>
					<p class="h2 contacto-telefono">(0299) 155 173821</p>
				</div>
			</div>
		</div>
	</section>

<?php include('footer.php'); ?>
