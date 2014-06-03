// Homepage Functions 

(function($){
	$('#tabs a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	
	// Remove tabbed menu once at sizes larger than mobile

	if (screen.width > 480) {
		$('.tab-content').removeClass().addClass('row');
	}

	// Reset menu on click -- needed because links are 
	// going to in-page as opposed to refreshing page
	
	$('header .menu a').click(function() { 
		$('.fm-inner').css('left','0');
		$('.fm-offcanvas').css('left', '-70%');
	});

	// Scrolling 

	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
				$('html,body').animate({
  				scrollTop: target.offset().top
			}, 1000);
			return false;
				}
			}
		});
})(jQuery);