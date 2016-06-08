<?php
/**
 * The template for displaying the header
 *
 * @package WordPress
 * @subpackage neocode_theme
 * @since Neocode Theme 1
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="NEOCODE">
		<meta name="description" content="<?php bloginfo(); ?>">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class( $class ); ?>>

	<!-- HEADER -->
	<header>
		<div class="inner">

			<!-- LOGO -->
			<a id="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>'>
				<img src='<?php echo get_template_directory_uri() . '/img/logo.svg';?>' alt='Logo <?php echo esc_attr( get_bloginfo( 'name' ) ); ?>'>
			</a>
		</div>
	</header>
	<!-- END HEADER -->

	<!-- NAVIGATION -->
	<nav>
		<div class="inner">

			<!-- MOBILE HAMBURGER -->
			<i class="fa fa-bars hamburger" aria-hidden="true"></i>

			<!-- MENU -->
			<?php if ( has_nav_menu( 'header-menu' ) ) : ?>
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			<?php endif; ?>

			<!-- SEARCH FORM -->
			<?php get_search_form(); ?>

		</div>
	</nav>

	<!-- CONTENT -->
	<main>
