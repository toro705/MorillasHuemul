	</main>
	<footer class="pie relative">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="footer-title"><i class="fa fa-map-marker"></i><b><?=$txt['pie'][0] ?></b></div>
					<div class="footer-cont">
						<p><?= Empresa::$direccion ?></p>
						<p><?= Empresa::$CP ?> <?= Empresa::$localidad ?>, <?= Empresa::$pais ?></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="footer-title"><i class="fa fa-envelope"></i><b><?=$txt['pie'][1] ?></b></div>
					<div class="footer-cont">
						<a href="mailto:<?=ocultarEmail(Empresa::$email) ?>"><?=ocultarEmail(Empresa::$email) ?></a>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="footer-title"><i class="fa fa-user"></i><b><?=$txt['pie'][2] ?></b></div>
					<div class="footer-cont redes-circle text-center">
	                    <a target="_blank" href="<?= Empresa::$redes['fb']?>"><span class="anim-suave"><i class="fa fa-facebook" aria-hidden="true"></i></span></a>
	                    <a target="_blank" href="<?= Empresa::$redes['tw']?>"><span class="anim-suave"><i class="fa fa-twitter" aria-hidden="true"></i></span></a>
	                    <a target="_blank" href="<?= Empresa::$redes['gp']?>"><span class="anim-suave"><i class="fa fa-google-plus" aria-hidden="true"></i></span></a>
	                    <a target="_blank" href="<?= Empresa::$redes['in']?>"><span class="anim-suave"><i class="fa fa-instagram" aria-hidden="true"></i></span></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-left">
						<span>2016 © Las Morillas Huemul - Villa La Angostura</span>
				</div>
				<div class="col-sm-6 text-right">
					<a class="synapsis" href="http://synapsis.com.ar/" target="_blank">Synapsis</a>
				</div>
			</div>		
		</div>
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   <!-- Imágenes responsive -->
    <script>
    
	   	//Defino el nuevo ancho de las imágenes
	      	var anchoVentana = $(window).width();
	      	var anchos = [1920,1200,990,768,490];
	      	var nuevoAncho = 1920;
	      	for (var i=0; i<anchos.length; i++) {
	      		if( anchoVentana<anchos[i] ){
		      		nuevoAncho = anchos[i];
		      	}
	      	}

	      	//Cambio el src de las imágenes
	      	var imagenes = ['.slider-principal__imagen'];
	      	for (var i=0; i<imagenes.length; i++) {
	      		$(imagenes[i]).each(function(){
	       			var src = $(this).attr('src');
	       			$(this).attr('src',src.replace('1920',nuevoAncho));
	      		});
	      	}
    </script>
    <!-- Fin Imágenes responsive -->
<!--Animación de enlaces internos--> 
	<script> 
		$(function() { 
			$('a[href*=#]:not([href=#])').filter(':not([data-toggle])').click(function() { 
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) { 
				var target = $(this.hash); 
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']'); 
				if (target.length) { 
					$('html,body').animate({ 
						scrollTop: target.offset().top - 0 
						}, 1000); 
						location.hash = this.hash; 
						return false; 
					} 
				} 
			}); 
		}); 
	</script> 	

	<?php 
		if (SECCION == 'home' or SECCION == 'ubicacion') 
	{ ?>
	
	<script>
		var map2;
		 function initMap () {
			map2 = new google.maps.Map(document.getElementById('map'), {
			  center: {lat: -40.927954, lng: -71.422154},
			  zoom: 10,
			  scrollwheel: false,
			  draggable: false,

			});
		 }
	</script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap">
	<?php 
		}	
	?>
	</script>
    </script>

    <!-- Scroll en cabecera -->
	<script>
		//Anima el menú cuando hay scroll
		$( window ).scroll(function(){
			var $cabecera = $('.cabecera');
			if( $(window).scrollTop() > 20){
				$cabecera.addClass('scroll');
			}else{
				$cabecera.removeClass('scroll');
			}
		});

		var lastScrollTop = 0;
		var delta = 5;
		var navbarHeight = $('.navbar').outerHeight();

		var didScroll;
		// muestra si el usuario scrolleo
		$(window).scroll(function(event){
		  didScroll = true;
		});
		setInterval(function() {
		  if (didScroll) {
		    hasScrolled();
		    didScroll = false;
		  }
		}, 250);
		function hasScrolled() {
			   var st = $(this).scrollTop();
			   if(Math.abs(lastScrollTop - st) <= delta)
			  return;
			if (st > lastScrollTop && st > navbarHeight){
			  // Scroll abajo
			  $('.cabecera').addClass('ocultar');
			} else {
			  // Scroll Arriba
			  if(st + $(window).height() < $(document).height()) { 
			    $('.cabecera').removeClass('ocultar');
			  }
			}
			lastScrollTop = st;
		}
		
	</script>
	<!-- Fin Scroll en cabecera -->

    <!-- Hamburguesa  -->
    <script>
	$(document).ready(function(){
		$('.hamburger').click(function(){
			$(this).toggleClass('is-active');
		});
	});
    </script>
	<!-- Fin hamburguesa -->
	<?php if (SECCION == 'home' or SECCION == 'cabanas' or SECCION == 'descanso' or SECCION == 'ubicacion') { ?>
	<!-- Owl Carousel -->
	<!-- http://owlcarousel2.github.io/OwlCarousel2/ -->
    <link rel="stylesheet" href="js/jquery.owl.carousel/owl.carousel.css" />
    <script src="js/jquery.owl.carousel/owl.carousel.min.js"></script>
<!--     <link rel="stylesheet" href="js/jquery.owl.carousel/owl.transitions.css" /> -->
	<!-- Owl Carousel -->
    <script>
		$(document).ready(function(){
			$('.slider-principal > .owl-carousel').owlCarousel({
			    items: 1,
 				autoplay: false,
 				dotsEach: true,
            	singleItem: true,

			    loop: true,
			});
		});

    </script>

	<?php } ?>	
		
	<?php 
	if (defined('SLIDER2')) {
	?>
    <script src="js/jquery.owl.carousel/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="js/jquery.owl.carousel/owl.carousel.css" />
	<script>
		$(document).ready(function(){
		    function owlCarWidth(carousel) {

				    var
				        totalWidth = 0;

				    carousel.find('.owl-item').each(function() {
				        totalWidth += $(this).width();
				    });

				    carousel.find('.owl-stage').width(totalWidth+1);

				}
				owlCarWidth( $('.slider-2 .owl-carousel') );

				    $('.slider-2 .owl-carousel').on('refreshed.owl.carousel', function(event) {
				             owlCarWidth( $('.slider-2 .owl-carousel') );
				});

				$(window).trigger('resize');

				$('.slider-2 .owl-carousel').owlCarousel({
					autoplay: true,
		      		items : 1, 
				    loop: true,
				    slideSpeed: 600,
			        paginationSpeed: 400,
			        dots: false,
			        nav: true,
			        dragBeforeAnimFinish: false,
			        mouseDrag: false,
			        touchDrag: true,
			        navText: [
		            "<div class=\"slider-2__controls bg-1 color-2 prev\"><i class='fa fa-chevron-left'></i></div>",
		            "<div class=\"slider-2__controls bg-1 color-2 next\"><i class='fa fa-chevron-right'></i></div>"
		            ],		 

				});
			});
			 		
	</script>  
	<?php 
		}	
	?>
	<?php 
		if (SECCION == 'reservas') 
	{ ?>
	<script src="js/datepicker/bootstrap-datepicker.min.js"></script>
	<script src="js/datepicker/bootstrap-datepicker.es.min.js"></script>
	<script>	
		$('.calendar .datepicker').datepicker({
		    format: "dd/mm/yyyy",
		    language: "es",
		    orientation: "bottom",
		    autoclose: true,
		});
	</script>

	<?php 
		}	
	?>
	<?php 
		if (SECCION == 'cabanas') 
	{ ?>

    <script src="js/jquery.owl.carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.tabs.min.js"></script>
	
    <link rel="stylesheet" href="js/jquery.owl.carousel/owl.carousel.css" />
    <script>

	    $('.slider-cabanas .owl-carousel').owlCarousel({
   		  items : 1, 
		  nav:true,
		  dots: false,
		  URLhashListener: true,
		  loop: true,
	      navText: [
	      "<div class=\"slider-cabanas__controls bg-1 color-2 prev\"><i class='fa fa-chevron-left'></i></div>",
	      "<div class=\"slider-cabanas__controls bg-1 color-2 next\"><i class='fa fa-chevron-right'></i></div>"
	      ],		 

	    });

    </script>
	<script>
		$(window).tabs = $('.tab-seccion').tabs();
	
		$(window).resize(function(){
			if( $(window).width() > 767){
				if(window.tabs === undefined){
				}
			}else if ( $(window).width() < 767){
				if(window.tabs !== undefined){
					$('.tab-seccion').destroyTabs();
					window.tabs = undefined;
				}
			}

		});
	</script>
<?php } ?>
	<?php 
		if (SECCION == 'ubicacion') 
	{ ?>

    <script src="js/jquery.owl.carousel/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="js/jquery.owl.carousel/owl.carousel.css" />
    <script>
	    $('.ubicacion__slider__slider .owl-carousel').owlCarousel({
   		  items : 3, 
		  nav:true,
		  dots: false,
		  loop: true,
		  margin: 3,
		  autoWidth: true,
	      navText: [
	      "<div class=\"ubicacion__slider__controls bg-1 color-2 prev\"><i class='fa fa-chevron-left'></i></div>",
	      "<div class=\"ubicacion__slider__controls bg-1 color-2 next\"><i class='fa fa-chevron-right'></i></div>"
	      ],		 

	    });
    </script>
<?php } ?>
<!-- 	<script>
		$(document).ready(function(){
		    function owlCarWidth(carousel) {

				    var
				        totalWidth = 0;

				    carousel.find('.owl-item').each(function() {
				        totalWidth += $(this).width();
				    });

				    carousel.find('.owl-stage').width(totalWidth+1);

				}
				owlCarWidth( $('#marcas-carousel') );

				    $('#marcas-carousel').on('refreshed.owl.carousel', function(event) {
				             owlCarWidth( $('#marcas-carousel') );
				});

				$(window).trigger('resize');

			  var owl3 = $("#marcas-carousel");
			 
			  owl3.owlCarousel({
			  	  autoWidth:true,
			  	  loop: false,
			  	  resonsiveClass: true,
			  	  responsive: {
			  	 	0: {
			  	  		items: 1,
			  	  		autoWidth:false
				    },
				    // breakpoint from 480 up
				    511 : {
			  	  		items: 2,
			  	  		autoWidth:false
				    },
				    // breakpoint from 768 up
				    768 : {
			  	  		items: 3,
			  	  		autoWidth:false
				    },		 
				    // breakpoint from 768 up
				    990 : {
			  	  		items: 4,
			  	  		autoWidth:false
				    },		 
				    // breakpoint from 768 up
				    1200 : {
			  	  		items: 5,
			  	  		autoWidth:false
				    },		 
				    1300 : {
			  	  		items: 5
				    }		 
			  	  }
			     });
			});
			 		
	</script>
 -->
	<?php 
		if (SECCION == 'ficha') 
	{ ?>
    <script src="js/jquery.owl.carousel/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="js/jquery.owl.carousel/owl.carousel.css" />
    <script>
 		var owl = $('.slider-ficha__carousel');
 			owl.owlCarousel({
			      nav : true, // Show next and prev buttons
			      slideSpeed : 300,
			      paginationSpeed : 400,
			      autoWidth: true,
			      navText: ["<a class='btn prev absolute'><i class='fa fa-chevron-left'></i></a>","<a class='btn next absolute'><i class='fa fa-chevron-right'></i></a>"],
			      items : 1,
			  });

    		var itemCount = owl.length;
 			if ( itemCount == 1 ){
 				$('.slider-ficha .btn').css('display', 'none');
 			}

    </script>			
	<?php
		}
	?>
	<script>
		$('.contenedor-categoria > .categoria-titulo').click(function(event) {
			if(!event.detail || event.detail==1){
				$(this).toggleClass('checked');
				if ($(this).siblings('.categoria-elementos').is(':visible')){
				} else{
						$(this).siblings('.categoria-elementos').slideDown();
				}
				console.log($(this).siblings('.categoria-elementos').find('li > a'));
			  }
			 if ($(this).hasClass('checked')) {
				$(this).siblings('.categoria-elementos').find('li > a > label').addClass('checked');
				console.log('checked');			 	
			 } else{
				$(this).siblings('.categoria-elementos').find('li > a > label').removeClass('checked');
				console.log('not checked');			 	
			 }
			 return false;			
		});
		$('.contenedor-categoria > .categoria-titulo > a').click(function(event) {
			if(!event.detail || event.detail==1){
				$(this).toggleClass('active');
				$(this).parent().siblings('.categoria-elementos').slideToggle();
			    }
			    return false;			
			
		});
		$( '.categoria-elementos li a' ).on( 'click', 'input[type="checkbox"]', function () {
		    $(this).parent('label').toggleClass('checked');
		});		
	</script>
  </body>
</html>