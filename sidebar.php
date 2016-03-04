<?php
/**
 * The template for displaying the sidebar
 *
 * @package WordPress
 * @subpackage neocode_theme
 * @since Neocode Theme 1
 */

if ( is_active_sidebar( 'main-sidebar' )  ) : ?>
	<aside class="main-sidebar">
	  <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
	  	<ul>
	  		<?php dynamic_sidebar( 'main-sidebar' ); ?>
	  	</ul>
	  <?php endif; ?>
	</aside>
<?php endif; ?>
