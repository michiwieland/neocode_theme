	<footer>

		<a href="<?php echo esc_url( __( 'https://neocode.ch/') ); ?>">NEOCODE</a>

		<?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
		<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
		<?php endif; ?>
	</footer>
	<?php wp_footer(); ?>
	</body>
</html>
