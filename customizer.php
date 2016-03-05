<?php
/**
 * Customizer functionality
 *
 * @package WordPress
 * @subpackage neocode_theme
 * @since Neocode Theme 1
 */



add_action( 'customize_register', 'themeslug_theme_customizer' );
/**
 * Custom logo
 *
 * @return void
 */
function themeslug_theme_customizer( $wp_customize ) {
	$wp_customize->add_section( 'custom_logo_section' , array(
		'title'				=> 'Logo',
		'priority'		=> 30,
		'description' => 'Upload a logo to replace the default site name',
		)
	);
	$wp_customize->add_setting( 'custom_logo' );
	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize,
		'custom_logo',
		array(
			'label'		=> 'Logo',
			'section'	=> 'custom_logo_section',
			'settings' => 'custom_logo',
		)
	));

}

?>
