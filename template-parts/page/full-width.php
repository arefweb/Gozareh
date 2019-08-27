<?php
/**
 * The template for displaying full width pages
 */

?>

<article class="col-12">

  <?php if ( has_post_thumbnail() ) : ?>
    <figure class="page-full-image">
      <?php the_post_thumbnail(); ?>
    </figure>
  <?php endif; ?>

  <div class="page-content">
    <?php

    the_content();

    the_meta();

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

</article>
