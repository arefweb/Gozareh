<?php
/**
 * The main template file.
 */
get_header();
?>

<main class="page-content">
  <div class="container">
    <div class="row">

      <article class="col-lg-8 p-4">
        <?php
        if ( have_posts() ) :
        while ( have_posts() ) : the_post();

          get_template_part( 'template-parts/post/content', get_post_format() );

        endwhile;
        else :
          _e( 'Sorry, no posts matched your criteria.', 'gozareh' );
        endif; ?>
        <section class="col-12">

            <?php
            the_posts_pagination(
              array(
                'prev_text'          => '«',
                'next_text'          => '»',
                'screen_reader_text' => ' ',
              )
            );
            ?>

        </section>

      </article>

      <article class="col-lg-4 p-4 main-sidebar">
        <?php get_sidebar(); ?>
      </article>

    </div>
  </div>
</main>




<?php
get_footer();