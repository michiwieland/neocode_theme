<?php
/**
 * The template for displaying the sidebar
 *
 * @package WordPress
 * @subpackage neocode_theme
 * @since Neocode Theme 1
 */

if ( is_active_sidebar( 'main_sidebar' )  ) : ?>
	<aside>
		<div class="inner">
			<?php dynamic_sidebar( 'main_sidebar' ); ?>
		<div class="inner">
	</aside>
<?php endif; ?>
