/************* Main Js File ************************
    Template Name: Finves
    Vendor: Evrothemes
    Version: 1.0
    Copyright 2020
*************************************************************/


/*------------------------------------------------------------------------------------
    
JS INDEX
=============
01 - Main Slider JS
02 - Service Slider JS
03 - Client Slider JS
04 - Testimonial Slider JS
05 - Select
06 - Youtube Popup JS
07 - Counter JS
08 - Responsive Menu
09 - Back To Top



-------------------------------------------------------------------------------------*/


(function ($) {
	"use strict";

	jQuery(document).ready(function ($) {

		/* 
		=================================================================
		01 - Main Slider JS
		=================================================================	
		*/
		$(".finves-slide").owlCarousel({
			animateOut: 'fadeOutLeft',
			animateIn: 'fadeIn',
			items: 1,
			nav: true,
			dots: false,
			autoplayTimeout: 7000,
			autoplaySpeed: 2000,
			autoplay: true,
			loop: true,
			navText: ["<i class='fa fa-long-arrow-left'><i>", "<i class='fa fa-long-arrow-right'><i>"],
			mouseDrag: true,
			touchDrag: true,
		});
		$(".finves-slide").on("translate.owl.carousel", function () {
			$(".finves-main-slide h2, .finves-main-slide p").removeClass("animated fadeInUp").css("opacity", "0");
			$(".finves-main-slide .finves-btn").removeClass("animated fadeInDown").css("opacity", "0");
		});
		$(".finves-slide").on("translated.owl.carousel", function () {
			$(".finves-main-slide h2, .finves-main-slide p").addClass("animated fadeInUp").css("opacity", "1");
			$(".finves-main-slide .finves-btn").addClass("animated fadeInDown").css("opacity", "1");
		});

		$(".finves-slide").on("translate.owl.carousel", function () {
			$(".finves-main-slide h3").removeClass("animated fadeOutRight").css("opacity", "0");
		});
		$(".finves-slide").on("translated.owl.carousel", function () {
			$(".finves-main-slide h3").addClass("animated fadeInLeft").css("opacity", "1");
		});


		/* 
		=================================================================
		02 - Service Slider JS
		=================================================================	
		*/

		$(".service-slider").owlCarousel({
			autoplay: true,
			loop: true,
			margin: 0,
			touchDrag: true,
			mouseDrag: true,
			nav: true,
			dots: false,
			autoplayTimeout: 6000,
			autoplaySpeed: 1200,
			navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			responsive: {
				0: {
					items: 1
				},
				480: {
					items: 1
				},
				600: {
					items: 2
				},
				1000: {
					items: 3
				},
				1200: {
					items: 3
				}
			}
		});


		/* 
		=================================================================
		03 - Client Slider JS
		=================================================================	
		*/

		$(".client-slider").owlCarousel({
			autoplay: true,
			loop: true,
			margin: 20,
			touchDrag: true,
			mouseDrag: true,
			nav: false,
			dots: false,
			autoplayTimeout: 6000,
			autoplaySpeed: 1200,
			navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			responsive: {
				0: {
					items: 2
				},
				480: {
					items: 2
				},
				600: {
					items: 3
				},
				760: {
					items: 4
				},
				800: {
					items: 4
				},
				1000: {
					items: 5
				},
				1200: {
					items: 6
				}
			}
		});

		/* 
		=================================================================
		04 - Testimonial Slider JS
		=================================================================	
		*/

		$(".testimonial-sldier").owlCarousel({
			autoplay: true,
			loop: true,
			margin: 0,
			items: 1,
			touchDrag: true,
			mouseDrag: true,
			nav: true,
			dots: false,
			autoplayTimeout: 6000,
			autoplaySpeed: 1200,
			navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
		});


		/* 
		=================================================================
		05 - Select
		=================================================================	
		*/

		$('select').niceSelect();


		/* 
		=================================================================
		06 - Youtube Popup JS
		=================================================================	
		*/

		$('.popup-youtube').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});


		/* 
		=================================================================
		07 - Counter JS
		=================================================================	
		*/


		$('.counter').counterUp({
			delay: 10,
			time: 1000
		});

		/* 
		=================================================================
		08 - Responsive Menu
		=================================================================	
		*/
		$("ul#navigation_menu").slicknav({
			prependTo: ".finves-responsive-menu"
		});


		/* 
		=================================================================
		09 - Back To Top
		=================================================================	
		*/
		if ($("body").length) {
			var btnUp = $('<div/>', {
				'class': 'btntoTop'
			});
			btnUp.appendTo('body');
			$(document).on('click', '.btntoTop', function () {
				$('html, body').animate({
					scrollTop: 0
				}, 700);
			});
			$(window).on('scroll', function () {
				if ($(this).scrollTop() > 200) $('.btntoTop').addClass('active');
				else $('.btntoTop').removeClass('active');
			});
		}


	});


}(jQuery));

