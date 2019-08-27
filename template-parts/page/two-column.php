<?php
/**
 * The template for displaying all two column pages
 */

?>

<div class="row posts">



  <?php if ( has_post_thumbnail() ) : ?>
    <section class="col-11 mb-5 ">
      <?php the_post_thumbnail(); ?>
    </section>
  <?php endif; ?>

  <section class="col-md-11">
    <div class="post-content">
      <?php
      the_content();

      wp_link_pages(
        array(
          'before'      => '<div class="page-links">' . __( 'Pages:', 'gozareh' ),
          'after'       => '</div>',
          'link_before' => '<span class="page-number">',
          'link_after'  => '</span>',
        )
      );


      ?>
    </div>
  </section>

</div>
