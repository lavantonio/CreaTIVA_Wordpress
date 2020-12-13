
<?php get_header(); ?>


  <!-- Development-->
      <section class="development">
        <div class="container">
          <div class="row">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <div class="col-md-7">
                  <div class="featured-image img-fluid">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <h2 class="text-center"><?php the_title(); ?></h2>
                  <div class= "underline text-center"></div>
                  <?php the_content(); ?>
                </div>

                <div class="skills">
                  <div class="col-md-10 text-white py-4">
                    <div>
<?php get_sidebar(); ?>
                      </div>
                  </div>
                </div>


            <?php endwhile; else : ?>
            <?php _e('Nema unetih blog postova'); ?>
            <?php endif; ?>
          </div>
        </div>
      </section>


<?php get_footer(); ?>
