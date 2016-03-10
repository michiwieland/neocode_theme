<?php
/**
 * The template for displaying the sidebar
 *
 * @package WordPress
 * @subpackage neocode_theme
 * @since Neocode Theme 1
 */

if ( is_active_sidebar( 'main_sidebar' )  ) : ?>
	<aside class="main-sidebar">
		<ul>
			<?php dynamic_sidebar( 'main_sidebar' ); ?>
		</ul>
	</aside>
<?php endif; ?>
