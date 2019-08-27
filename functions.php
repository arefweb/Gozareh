<?php
/**
 * Setup theme functions for Gozareh.
 *
 */

/**
 * Enqueues scripts and styles.
 */
function gozareh_scripts(){
  wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array(), '3.3.1', false );
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js', array(), '4.3.1', false );
  wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/assets/js/all.js', array(), '5.9.0', false );
  wp_enqueue_script( 'gozareh-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );
  wp_enqueue_script( 'gozareh-nav', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0.0', true );

  wp_enqueue_style( 'gozareh-style', get_stylesheet_uri() );
  wp_style_add_data( 'gozareh-style', 'rtl', 'replace' );
  wp_enqueue_style('bootstrap', get_theme_file_uri( '/assets/css/bootstrap.min.css' ), array(), '4.3.1' );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

}
add_action( 'wp_enqueue_scripts', 'gozareh_scripts' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function gozareh_setup (){

  register_nav_menus(
    array(
      'top'    => __( 'Top Menu', 'gozareh' ),
    )
  );

  add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 300,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
  ) );

  add_theme_support( 'custom-header', array(
    'width'              => 1500,
    'height'             => 900,
    'flex-width'         => true,
    'flex-height'        => true,
    'header-text'        => true,
    'default-text-color' => '000',
  ) );

  add_theme_support( 'post-thumbnails' );

  add_theme_support(
    'post-formats',
    array(
      'aside',
      'image',
      'video',
      'quote',
      'link',
      'gallery',
      'audio',
    )
  );

  add_theme_support( 'title-tag' );

  add_theme_support( 'automatic-feed-links' );

  load_theme_textdomain( 'gozareh', get_template_directory() . '/languages' );

}
add_action( 'after_setup_theme', 'gozareh_setup' );

/**
 * Register widget area.
 */
function gozareh_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Header Widget Area 1', 'gozareh' ),
    'id'            => 'header-1',
    'description'   => __( 'Recommended for widgets related to Social links. ', 'gozareh' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Header Widget Area 2', 'gozareh' ),
    'id'            => 'header-2',
    'description'   => __( 'Recommended for widgets related to texts, phone numbers and etc. ', 'gozareh' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Primary Sidebar', 'gozareh' ),
    'id'            => 'primary',
    'description'   => __( 'The main sidebar which appears in blog page and etc. ', 'gozareh' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="primary-title">',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer 1', 'gozareh' ),
    'id'            => 'footer-1',
    'description'   => __( 'Footer widget area one. ', 'gozareh' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="footer-title">',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer 2', 'gozareh' ),
    'id'            => 'footer-2',
    'description'   => __( 'Footer widget area two. ', 'gozareh' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="footer-title">',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer 3', 'gozareh' ),
    'id'            => 'footer-3',
    'description'   => __( 'Footer widget area three. ', 'gozareh' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="footer-title">',
    'after_title'   => '</h4>',
  ) );



}
add_action( 'widgets_init', 'gozareh_widgets_init' );

/**
 * Read More link.
 */
function new_excerpt_more($more) {
  global $post;
  return '<a class="moretag" href="'. get_permalink($post->ID) . '">'. __( 'READ MORE', 'gozareh' ) .'</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Register Theme Customizer object.
 */
function gozareh_customize_register( $wp_customize ) {

  //Copyright section
  $wp_customize->add_setting(
    'copyright',
    array(
      'type' => 'theme_mod',
      'default'           => 'Copyright ©',
      'sanitize_callback' => 'sanitize_text_field',
    )
  );

  $wp_customize->add_control(
    'copyright',
    array(
      'type'     => 'text',
      'label'    => __( 'Copyright', 'gozareh' ),
      'description' => __( 'Add Copyright text here.', 'gozareh' ),
      'section'  => 'copyright',
      'settings'  => 'copyright',
    )
  );

  $wp_customize->add_section(
    'copyright',
    array(
      'title'    => __( 'Copyright', 'gozareh' ),
      'priority' => 130,
    )
  );

  //Front page slide-show
  $wp_customize->add_setting(
    'slider',
    array(
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_text_field',
    )
  );

  $wp_customize->add_control(
    'slider',
    array(
      'type'     => 'text',
      'label'    => __( 'Slide show [shortcode]', 'gozareh' ),
      'description' => __( 'Add your Slide show plugin\'s [shortcode] here.', 'gozareh' ),
      'section'  => 'front-page',
      'settings'  => 'slider',
    )
  );

  $wp_customize->add_section(
    'front-page',
    array(
      'title'    => __( 'Front Page', 'gozareh' ),
      'priority' => 115,
    )
  );



}

add_action( 'customize_register', 'gozareh_customize_register' );

if ( ! isset( $content_width ) ) {
  $content_width = 3000;
}