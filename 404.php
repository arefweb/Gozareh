<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header();
?>

  <main class="page-404 py-5">
    <div class="container">
      <div class="row justify-content-center flex-column">

        <section style="text-align: center">
          <h1><?php _e('404', 'gozareh') ?> </h1>
        </section>
        <section class="sorry"><p><?php _e('We\'re sorry, but the page you were looking for doesn\'t exist. ', 'gozareh') ?></p></section>
        <section class="suggest"><p><?php _e('Please try using our search box below to look for information on our site.', 'gozareh') ?></p></section>
        <section class="d-flex justify-content-center search-404">
          <?php get_search_form(); ?>
        </section>

      </div>
    </div>
  </main>


<?php
get_footer();
