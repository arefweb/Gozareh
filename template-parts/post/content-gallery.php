<?php
/**
 * Template part for displaying gallery posts
 */
?>

<div class="row posts" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if ( has_post_thumbnail() ) : ?>
    <section class="col-lg-5 col-md-5">

      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
      </a>

    </section>
  <?php endif; ?>

  <?php if ( has_post_thumbnail() ) : ?>
  <section class="col-lg-7 col-md-7">
    <?php else : ?>
    <section class="col-md-11">
      <?php endif; ?>
      <div class="post-header">
        <?php
        the_title( '<h2 class="post-title gallery-title"><i class="far fa-images"></i><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        ?>
        <span> <?php the_date('d/m/Y'); ?> &verbar; </span>
        <span> <?php _e( 'in', 'gozareh' );?> <?php the_category( ', ' ); ?> &verbar; </span>
        <span> <?php _e( 'by', 'gozareh' );?> <?php the_author_posts_link(); ?> | </span>
        <span> <?php if(!empty(get_the_tag_list()) ){_e( 'tags: ', 'gozareh' ); the_tags( '', ' • ', '' ); } ?></span>
      </div>

      <div class="post-content">
        <?php
        if ( get_post_gallery() ) {
          echo '<div class="entry-gallery">';
          echo get_post_gallery();
          echo '</div>';
        };
        ?>
      </div>

    </section>

</div>
