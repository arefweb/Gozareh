<?php
/**
 * The template for displaying all pages
 */

get_header();
?>

  <main class="page-content">
    <div class="container">
      <div class="row">

        <?php
        if ( have_posts() ) :
        while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/page/full', 'width' );

        endwhile;

        endif; ?>
        <section class="col-12 py-5">
          <div class="row">
            <?php
            if ( comments_open() || get_comments_number() ){
              comments_template();
            }
            ?>
          </div>
        </section>
      </div>
    </div>
  </main>


<?php
get_footer();
