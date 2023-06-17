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

	$(window).on('resize', function () {
		if ($(window).width() < 1050) {
			$('.responsive__btn').click(function () {
				$('body').toggleClass('menu-responsive-open');
				$('.site-menu').fadeToggle();
			});
		} else {
			// Eliminar los eventos y restablecer el estado original del menú
			$('.responsive__btn').off('click');
			$('.js-open-block').off('click');
			$('.site-menu').fadeIn();
			$('body').removeClass('menu-responsive-open');
		}
	});

	// Ejecutar la verificación inicial al cargar la página
	$(window).trigger('resize');

});