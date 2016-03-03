<?php

/**
  * Includes
  */
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
function enqueue_styles() {
  wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto:400,700,900,300' );
  wp_enqueue_style( 'fontawesome', get_template_directory_uri() .'/incl/font-awesome/css/font-awesome.min.css', array(), '4.5.0' );
  wp_enqueue_style( 'reset-style', get_template_directory_uri() .'/css/html5reset-1.6.1.css', array(), '1.6.1' );
  wp_enqueue_style( 'core-style', get_template_directory_uri() .'/style.css');
}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
function enqueue_scripts() {
	wp_enqueue_script( 'main-js', get_template_directory_uri() .'/js/script.js');
}

/**
  * Setup
  */
add_action( 'after_setup_theme', 'basic_theme_setup' );
function basic_theme_setup() {

  // set basic images sizes (width, height, crop) -> use like the_post_thumbnail( 'name' );
  add_image_size( 'portfolio-image', 9999, 9999, true);

  // enable featured images
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 150, 150, true );

  // enable RSS feed support
  add_theme_support( 'automatic-feed-links' );

  // no hard coded <title> tag. needs to be set in wordpress
  add_theme_support('title-tag');

  // allows HTML5 markup
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

  // enable the excerpt meta box in page edit screen
  add_post_type_support( 'page', 'excerpt' );
}



/**
  * Navigation
  */
add_action( 'init', 'register_custom_nav_menu' );
function register_custom_nav_menu() {
  register_nav_menus(array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}

/**
  * Sidebar
  */
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'main-sidebar' ),
        'id' => 'main-sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
      	'after_widget'  => '</li>',
      	'before_title'  => '<h2>',
      	'after_title'   => '</h2>',
    ) );
}


?>
