<section>
  <?php if ( have_comments() ) : ?>

	<h1><?php comments_number(); ?></h1>
		<ul>
			<?php wp_list_comments(); ?>
		</ul>

	<?php elseif ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p>Kommentare sind geschlossen</p>

	<?php endif; ?>

	<?php comment_form(); ?>
</section>
