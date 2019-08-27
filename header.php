<?php
/**
 * The header for our theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">

  <?php get_template_part( 'template-parts/header/navigation', 'top' ); ?>

  <?php get_template_part( 'template-parts/header/custom', 'header' ); ?>

  <?php if (!empty($pagename) || is_archive() ) : ?>
  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3>
            <?php
            if(isset($pagename)) {
              echo urldecode($pagename) ;
            }
            if(is_archive()){
              echo get_the_archive_title();
            }

            ?>
          </h3>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

</header>

