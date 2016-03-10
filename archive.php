<?php
/**
 * The template for displaying archive page
 *
 * @package WordPress
 * @subpackage neocode_theme
 * @since Neocode Theme 1
 */

get_header(); ?>

<section>
  <?php if ( have_posts() ) { } ?>

		<header>
			<?php
				the_archive_title( '<h1>', '</h1>' );
				the_archive_description( '<div>', '</div>' );
			?>
		</header>

  <?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content() ?>

		<?php endwhile; ?>

	<?php else : ?>

		<article>

			<h2>Not Found</h2>
			<p><?php _e( "Sorry, but you are looking for something that isn't here." ); ?></p>

		</article>

	<?php endif; ?>
</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
