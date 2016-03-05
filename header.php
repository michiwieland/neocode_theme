<?php
/**
 * The template for displaying the header
 *
 * @package WordPress
 * @subpackage neocode_theme
 * @since Neocode Theme 1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="NEOCODE">
		<meta name="description" content="<?php bloginfo(); ?>">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class( $class ); ?>>
		<section class="banner" >
			<header id="header">
				<div class="container">
					<!-- LOGO -->
					<?php if ( get_theme_mod( 'custom_logo' ) ) : ?>
						<a id="logo" rel='home' href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>'>
							<img src='<?php echo esc_url( get_theme_mod( 'custom_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>'>
						</a>
					<?php else : ?>
						<h1><?php bloginfo( 'name' ); ?></h1>
					<?php endif; ?>

					<!-- NAVIGATION -->
					<nav>
						<?php if ( has_nav_menu( 'header-menu' ) ) : ?>
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
						<?php endif; ?>
					</nav>
					<a class="nav-toggles" href="#"></a>
				</div>
			</header>
		</section>
