<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 */

if ( post_password_required() )
  return;
?>

<div id="comments" class="comments-area">

  <?php if ( have_comments() ) : ?>
  <h4 class="comments-title">
    <?php
    printf( _n( '%1$s thought on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number(), 'gozareh' ),
      number_format_i18n( get_comments_number() ) , '<span>' . get_the_title() . '</span>' );
    ?>
  </h4>

  <ol class="comment-list">
    <?php
    wp_list_comments( array(
      'style'       => 'ol',
      'short_ping'  => true,
      'avatar_size' => 74,
    ) );
    ?>
  </ol><!-- .comment-list -->

  <?php
    // Are there comments to navigate through?
    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
  ?>
  <nav class="comment-navigation" role="navigation">
    <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'gozareh' ); ?></h1>
    <div class="nav-previous"><?php previous_comments_link( __( '&amp;« Older Comments', 'gozareh' ) ); ?></div>
    <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &amp;»', 'gozareh' ) ); ?></div>
  </nav><!-- .comment-navigation -->
  <?php endif; // Check for comment navigation ?>

  <?php if ( ! comments_open() && get_comments_number() ) : ?>
  <p class="no-comments"><?php _e( 'Comments are closed.' , 'gozareh' ); ?></p>
  <?php endif; ?>

  <?php endif; // have_comments() ?>

  <?php comment_form(); ?>

</div><!-- #comments -->