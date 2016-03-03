<?php get_header(); ?>

	<main role="main">
	<section>
		<?php if ( have_posts() ) : ?>

			<header>
				 <h1>
			 <?php printf( __( 'Search Results for: %s' ) '<span>' . esc_html( get_search_query() ) . '</span>' ); ?>
			</h1>
			</header>

		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

			<?php the_content() ?>

		<?php endwhile; ?>

		<?php else : ?>

		<article>

			<h2>Not Found</h2>
			<p><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>

		</article>

		<?php endif; ?>
	</section>

	<?php get_sidebar(); ?>

	</main>

<?php get_footer(); ?>
