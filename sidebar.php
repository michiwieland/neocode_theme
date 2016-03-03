<?php if ( is_active_sidebar( 'main-sidebar' )	) : ?>
	<aside>
		<?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
			<ul>
				<?php dynamic_sidebar( 'main-sidebar' ); ?>
			</ul>
		<?php endif; ?>
	</aside>
<?php endif; ?>
