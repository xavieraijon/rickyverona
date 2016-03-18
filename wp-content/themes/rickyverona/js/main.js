/* global google */
/* global webshim */
/* global WOW */
(function(){
	'use strict';

	// ------------------------------------------ //
	// WOW Animate
	// ------------------------------------------ //
	if (screen.width > 740) {
		new WOW().init();
	}
	
	// ------------------------------------------ //
	// Flexslider
	// ------------------------------------------ //
	// $('.flexslider').flexslider({
	// 	slideshow: true,
	// 	slideshowSpeed: 8000,
	// 	animationSpeed: 2000,
	// 	controlNav: false,
	// 	directionNav: false
	// });
    
	// ------------------------------------------ //
	// Vegas Slider
	// ------------------------------------------ //
	var bgList = $('.slider-images').children();
	var backgrounds = [];
	
	$.each(bgList, function() {
		var url = $(this).data('src');
		var item = {};

		item['src'] = url;
		backgrounds.push(item);
	});

	// console.log(JSON.stringify(backgrounds));

	$('.vegas').vegas({
		slides: backgrounds,
		delay: 10000,
		overlay: true,
		transition: [ 'fade', 'blur', 'zoomOut'],
		transitionDuration: 3000,
		animation: 'random'
	});

	// ------------------------------------------ //
	// Menu Stick to Top
	// ------------------------------------------ //
	$(document).on('scroll', function() {
		menuStick();
	});

	function menuStick() {
		if ($(window).scrollTop() > $("#main-header").height()){
			$("#main-header .navbar-default").addClass("stuck").removeClass("normal");
			$(".navbar-brand > img").addClass("stuck-img").removeClass("normal-img");
		}
		else {
			$("#main-header .navbar-default").removeClass("stuck").addClass("normal");
			$(".navbar-brand > img").removeClass("stuck-img").addClass("normal-img");
		}
	}

	// ------------------------------------------ //
	// Owl Carousel 2
	// ------------------------------------------ //
	$(".owl-carousel-tendencias").owlCarousel({
		loop: true,
		items: 2,
		dots: true,
		margin: 30,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		responsiveClass: true,
		responsive: {
		    0: {
		        items: 1,
		        dots: true
		    },
		    600: {
		        items: 2
		    }
		}
	});

	$(".owl-carousel").owlCarousel({
		items: 4,
		responsiveClass: true,
		responsive: {
		    0:{
		        items:1
		    },
		    600:{
		        items:2
		    },
		    900:{
		        items:3
		    }
		}		
	});

	
	// ------------------------------------------ //
	// Magnific Popup
	// ------------------------------------------ //
	$('.owl-carousel-salon').magnificPopup({
		delegate: 'a', // child items selector, by clicking on it popup will open
		type: 'image'
		// other options
	});	

	// ------------------------------------------ //
	// Scroll To Menu
	// ------------------------------------------ //
	$('.navbar-nav a, .down-icon > a, .footer-nav a').on('click', function(event) {
		$('.navbar-nav').find('li').removeClass('active');
		$(this).parent().addClass("active");		
		$(window).scrollTo($(this).attr('href'), 800, { offset: -60 });
		event.preventDefault();
	});

	// ------------------------------------------ //
	// HTML5 Forms Polyfill
	// ------------------------------------------ //
	webshim.polyfill('forms forms-ext');

	// ------------------------------------------ //
	// Contact Form
	// ------------------------------------------ //
	$('#contact-form').on('submit', function(event) {
		event.preventDefault();
	});

})();

// var map;

// function initialize() {
//   var mapOptions = {
//     zoom: 17,
//     center: new google.maps.LatLng(41.3987779, 2.1644053,17),
//     mapTypeId: google.maps.MapTypeId.ROADMAP
//   };
//   map = new google.maps.Map(document.getElementById('map-canvas'),
//       mapOptions);
// }

// google.maps.event.addDomListener(window, 'load', initialize);