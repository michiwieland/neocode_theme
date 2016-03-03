<?php
/**
 * The template for displaying the searchform
 *
 * @package WordPress
 * @subpackage neocode_theme
 * @since Neocode Theme 1
 */
?>

<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<div>
		<label class="screen-reader-text" for="s">Search:</label>
		<input type="text" value="" name="s" id="s" placeholder="Search" />
		<input type="submit" value="Search" />
	</div>
</form>
