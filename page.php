<?php
/**
 * The template for displaying page
 *
 * @package WordPress
 * @subpackage neocode_theme
 * @since Neocode Theme 1
 */
 ?>

 <!-- Load header -->
 <?php get_header(); ?>

<div class="inner">
	<section class="content">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h1><?php the_title()?></h1>

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
</div>

<!-- Load footer -->
<?php get_footer(); ?>
