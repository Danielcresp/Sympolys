<?php get_header(); ?>
<div class="container-fluid carousel-inicio">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Carrucel.jpg" class="d-block w-100" alt="1">
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Carrucel1.jpg" class="d-block w-100" alt="2">
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Carrucel2.jpg" class="d-block w-100" alt="3">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<section class="container story">
  <h1 class="h1-story">OUR STORY</h1>
  <h3 class="h3-story">Lorem Ipsum is simply dummy text of the printing</h3>
  <p class="p-story">Lorem Ipsum has been the industry's standard dummy
     text ever since the 1500s, when an unknown printer 
     took a galley of type and scrambled it to make a type
      specimen book. It has survived not only 
    five centuries, but also the leap into electronic
     typesetting, remaining essentially unchanged.</p>
</section>
<?php get_footer(); ?>