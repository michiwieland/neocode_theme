<?php
/**
 * The template for displaying page
 *
 * @package WordPress
 * @subpackage neocode_theme
 * @since Neocode Theme 1
 */

get_header(); ?>

get_header(); ?>


<section class="content">
	<h1>News</h1>

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
				<?php endif; ?>

				<!-- post content -->
				<?php the_content(); ?>

			</article>

		<?php endwhile; ?>

	<?php else : ?>

		<article>

			<h2>Not Found</h2>
			<p><?php _e( "Sorry, but you are looking for something that isn't here." ); ?></p>

		</article>

	<?php endif; ?>

</section>

<!-- Load sidebar -->
<?php get_sidebar(); ?>

<!-- Load footer -->
<?php get_footer(); ?>
