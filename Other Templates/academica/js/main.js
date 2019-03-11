/* =================================
------------------------------------
	Academica - Learning Page Template
	Version: 1.0
 ------------------------------------ 
 ====================================*/


'use strict';

$(window).on('load', function() {
	/*------------------
		Preloder
	--------------------*/
	$(".loader").fadeOut(); 
	$("#preloder").delay(400).fadeOut("slow");

});

(function($) {

	/*------------------
		Navigation
	--------------------*/
	$('.nav-switch').on('click', function(event) {
		$('.main-menu').slideToggle(400);
		event.preventDefault();
	});


	/*------------------
		Background set
	--------------------*/
	$('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});




	/*------------------
		Pricing switch
	--------------------*/
	$('.pricing-switch').on('click', function(event) {
		$(this).toggleClass('annual');
		$('.mp-chart').show();
		$('.ap-chart').hide();
		if($(this).hasClass('annual')){
			$('.mp-chart').hide();
			$('.ap-chart').show();
		}
	});


	/*------------------
		Course Carousel
	--------------------*/
    $('.course-slider').owlCarousel({
		loop:true,
		autoplay:true,
		margin:30,
		nav:false,
		dots: true,
		responsive:{
			0:{
				items:1,
				margin:10
			},
			800:{
				items:2
			},
			1000:{
				items:3
			}
		}
	});


	/*------------------
		Review Slider
	--------------------*/
	$('.review-slider').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        items: 1,
        dots: false,
        autoplay: true,
    });



	/*------------------
		Accordions
	--------------------*/
	$('.panel-link').on('click', function (e) {
		$('.panel-link').removeClass('active');
		var $this = $(this);
		if (!$this.hasClass('active')) {
			$this.addClass('active');
		}
		e.preventDefault();
	});



	/*------------------
		Circle progress
	--------------------*/
	$('.circle-progress').each(function() {
		var cpvalue = $(this).data("cpvalue");
		var cpid 	= $(this).data("cpid");

		$(this).append('<div class="'+ cpid +'"></div><div class="progress-info"><h2>'+ cpvalue +'%</h2></div>');

		if (cpvalue < 100) {

			$('.' + cpid).circleProgress({
				value: '0.' + cpvalue,
				size: 176,
				thickness: 2,
				fill: {
				      gradient: [ "#7076fc","#185dd0"]
				},
				emptyFill: "rgba(0, 0, 0, 0)"
			});
		} else {
			$('.' + cpid).circleProgress({
				value: 1,
				size: 176,
				thickness: 2,
				fill: {
				    gradient: [ "#7076fc","#185dd0"]
				},
				emptyFill: "rgba(0, 0, 0, 0)"
			});
		}

	});


})(jQuery);

