jQuery(function ($){

	// Toggle sub mobile menu
	$(".hamburger").first().click(function() {
		$(this).siblings("div").find("ul").first().toggle("fast");
	});

	// Toggle submenues in mobile view
	$( "nav ul > li > a" ).click(function(event) {
		if($(".hamburger").first().is(':visible') && $(this).next( "ul" ).length != 0){
			event.preventDefault();
			$(this).parent("li").siblings("li ").each(function(){
				$(this).find( "ul" ).hide();
			});
			$(this).next( "ul" ).first().toggle("fast");
		}
	});
	
});
