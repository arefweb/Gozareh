<?php
/**
 * The template for displaying home page
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


    ?>
  </div>

</article>

