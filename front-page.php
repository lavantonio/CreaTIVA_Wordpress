
<?php get_header(); ?>

<!-- Carousel-->
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php the_field('slajd_1'); ?>" class="d-block w-100" alt="slide1">
      </div>
      <div class="carousel-item">
        <img src="<?php the_field('slajd_2'); ?>" class="d-block w-100" alt="slide2">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!-- About-->
  <section class="about mb-5">
    <div class="container">
      <h1 class="pt-5 text-center"><?php the_field('glavni_naslov'); ?></h1>
      <div class= "underline2 mb-5"></div>
      <div class="row">
        <div class="col-md-4">
          <div class="holder border border-warning rounded">
            <div class="fotoHolder">
              <img src="<?php the_field('slika_1'); ?>" alt="about1" class="card-img-top img-fluid">
            </div>
            <h2 class="pt-3 text-center"><?php the_field('podnaslov_1'); ?></h2>
            <div class= "underline text-center"></div>
            <p class="text-justify pl-3 pr-3"><?php the_field('paragraf_1'); ?></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="holder border border-warning rounded">
            <div class="fotoHolder">
              <img src="<?php the_field('slika_2'); ?>" alt="about2" class="card-img-top img-fluid">
            </div>
            <h2 class="pt-3 text-center"><?php the_field('podnaslov_2'); ?></h2>
            <div class= "underline text-center"></div>
            <p class="text-justify pl-3 pr-3"><?php the_field('paragraf_2'); ?></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="holder border border-warning rounded">
            <div class="fotoHolder">
              <img src="<?php the_field('slika_3'); ?>" alt="about3" class="card-img-top img-fluid">
            </div>
            <h2 class="pt-3 text-center"><?php the_field('podnaslov_3'); ?></h2>
            <div class= "underline text-center"></div>
            <p class="text-justify pl-3 pr-3"><?php the_field('paragraf_3'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php get_footer(); ?>
