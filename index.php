<?php
/**
 * The template for displaying the main content
 *
 * @package WordPress
 * @subpackage neocode_theme
 * @since Neocode Theme 1
 */

get_header(); ?>

<section class="content">
	<h1>News</h1>

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- post header -->
				<header>
					<h2>
						<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h2>
					<p>by <?php the_author(); ?></p>
				</header>

				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
				<?php endif; ?>

				<!-- post content -->
				<?php the_excerpt(); ?>

				<!-- post footer -->
				<footer>
					<ul>
						<li>Title: <?php the_title(); ?></li>
						<li>Posted: <time datetime="<?php the_time( 'Y-m-d' ) ?>"><?php the_time( 'd.m.Y' ) ?></time></li>
						<li>Author: <?php the_author(); ?></li>
						<li>Categories: <?php the_category( ', ' ); ?></li>
						<li>Comments: <?php if ( comments_open( get_the_ID() ) ) { comments_popup_link( 'Comment', '1 Comment', '% Comments' ); } ?></li>
				  </ul>
				</footer>

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
