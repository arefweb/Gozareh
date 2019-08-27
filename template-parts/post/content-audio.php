<?php
/**
 * Template part for displaying audio posts
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
        the_title( '<h2 class="post-title audio-title"><i class="fas fa-microphone"></i><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        ?>
        <span> <?php the_date('d/m/Y'); ?> &verbar; </span>
        <span> <?php _e( 'in', 'gozareh' );?> <?php the_category( ', ' ); ?> &verbar; </span>
        <span> <?php _e( 'by', 'gozareh' );?> <?php the_author_posts_link(); ?> | </span>
        <span> <?php if(!empty(get_the_tag_list()) ){_e( 'tags: ', 'gozareh' ); the_tags( '', ' • ', '' ); } ?></span>
      </div>

      <div class="post-content">
        <?php
        $content = apply_filters( 'the_content', get_the_content() );
        $audio   = false;

        // Only get audio from the content if a playlist isn't present.
        if ( false === strpos( $content, 'wp-playlist-script' ) ) {
          $audio = get_media_embedded_in_content( $content, array( 'audio' ) );
        }

        if ( ! empty( $audio ) ) {
          foreach ( $audio as $audio_html ) {
            echo '<div class="entry-audio">';
            echo $audio_html;
            echo '</div><!-- .entry-audio -->';
          }
        };
        ?>
      </div>

    </section>

</div>
