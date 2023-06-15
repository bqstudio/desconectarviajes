jQuery.noConflict();
jQuery(document).ready(function($){

	$('a[href^="#"]').on('click', function(e){
		e.preventDefault();
		const el = $($(this).attr('href'));
	    el.length && $('html, body').animate({ scrollTop: el.offset().top - 90}, 500);
		return false;
	});

	$(".js-go-top").on('click', function() {
		$([document.documentElement, document.body]).animate({
			scrollTop: ($("body").offset().top)
		}, 400);
	});

});