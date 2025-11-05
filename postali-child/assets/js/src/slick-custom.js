/**
 * Slick Custom
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";

	$('#recent-news-slides').slick({
		dots: false,
		infinite: true,
		fade: true,
		autoplay: false,
		slidesToShow: 1,
		slidesToScroll: 1,
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
		arrows:true,
		prevArrow: $('#news-slides-prev'),
		nextArrow: $('#news-slides-next'),
	});

	$('#recent-news-slides-2').slick({
		dots: false,
		infinite: true,
		fade: true,
		autoplay: false,
		slidesToShow: 1,
		slidesToScroll: 1,
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
		arrows:true,
		prevArrow: $('#news-slides-prev-2'),
		nextArrow: $('#news-slides-next-2'),
	});

	$('#notable-results-slides').slick({
		dots: false,
		infinite: true,
		autoplay: false,
		slidesToShow: 2,
		slidesToScroll: 1,
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
		arrows:true,
		prevArrow: $('#results-prev'),
		nextArrow: $('#results-next'),
		responsive: [
			{
			  breakpoint: 992,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
				dots: false
			  }
			}
		  ]
		
	});

	$('#awards-slides').slick({
		dots: false,
		infinite: true,
		autoplay: false,
		slidesToShow: 6,
		slidesToScroll: 1,
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
		arrows:true,
		prevArrow: $('#awards-slides-prev'),
		nextArrow: $('#awards-slides-next'),
		responsive: [
			{
			  breakpoint: 992,
			  settings: {
				slidesToShow: 4,
				slidesToScroll: 1,
				infinite: true,
				dots: false
			  }
			},
			{
				breakpoint: 768,
				settings: {
				  slidesToShow: 2,
				  slidesToScroll: 1,
				  infinite: true,
				  dots: false
				}
			  },
			  {
				breakpoint: 480,
				settings: {
				  slidesToShow: 1,
				  slidesToScroll: 1,
				  infinite: true,
				  dots: false
				}
			  }
		  ]
	});
	
});