<?php
/**
 * The template for displaying archive page
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

	<?php if ( have_posts() ) { } ?>

		<header>
			<?php
				the_archive_title( '<h1>', '</h1>' );
				the_archive_description( '<div>', '</div>' );
			?>
		</header>

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- post meta -->
				<aside>
					<header>
						<h2>
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h2>
					</header>
					<ul>
						<li><time datetime="<?php the_time( 'Y-m-d' ) ?>"><?php the_time( 'd.m.Y' ) ?></time></li>
						<li><?php the_author(); ?></li>
						<li><?php the_category( ', ' ); ?></li>
						<li><?php if ( comments_open( get_the_ID() ) ) { comments_popup_link( 'Kommentar', '1 Kommentar', '% Kommentare' ); } ?></li>
					</ul>
				</aside>

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
							<?php the_excerpt(); ?>

							<a href="<?php the_permalink() ?>" class="read-more">
								Alles anzeigen &raquo
							</a>
						</div>
				</div>
			</article>

		<?php endwhile; ?>

	<?php else : ?>

		<article>

			<h2>Nichts gefuden</h2>
			<p><?php _e( "Sorry, but you are looking for something that isn't here." ); ?></p>

		</article>

	<?php endif; ?>
</section>

</div>

<!-- Load footer -->
<?php get_footer(); ?>
