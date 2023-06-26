jQuery.noConflict();
jQuery(document).ready(function ($) {



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

			$('.js-open-block').click(function (event) {
				event.stopPropagation();
				// Lógica para abrir y cerrar el menú aquí
			});

			// Agrega este código para cerrar el menú móvil al hacer clic en un enlace dentro del menú
			$('.site-menu a').click(function () {
				if ($('body').hasClass('menu-responsive-open')) {
					$('body').removeClass('menu-responsive-open');
					$('.site-menu').fadeOut();
				}
			});
		} else {
			$('.responsive__btn').off('click');
			$('.js-open-block').off('click');
			$('.site-menu').fadeIn();
			$('body').removeClass('menu-responsive-open');
		}
	});

	$(window).trigger('resize');


});