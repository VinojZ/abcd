// Set Cookie in Blog Index 

(function($){
	
	// Set cookie value on click of 'Close Button'
	$('#close-button').click(function(e) {
		e.preventDefault();
		$('#top-content').hide('slow');
		$.cookie('blog-cookie', { expires: 180 });
	});
	
	// Test if cookie exists. If so, hide blog-intro
	if ($.cookie('blog-cookie')) {
		$('#top-content').hide();
	}

})(jQuery);