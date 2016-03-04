<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage neocode_theme
 * @since Neocode Theme 1
 */

get_header(); ?>

<main role="main">
	<section>
		<header>
			<h1>Fehler 404 – Die Seite wurde leider nicht gefunden.</h1>
		</header>

		<p>Bitte verwenden Sie die folgende Suchform</p>

		<?php get_search_form(); ?>
	</section>

	<?php get_sidebar(); ?>

</main>

<?php get_footer(); ?>
