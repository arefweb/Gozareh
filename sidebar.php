<?php
/**
 * The sidebar containing the main widget area
 *
 */

if ( ! is_active_sidebar( 'primary' ) ) {
  return;
}
?>

<aside class="primary-sidebar">
  <?php dynamic_sidebar( 'primary' ); ?>
</aside><!-- #secondary -->
