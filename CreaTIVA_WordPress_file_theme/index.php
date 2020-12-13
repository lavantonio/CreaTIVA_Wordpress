
<?php get_header(); ?>


  <!-- Header Home-->
      <div class="headerHome d-flex flex-column justify-content-center">
        <div class="container">
          <div class="row">
            <div class="col-md-7 d-flex flex-column justify-content-center">
              <h1>Creativa <span class="text-white font-italic">studio<span></h1>
              <p class="font-weight-normal">We create brands the world loves</p>
              <p class="lead">Balancing talent and technology worldwide</p>
            </div>
            <div class="col-md-5">
              <img class="text-center img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/header.png" alt="header">
            </div>
          </div>
        </div>
      </div>
  <!-- Development-->
      <section class="development">
        <div class="container">
          <div class="row">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <div class="col-md-4">
                  <h2 class="text-center"><?php the_title(); ?></h2>
                  <div class= "underline text-center"></div>
                  <?php the_excerpt(); ?>
                  <div class="positionBtn">
                    <a href="<?php the_permalink(); ?>" class="button">
                      <?php _e('full text'); ?>
                    </a>
                  </div>
                  <div class="featured-image img-fluid">
                    <?php the_post_thumbnail(); ?>
                  </div>
                </div>
            <?php endwhile; else : ?>
            <?php _e('Nema unetih blog postova'); ?>
            <?php endif; ?>
          </div>
        </div>
      </section>
<!-- Skills-->
      <div class="skills d-flex flex-column justify-content-center">
        <div class="container">
          <div class="row">

            <div class="col-md-4 text-white offset-2 pt-3">
<?php get_sidebar(); ?>
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-white">
              <i class="fas fa-laptop-code"></i>
            </div>
          </div>
        </div>
      </div>

<?php get_footer(); ?>
