<?php
/**
 * The template for displaying a single post/page
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

			<article>
				<!-- post header -->
				<header>
					<h1>
						<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h1>
				</header>

				<!-- post thumbnail -->
				<div class="post-content">
						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="post-thumbnail">
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<?php the_post_thumbnail('full'); ?>
								</a>
							</div>
						<?php endif; ?>

						<!-- post content -->
						<div class="post-text">
							<?php the_content(); ?>
						</div>

						<!-- comments -->
						<?php
								if ( comments_open() || get_comments_number() ) {
									comments_template();
								}
						?>
				</div>
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
