<?php
/**
 * The template for displaying the static front page
 *
 * @package WordPress
 * @subpackage neocode_theme
 * @since Neocode Theme 1
 */

get_header();

$templates = wp_get_theme()->get_page_templates();
foreach ( $templates as $template_filename => $template_name ) {
	  $filename_without_extension = substr($template_filename, 0, (strlen( $template_filename )) - (strlen( strrchr( $template_filename, '.' ) ) ) );
		$pattern = '/^'. preg_quote('templates/onepage-', '/') .'/';
		if ( preg_match( $pattern,  strtolower( $filename_without_extension ) ) ) {
			get_template_part( $filename_without_extension );
		}
}

get_footer();
?>
