/************* Main Js File ************************
    Template Name: Finves
    Vendor: Evrothemes
    Version: 1.0
    Copyright 2020
*************************************************************/

$(window).on('load', function () {

	/*------------------
	Isotope Filter
	--------------------*/
	var $container = $('.isotope_items');
	$container.isotope();

	$('.portfolio-filter li').on("click", function () {
		$(".portfolio-filter li").removeClass("active");
		$(this).addClass("active");
		var selector = $(this).attr('data-filter');
		$(".isotope_items").isotope({
			filter: selector,
			animationOptions: {
				duration: 750,
				easing: 'linear',
				queue: false,
			}
		});
		return false;
	});

});

