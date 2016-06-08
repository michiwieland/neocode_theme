<?php
/**
 * The template for displaying the searchfield
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
					<h1>Suchresultate für: <?php printf(esc_html( get_search_query() )); ?></h1>
				</header>

				<?php if ( have_posts() ) : ?>
			  	<?php while ( have_posts() ) : the_post(); ?>

			  		<?php the_content() ?>

					<?php endwhile; ?>

		  	<?php else : ?>

					<article>

					  <h2>Nichts gefunden</h2>
					  <p>Sorry, für diesen Suchbegriff existieren leider keine Enträge</p>

					</article>

		  	<?php endif; ?>
			</section>

		</div>

		<!-- Load footer -->
		<?php get_footer(); ?>
