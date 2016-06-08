<?php
/**
 * The template for displaying the searchform
 *
 * @package WordPress
 * @subpackage neocode_theme
 * @since Neocode Theme 1
 */
?>

<form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="search" class="search-field" value="<?php echo get_search_query(); ?>" name="s" placeholder="Search" />
</form>
