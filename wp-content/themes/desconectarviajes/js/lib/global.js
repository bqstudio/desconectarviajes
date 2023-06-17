jQuery.noConflict();
jQuery(document).ready(function ($) {

	$('a[href^="#"]').on('click', function (e) {
		e.preventDefault();
		const el = $($(this).attr('href'));
		el.length && $('html, body').animate({ scrollTop: el.offset().top - 90 }, 500);
		$('.responsive__btn').trigger('click');
		return false;
	});

	$(".js-go-top").on('click', function () {
		$([document.documentElement, document.body]).animate({
			scrollTop: ($("body").offset().top)
		}, 400);
	});

	$(window).scroll(function () {
		$(window).scrollTop() >= 5 ? $('body').addClass('scrolled') : $('body').removeClass('scrolled');
	});

	$('.responsive__btn').on('click', () => $('body').toggleClass('menu-responsive-open'));
	$('.js-open-block').click(function () {
		$('.site-menu').fadeToggle();
	});
});