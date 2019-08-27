<?php
/**
 * The home page template file
 */

get_header();

  $slider = get_theme_mod('slider');
  if(!empty($slider)) :
  ?>
  <div class="slider-container">
    <?php echo do_shortcode($slider); ?>
  </div>
  <?php endif; ?>

  <main class="page-content">
    <div class="container">
      <div class="row">

        <?php
        if ( have_posts() ) :
          while ( have_posts() ) : the_post();

            get_template_part( 'template-parts/page/home', 'page' );

          endwhile;

        endif; ?>

      </div>
    </div>
  </main>

<?php
get_footer();