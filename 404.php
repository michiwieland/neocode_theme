<?php
/**
 * The template for displaying 404 pages (not found)
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
				<header>
					<h1>Fehler 404 – Die Seite nicht gefunden.</h1>
				</header>
				<p>Die angeforderte Seite wurde leider nicht gefunden. Bitte verwenden Sie die folgende Suchform</p>

				<?php get_search_form(); ?>
	</section>
</div>

<!-- Load footer -->
<?php get_footer(); ?>
