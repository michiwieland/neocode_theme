<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage neocode_theme
 * @since Neocode Theme 1
 */
?>

		</main> <!-- END MAIN CONTAINER -->

		<!-- SOCIAL -->
		<section id="social">
			<a href="<?php echo esc_url( '' ); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
			<a href="<?php echo esc_url( '' ); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="<?php echo esc_url( '' ); ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
			<a href="<?php echo esc_url( '' ); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
		</section>

		<footer>

			<!-- WIDGETS -->
			<?php get_sidebar(); ?>

			<div class="inner">

				<!-- SITE INFO -->
				<small id="site-info"> &copy; <?php echo date('Y'); ?>  <a href="<?php echo esc_url( 'https://gioannamichel.ch/' ); ?>">GIOANNA MICHEL</a></small>

				<!-- AUTHOR -->
				<small><a id="author" rel="author" href="<?php echo esc_url( 'https://neocode.ch/' ); ?>">NEOCODE</a><small>
			</div>
		</footer>

		<?php wp_footer(); ?>

	</body>
</html>
