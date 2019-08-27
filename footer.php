<?php
/**
 * The template for displaying the footer
 */
?>

<footer>

  <article class="footer-widgetized">
    <div class="container">
      <div class="row py-5">
        <section class="w1 col-md-4">
          <?php dynamic_sidebar( 'footer-1' ); ?>
        </section>
        <section class="w2 col-md-4">
          <?php dynamic_sidebar( 'footer-2' ); ?>
        </section>
        <section class="w3 col-md-4">
          <?php dynamic_sidebar( 'footer-3' ); ?>
        </section>
      </div>
    </div>
  </article>


  <article class="footer-info">
    <div class="container">
      <div class="row">
        <div class="copy">
          <?php echo get_theme_mod('copyright'); ?>
        </div>
      </div>
    </div>
  </article>


</footer>


<?php wp_footer(); ?>

</body>
</html>