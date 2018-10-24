<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title><?php bloginfo ('Los Chitas'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

    <?php wp_head() ?>
</head>

<body>

<!--Header-->
<header class="header-chitas">
  <!-- nav -->
  <div id="row-navbar">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#index.html">
          <img src="<?php echo get_theme_file_uri() ?>/assets/img/chitas.jpg" class="img-fluid" alt="Imagen patines">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      <!--  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="nav">
            <li class="nav-item">
            <a class="nav-link" href="inicio.html">Inicio</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="Noticias.html">Noticias</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="horarios.html">Horarios</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="galeria.html">Galería</a>
            </li>


            <li class="nav-item">
            <a class="nav-link" href="inicio.html#videos">Videos</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="contacto.html">Contacto</a>
            </li>  
          </ul> 
        </div>
      </nav> -->
       <?php if (has_nav_menu ( 'header-menu' )) { ?> 
          <?php wp_nav_menu(array(
            ' theme_location '   =>  'header-menu' ,
            ' container' =>  'nav',
            ' container_class '    =>  'navbar navbar-expand-lg navbar-light', 
            ' items_wrap '       =>  '<li class="flex-sm-fill text-sm-center nav-link">%3$s</li>'
          )
        ); ?>
          <?php } ?>

    </div>
  </div> 
<!-- / fin Nav -->
</header>
<!-- fin header -->