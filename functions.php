<?php
/**
 * Theme helping functions
 *
 * @package WordPress
 * @subpackage neocode_theme
 * @since Neocode Theme 1
 */

/**
 * Add CSS styles
 *
 * @return void
 */
function enqueue_styles() {
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() .'/incl/font-awesome/css/font-awesome.min.css', array(), '4.5.0' );
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,700' );
	wp_enqueue_style( 'lightbox', get_template_directory_uri() .'/incl/lightbox/css/lightbox.min.css', array(), '2.8.2' );
	wp_enqueue_style( 'reset-style', get_template_directory_uri() .'/css/reset.css' );
	wp_enqueue_style( 'core-style', get_template_directory_uri() .'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

/**
 * Add javascripts
 *
 * @return void
 */
function enqueue_scripts() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', false, '2.2.4');
	wp_enqueue_script('jquery');

	wp_enqueue_script( 'prefixfree', get_template_directory_uri() .'/incl/prefixfree/prefixfree.1.0.7.min.js', array(), '1.0.7' );
	wp_enqueue_script( 'lightbox', get_template_directory_uri() .'/incl/lightbox/js/lightbox.min.js', array( 'jquery' ), array(), '2.8.2');
	wp_enqueue_script( 'main-js', get_template_directory_uri() .'/js/script.js', array( 'jquery' ) );

	wp_enqueue_script( 'html5-shiv', '//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js', array(), '3.7.3' );
	wp_script_add_data( 'html5-shiv', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );


/**
 * Add lightbox support
 *
 * @return void
 */
function add_lightbox_support($link_html, $post_id) {
	global $post;

	$pattern = "/href=('|\")(.*?).(bmp|gif|jpeg|jpg|png)('|\")/";

	// retrieve pure URL
	preg_match($pattern, $link_html, $result);
	$url = $result[2].'.'.$result[3];

	// retrieve attachment id
	$attachment_id = get_attachment_id_from_src($url);
	$attachment = get_post( $attachment_id );

	// retrieve attachment metadata
	$image_description = $attachment->post_content;
	$image_excerpt = $attachment->post_excerpt;
	$image_alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true );

	// add lightbox tags
	$replacement = "href=$1$2.$3$4 data-lightbox='gallery-%LIGHTID%' data-title='%CAPTION%'";
	$content = preg_replace($pattern, $replacement, $link_html);
	$content = str_replace("%LIGHTID%", $post_id, $content);
	$content = str_replace("%CAPTION%", $image_description, $content);

	return $content;
}
add_filter('wp_get_attachment_link', 'add_lightbox_support');

/**
 * Attachment ID from attachment URL
 *
 * @return attachemd id
 */
function get_attachment_id_from_src ($image_src) {
	global $wpdb;
	$query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$image_src'";
	$id = $wpdb->get_var($query);
	return $id;
}

/**
 * Add basic layout properties
 *
 * @return void
 */
function basic_theme_setup() {

	// set basic images sizes (width, height, crop) -> use: the_post_thumbnail( 'name' );
	add_image_size( 'gallery-item-medium', 300, 500, true );

	// enable featured images
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 150, true );

	// enable RSS feed support
	add_theme_support( 'automatic-feed-links' );

	// no hard coded <title> tag. needs to be set in wordpress
	add_theme_support( 'title-tag' );

	// allows HTML5 markup
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat' ) );

	// enable the excerpt meta box in page edit screen
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'after_setup_theme', 'basic_theme_setup' );

/*
 * Custom Image sizes
 */
function wpshout_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'gallery-item-medium' => __( 'Gallery Medium' ),
    ) );
}
add_filter( 'image_size_names_choose', 'wpshout_custom_sizes' );


/**
 * Add custom navigation
 *
 * @return void
 */
function register_custom_nav_menu() {
	register_nav_menus(array(
		'header-menu' => __( 'Header Menu' ),
		'footer-menu' => __( 'Footer Menu' ),
	 ));
}
add_action( 'init', 'register_custom_nav_menu' );

/**
 * Add theme widgets
 *
 * @return void
 */
function register_custom_widget() {
	register_sidebar( array(
		'name'					=> __( 'Main Sidebar' ),
		'id'						=> 'main_sidebar',
		'before_widget'	=> '<section id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</section>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'		=> '</h2>',
		));
}
add_action( 'widgets_init', 'register_custom_widget' );


/**
 * Customizer additions.
 */
require get_template_directory() . '/customizer.php';

?>
