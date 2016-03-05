jQuery( document ).ready( function( $ ) {
	// Header Scroll
	$( window ).on( 'scroll' , function() {
		var scroll = $( window ).scrollTop();

		if ( scroll >= 50 ) {
			$( '#header' ).addClass( 'fixed' );
		} else {
			$( '#header' ).removeClass( 'fixed' );
		}
	});
});
