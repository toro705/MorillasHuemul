<?php

//Defino la URL actual
if(! defined('URL_SECCION')){
  define('URL_SECCION', url(SECCION));
}

include('metas.php');

?>
<!DOCTYPE html>
<html lang="<?= IDIOMA ?>">
  <head>
    <meta charset="utf-8" />

    <title><?= $metas['titulo']?></title>
    <meta name="description"            content="<?= $metas['descripcion'];?>"/>

    <!-- Twitter Card data -->
    <meta name="twitter:card"           content="summary_large_image"/>
    <meta name="twitter:site"           content="@<?= Empresa::$redes['tw'] ?>"/>
    <meta name="twitter:title"          content="<?= $metas['titulo'] ?>" />
    <meta name="twitter:description"    content="<?= substr($metas['descripcion'], 0, 200);?>" />
    <meta name="twitter:image"          content="<?= $metas['img'] ?>" />

    <!-- Open Graph data -->
    <meta property="og:title"           content="<?= $metas['titulo'] ?>" />
    <meta property="og:description"     content="<?= substr($metas['descripcion'], 0, 200);?>"/>
    <meta property="og:image"           content="<?= $metas['img']; ?>" />
    <meta property="og:site_name"       content="<?= Empresa::$nombre; ?>"/>
    <meta property="og:url"             content="<?= URL_SECCION; ?>"/>

    <meta name="robots"   content="all">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <base href="<?=BASE_URL?>">
    <link rel="canonical" href="<?= URL_SECCION ?>" />
    <?php
    if( count(json_decode(IDIOMA_ENABLED)) > 1 ){
      foreach(json_decode(IDIOMA_ENABLED) AS $lang){
          echo '   <link rel="alternate" hreflang="'.$lang.'" href="'.url(SECCION, null, $lang).'" />'."\r\n";
      }
    } ?>


    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="images/favicons/manifest.json">
    <link rel="mask-icon" href="images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <?php
     // Uno y minifico todos los CSS comunes a todas las páginas
    $main_css = $minified->merge( 'css/main.min.css', 'css', array(
            'css/bootstrap.min.css',
            'css/animate.min.css',
            'js/datepicker/bootstrap-datepicker.css',
            'css/styles-theme.css'
        ));
    echo ' <link rel="stylesheet" href="'.$main_css.'?v='.filemtime(BASE_PATH.$main_css).'" />'."\r\n";
    ?>

    <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

     <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>

<body role="document" class="<?='s_'.SECCION?>">
<!-- GOOGLE ANALYTICS -->
<!-- GOOGLE ANALYTICS -->
  <header class="cabecera" id="home">
    <nav class="navbar anim-suave">
    <div class="container"> 
        <div class="row">
          <div class="navbar-header col-sm-3">
            <button class="hamburger hamburger--efecto visible-xs" type="button"
                    aria-label="Menu" aria-controls="cabecera-navbar-collapse" data-toggle="collapse" data-target=".js-navbar-cabecera">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
            <a class="cabecera__logo anim-suave" href="<?=url('home')?>">
              <img class="img-responsive anim-suave" src="images/logo_nav-principal-cabecera.png" alt="<?=Empresa::$nombre?>" itemprop="logo">
            </a>
          </div>
          <div class="col-sm-9">
            <div class="row">
              <div class="navegacion navbar-collapse collapse js-navbar-cabecera animated" id="cabecera-navbar-collapse">
                <nav class="nav-secundario nav-right anim-suave hidden-xs">
                  <ul class="anim-suave">
                    <li class="nav-secundario__social"><a target="_blank" href="<?= Empresa::$redes['fb']?>"><span class="anim-suave"><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>
                    <li class="nav-secundario__social"><a target="_blank" href="<?= Empresa::$redes['gp']?>"><span class="anim-suave"><i class="fa fa-google-plus" aria-hidden="true"></i></span></a></li>
                    <li class="nav-secundario__social"><a target="_blank" href="<?= Empresa::$redes['in']?>"><span class="anim-suave"><i class="fa fa-instagram" aria-hidden="true"></i></span></a></li>
                    <li class="nav-secundario__social"><a target="_blank" href="<?= Empresa::$redes['tw']?>"><span class="anim-suave"><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
                    <li class="nav-secundario__social"><button type="button" data-toggle="modal" data-target="#camaraEnVivo"><span class="camara-icon anim-suave"><i class="fa fa-video-camera" aria-hidden="true"></i></span><span class="camara-text anim-suave"><?=$txt['gral'][0] ?></span></button></li>
                    <li class="nav-secundario__lenguaje"><a class="relative" href="javascript:;">EN</a></li>
                  </ul>
                  <div class="clearfix"></div>
                </nav>
                <div class="clearfix"></div>
                <nav class="nav-principal nav-left anim-suave">
                  <ul class="anim-suave">
                    <li><a href="<?=url('home')?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li><a href="<?=url('cabanas')?>"><?=$txt['nav'][0] ?></a></li>
                    <li><a href="<?=url('descanso')?>"><?=$txt['nav'][1] ?></a></li>
                    <li><a href="<?=url('ubicacion')?>"><?=$txt['nav'][2] ?></a></li>
                    <li><a href="<?=url('contacto')?>"><?=$txt['nav'][3] ?></a></li>
                    <li><a href="<?=url('ofertas')?>"><?=$txt['nav'][4] ?></a></li>
                    <li><a href="<?=url('reservas')?>"><?=$txt['nav'][5] ?></a></li>
                  </ul>
                  <div class="clearfix"></div>
                </nav> 
                <nav class="nav-secundario nav-right anim-suave visible-xs">
                  <ul class="anim-suave">
                    <li class="nav-secundario__social"><a target="_blank" href="<?= Empresa::$redes['fb']?>"><span class="anim-suave"><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>
                    <li class="nav-secundario__social"><a target="_blank" href="<?= Empresa::$redes['gp']?>"><span class="anim-suave"><i class="fa fa-google-plus" aria-hidden="true"></i></span></a></li>
                    <li class="nav-secundario__social"><a target="_blank" href="<?= Empresa::$redes['in']?>"><span class="anim-suave"><i class="fa fa-instagram" aria-hidden="true"></i></span></a></li>
                    <li class="nav-secundario__social"><a target="_blank" href="<?= Empresa::$redes['tw']?>"><span class="anim-suave"><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
                    <li class="nav-secundario__social"><button type="button" data-toggle="modal" data-target="#camaraEnVivo"><span class="camara-icon anim-suave"><i class="fa fa-video-camera" aria-hidden="true"></i></span><span class="camara-text anim-suave"><?=$txt['gral'][0] ?></span></button></li>
                    <li class="nav-secundario__lenguaje"><a class="relative" href="javascript:;">EN</a></li>
                  </ul>
                  <div class="clearfix"></div>
                </nav>   
                <div class="clearfix"></div>                            
              </div>
            </div>
          </div>
        </div>
    </div>
    </nav>
    <div class="modal fade" id="camaraEnVivo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title" id="myModalLabel"><?=$txt['gral'][3] ?></h3>
          </div>
          <div class="modal-body text-center">
            <img class="img-responsive slider-2__imagen" src="images/actividad.jpg">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><?=$txt['gral'][4] ?></button>
          </div>
        </div>
      </div>
    </div>
    <!-- HEADERS -->
    <?php if(SECCION != 'home' &&  SECCION != 'cabanas'){
      switch (SECCION) {
        default:
          $header = SECCION;
          break;
      }
     ?>
      <div id="headerimgs" style="background-image: url(images/cabeceras/<?=$header.'-1920.jpg?v='.time()?>);">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="headerimg__texto">
                <?php echo $metas['slider']?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
    <!-- HEADERS -->

    </header>

    <!-- Sección principal -->
    <main id="main" role="main">
