<?php get_header(); ?>  


<main>
  <section class="container-fluid galeria mb-5 mt-5"> <!-- Comienzo galeria -->
    <h1 class="text-center mb-5 mt-5">Galería</h1>
    <hr>

    <h2 class="mt-5 mb-5">¡Bienvenidos!</h2>
    <hr>


    <div class="container">
      <div class="card-columns" id="galery">

  <!-- <div class="card">
  <a href="#" data-toggle="modal" data-target="#exampleModal">
  <img src="assets/img/1.jpg" class="card-img-top" style="width: 600px; height: 400px;">
  </a>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
  <img src="assets/img/1.jpg" class="img-fluid rounded">
  </div>
</div> -->

<script type="text/javascript">

  var imagenes = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15,16,17,18,19,20,21];
  var galery = document.getElementById('galery');

  for (imagen of imagenes) {
    galery.innerHTML += ` 
    <div class="card">
    <a href="#" data-toggle="modal" data-target="#id${imagen}">
    <img class="galeria" src="<?php echo get_theme_file_uri() ?>/assets/img/${imagen}.jpg" class=" img-fluid galeria">
    </a>
    </div>
    <div class="modal fade" id="id${imagen}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <img   src="<?php echo get_theme_file_uri() ?>/assets/img/${imagen}.jpg" class="img-fluid rounded">
    </div>
    </div> `
  }

</script>


  </div>
</div>

</section>
</main>

<?php get_footer(); ?>
