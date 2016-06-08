<?php
/**
 * The template for displaying comments
 *
 * @package WordPress
 * @subpackage neocode_theme
 * @since Neocode Theme 1
 */
?>
<section>
	<?php if ( have_comments() ) : ?>

		<h2><?php comments_number(); ?></h2>
		<ul>
			<?php wp_list_comments(); ?>
		</ul>

	<?php endif; ?>

	<?php comment_form(); ?>

</section>
