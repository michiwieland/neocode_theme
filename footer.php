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

		<footer id="footer">
			<div class="container">
				<a href="<?php echo esc_url( 'https://neocode.ch/' ); ?>">NEOCODE</a>

				<?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
				<?php endif; ?>
			</div>
		</footer>

		<?php wp_footer(); ?>

	</body>
</html>
