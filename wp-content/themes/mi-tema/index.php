
<?php get_header(); ?>  

<hr>

<!-- slider -->
<section class="slider-chitas">	
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<h1>Los Chitas</h1>
		<div class="carousel-inner">
			<div class="carousel-item active img-chitas1">
				<div class=" d-md-block">
				</div>
			</div>
			<div class="carousel-item img-chitas2">
				<div class=" d-md-block">
				</div>
			</div>
			<div class="carousel-item img-chitas3">
				<div class=" d-md-block">
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" 	data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Anterior</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" 	data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Siguiente</span>
		</a>
	</div>
</section>
<!-- fin slider -->
<main class="container">

<hr class="mt-5 mb-5">

<!-- nosotros -->
<section class="container-fluid nosotros">
	<div class="row">
		<div class="offset-md-1 offset-lg-1"></div>
		<div class="col-xs-12 col-s-12 col-md-12 col-lg-12">
			<h2 class="text-center">Quienes Somos</h2>
			<p class="text-center">
				Club Patín carrera "Chitas de Quilicura" Fue creado el 14 de Agosto del 2012 en la comuna de Quilicura, con vigencia activa.
                participando en sus inicios en RMD obteniendo el 3° lugar ese año, posteriormente participamos en la liga de patín carrera Parque O’Higgins donde obtuvimos 2° lugar en ranking año 2014.
                El mismo año obtuvimos el 1° lugar en clausura escuela del y actualmente participamos en el estadio nacional con la serie de intermedia y alta competencia.
                Llevamos 6 años practicando y enseñando este lindo deporte.
			</p>
		</div>
	</div>
</section>
<!-- fin nosotros -->

<hr class="mt-5 mb-5">

<!--objetivos -->
<section class="container-fluid objetivos">
	<h1>Nuestros Objetivos</h1>    
	<div class="row">
		<section class="p-0" id="portfolio">
			<div class="container-fluid p-0">
				<h2 class="section-heading text-center p-2"></h2>
				<hr class="my-4">
				<div class="row no-gutters popup-gallery">
					<?php
					$arg = array(
						'post_type'		 => 'objetivos',
						'posts_per_page' => 6
					);
					$get_arg = new WP_Query( $arg );
					while ( $get_arg->have_posts() ) {
						$get_arg->the_post();
						?>

						<div class="col-lg-6 col-sm-6">
							<a class="portfolio-box" href="<?php the_post_thumbnail_url( 'large' ); ?>">
								<?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?>
								<div class="portfolio-box-caption">
									<div class="portfolio-box-caption-content">
										<div class="project-category text-faded">
											<?php the_title() ?>
										</div>
										<div class="project-name">
											<?php the_content() ?>
										</div>
									</div>
								</div>
							</a>
						</div>

					<?php } wp_reset_postdata();
					?>
				</div>
			</div>
			<hr class="mt-5 mb-5">
		</section>
<!--objetivos -->

<hr class="mt-5 mb-5">

<!-- noticias -->
<section class="container noticias">
	<div class="row">
		<div class="conosur col-12 col-sm-12 col-md-4 col-lg-4 mb-5 mt-5">
			<div class="card" style="width: 18rem;">
				<img class="card-img-top mt-" src="<?php echo get_theme_file_uri() ?>/assets/img/familia-chita.jpg" alt="Card image cap" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">Más que un Club</h5>
					<p class="card-text">Con el paso de los años hemos logrado formar esta hermosa familia "los chitas de Quilicura".</p>
					<a href="noticias" class="btn btn-primary">Ver Más</a>
				</div>
			</div>
		</div>

		<div class="conosur col-12 col-sm-12 col-md-4 col-lg-4 mb-5 mt-5">
			<div class="card" style="width: 18rem;">
				<img class="card-img-top mt-" src="<?php echo get_theme_file_uri() ?>/assets/img/logo-1.jpg" alt="Card image cap" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">Nuestro Primer Logo</h5>
					<p class="card-text">Este fue nuestro primer logo, Representa todo el crecimiento de nuestro querido club Y los grandes cambios que hemos logrado.</p>
					<a href="noticias" class="btn btn-primary">Ver Más</a>
				</div>
			</div>
		</div>

		<div class="conosur col-12 col-sm-12 col-md-4 col-lg-4 mb-5 mt-5">
			<div class="card" style="width: 18rem;">
				<img class="card-img-top mt-" src="<?php echo get_theme_file_uri() ?>/assets/img/card1.jpg" alt="Card image cap" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">Campeonato Cono Sur 2018</h5>
					<p class="card-text">Este 28 de julio viajamos a Neuquén, Argentina y Obtuvimos el 3° lugar del Campeonato cono sur </p>
					<a href="noticias" class="btn btn-primary">Ver Más</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--fin noticias -->

<hr class="mt-5 mb-5">

<!-- debes -->
<section class="container debes">
	<div class="row" >
		<div class="col-12 col-lg-6">
			<h2 class="text-center mt-5 mb-5">Debes Saber...<i class="fas fa-lightbulb"></i></h2>
			<p class="text-center mt-5 mb-5">
			Para integrarte a nuestra escuela, debes tener por lo menos 4 años de edad, traer los patines en línea que tengas, casco y una botella plástica con agua.
			Te sugerimos también que puedas traer rodilleras, muñequeras y coderas si es que no tienes ninguna noción en la práctica de este deporte.</p>
		</div>

		<div class="col-12 col-lg-6">
			<h2 class="text-center mt-5 mb-5">Kit de Proteccción</h2>
			<p class="text-center mt-5 mb-5">
			El kit de protección básico para patinar está compuesto por rodilleras, coderas, muñequeras y, sobre todo en el caso de niños, casco. Además, cada especialidad requiere de protecciones adicionales. Existen kits (sin incluir casco) de buena calidad.</p>
		</div>
	</div>   
</section>
<!--fin debes -->

<hr class="mt-5 mb-5">

<!-- accesorios -->
<section id="accesorios">
	<h4>Accesorios Necesarios</h4>
	<div class="contenedor">
		<div class="accesorios-chitas">
			<img src="<?php echo get_theme_file_uri() ?>/assets/img/patines.jpg" alt="">
			<h5>Patines</h5>
		</div>
		<div class="accesorios-chitas">
			<img src="<?php echo get_theme_file_uri() ?>/assets/img/casco.jpg" alt="">
			<h5>Casco</h5>
		</div>
		<div class="accesorios-chitas">
			<img src="<?php echo get_theme_file_uri() ?>/assets/img/coderas.jpg" alt="">
			<h5>Protección</h5>
		</div>

		<div class="accesorios-chitas">
			<img src="<?php echo get_theme_file_uri() ?>/assets/img/guantes.jpg" alt="">
			<h5>Guantes</h5>
		</div>
	</div>
</section>
<!-- fin accesorios -->
</main>
<hr class="mt-5 mb-5">

<!-- testimonios -->
<section id=testimonials >
	<div class="container text-center">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="4000">
			<hr>
			<h2>Testimonios</h2>
			<div class="carousel-inner pt-5 pb.5" role="listbox">
				<div class="carousel-item active">
					<img class="rounded-circle " src="<?php echo get_theme_file_uri() ?>/assets/img/mauricio.jpeg" alt="First slide">
					<h6 class="pt-3 mb-2">Mauricio Aravena</h6>
					<p class="">“Lo mejor de ser su entrenador, es que disfrutamos de una pasión juntos”.</p>
				</div>

				<div class="carousel-item">
					<img class=" rounded-circle " src="<?php echo get_theme_file_uri() ?>/assets/img/camilo.jpeg" alt="Second slide">
					<h6 class="pt-3 mb-2">Camilo Coach</h6>
					<p class="">“Para mi es un honor entrenar a estos pequeños guerreros, que demuestran sus garras día a día.”.</p>
				</div>
			</div>
		</div>
	</div>	
</section>  
<!-- fin testimonios -->

<hr class="mt-5 mb-5">

<!-- videos -->
<h2>Videos</h2>
<section class="#videos">
	<div class="container">
		<div class="row">
			<div class="videos col-12 col-sm-12 col-md-6 col-lg-6 mb-5 mt-5">
				<div class="embed-responsive embed-responsive-16by9 videos">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/tAGXHVSng_k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
				</div>
			</div>

			<div class="videos col-12 col-sm-12 col-md-6 col-lg-6 mb-5 mt-5">
				<div class="embed-responsive embed-responsive-16by9 videos">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/2_dYqMQtPhc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>  
			</div>
		</div>
	</div>
</div>
</section>
<!-- fin videos -->


<hr class="mt-5 mb-5">

<?php get_footer(); ?>