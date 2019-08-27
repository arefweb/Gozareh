<?php
/**
 * The template for displaying all single posts
 *
 */

get_header(); ?>

  <main class="page-content">
    <div class="container">
      <div class="row">

        <article class="col-lg-8 p-4">
          <?php
          if ( have_posts() ) :
            while ( have_posts() ) : the_post();

              get_template_part( 'template-parts/post/content', get_post_format() );

            endwhile;

          endif; ?>

          <section class="col-12">
            <div class="row justify-content-between prev-next">
              <section><?php previous_post_link(); ?></section>
              <section><?php next_post_link(); ?></section>
            </div>
          </section>

          <section class="col-12 py-5">
            <div class="row">
              <?php
              if ( comments_open() || get_comments_number() ){
                comments_template();
              }
              ?>
            </div>
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
