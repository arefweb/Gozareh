<?php
/**
 * Displays Custom header image and site title and tagline
 */
?>

<?php if(get_header_image() || display_header_text()==true ): ?>
  <article class="site-custom-header">
    <div class="custom-image">
      <?php if ( get_header_image() ) : ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <img src="<?php header_image(); ?>"  alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
      <?php endif; ?>
    </div>

    <?php if(display_header_text()==true) : ?>
      <div class="site-branding">

        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

        <?php
        $description = get_bloginfo( 'description', 'display' );

        if ( $description || is_customize_preview() ) :
          ?>
          <p class="site-description"><?php echo $description; ?></p>
        <?php endif; ?>
      </div>
    <?php endif; ?>

  </article>
<?php endif; ?>