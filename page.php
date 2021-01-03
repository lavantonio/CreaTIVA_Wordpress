<?php get_header(); ?>

<!-- Contact-->
<section class="contact d-flex flex-column justify-content-center align-items-center pb-5">
  <div class="container pb-5 mb-5">
    <h1 class="pt-5 text-center"><i><?php the_field('glavni_naslov'); ?></i></h1>
    <div class= "underline2 mb-4"></div>
    <p class="lead text-center"><?php the_field('prvi_paragraf'); ?></p>
    <p class="lead text-center"><?php the_field('drugi_paragraf'); ?></p>
  </div>
</section>

<!-- Sample form-->
<section>
  <div class="container px-5">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <?php the_content(); ?>
    <?php endwhile; else : ?>
    <?php _e('Nema unetih strana'); ?>
    <?php endif; ?>
  </div>
</section>

  <!-- whereContact-->
<section class="whereContact d-flex flex-column justify-content-center align-items-center py-5">
    <div class="container  text-center">
      <div class="row">
        <div class="col-md-4">
          <i class="fas fa-map-marker-alt"></i>
          <h3>Our office</h3>
          <p><?php the_field('ulica_i_broj'); ?>
          <br><?php the_field('grad'); ?></p>
        </div>
        <div class="col-md-4">
          <i class="fas fa-phone"></i>
          <h3>Phone</h3>
          <p><?php the_field('fiksni_broj_telefona'); ?>
          <br><?php the_field('mobilni_broj_telefona'); ?></p>
        </div>
        <div class="col-md-4">
          <i class="fas fa-envelope"></i>
          <h3>Email</h3>
          <p><?php the_field('prvi_mail'); ?>
          <br><?php the_field('drugi_mail'); ?></p>
        </div>
      </div>
    </div>
</section>


<?php get_footer(); ?>
