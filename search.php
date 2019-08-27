<?php
/**
 * The template for displaying search results pages
 */

get_header();
?>

  <main class="page-content">
    <div class="container">
      <div class="row">

        <article class="col-lg-8 p-4">

          <header class="pb-4">
            <?php if ( have_posts() ) : ?>
              <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'gozareh' ), '<span style="color: #a70000">' . get_search_query() . '</span>' ); ?></h1>
            <?php else : ?>
              <h1 class="page-title"><?php _e( 'Nothing Found', 'gozareh' ); ?></h1>
            <?php endif; ?>
          </header>

          <?php
          if ( have_posts() ) :
            while ( have_posts() ) : the_post();

              get_template_part( 'template-parts/post/content', get_post_format() );

            endwhile;
          else : ?>

           <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'gozareh' ); ?></p>
            <?php
            get_search_form();
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