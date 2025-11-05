/**
 * Theme scripting
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
  "use strict";
  
	// global vars
	var navHeight = $('#mobile-nav > .menu').outerHeight();

	//Hamburger animation
	$('#menu-icon').click(function() {
		$(this).toggleClass('active');
		return false;
	});

	//Toggle mobile menu & search
	$('.toggle-nav').click(function() {
		$('#mobile-nav').slideToggle(200);
	});
	 
	//Close navigation on anchor tap
	$('.toggle-nav.active').click(function() {	
		$('#mobile-nav').slideUp(200);
	});	

	//Mobile menu accordion toggle for sub pages
	$('#mobile-nav > ul > li.menu-item-has-children').append('<div class="accordion-toggle"><span class="icon-arrow-down"></span></div>');
	  $('#mobile-nav .accordion-toggle').click(function() {
		$(this).parent().find('> ul').slideToggle(200);
		$(this).toggleClass('toggle-background');
		$(this).find('.icon-arrow-down').toggleClass('toggle-rotate');
	  });
  
  // Init
	function init() {
		mobileNav();
	}

/* script for bio content swap */
	
	$('.bio-buttons div').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('.bio-buttons div').removeClass('current');
		$('.bio-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	});

    //keeps menu expanded so user can tab through sub-menu, then closes menu after user tabs away from last child
    $(document).ready(function() {
        $('.menu-item-has-children').on('focusin', function() {
            var subMenu = $(this).find('.sub-menu');
            subMenu.css('display', 'block');

            $(this).find('.sub-menu > li:last-child').on('focusout', function() {
                subMenu.css('display', 'none');
            });

            $('html').on('click', function(e) {
                var target = e.target;
                if( $(target).closest('.menu-item').length ) {
                    return;
                } else {
                    subMenu.css('display', 'none');
                }
            });
        });
    });

    //add tab attribute to accordion & expand accordion on tab
    $(document).ready(function() {
        if( $('.accordions').length ) {
            $(this).find('ul > li > h2, ul > li > p').attr('tabindex', '0'); //adds or tabindex to make elements tabbable

            $('.accordions').on('mousedown', function(e) { //fixes event bubbling issue w/ click and focus
                e.preventDefault();
            });

            $('.accordions').on('focusin', function() { //toggles the accordions on tab
                var checkBoxes = $(this).find('input[type=checkbox]:checked');
                checkBoxes.prop("checked", !checkBoxes.prop("checked"));
            });
        }
    });

    // addclass for on-page-nav 
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 1200) {
            $(".collapsed").addClass("show");
        } else {
            $(".collapsed").removeClass("show");
        }
    });

    // script to make accordions function
	$(".on-page-nav").on("click", ".on-page-nav_title", function() {
        // will (slide) toggle the related panel.
        $(this).toggleClass("active").next().slideToggle();
    });

    $(".on-page-nav").on("click", ".nav-link", function() {
        // will (slide) toggle the related panel.
        $('.on-page-nav').toggleClass("active");
        $('.on-page-nav_content').slideToggle(); 
    });

    // Toggle search function in nav
	$( document ).ready( function() {
		var width = $(document).outerWidth();
		if (width > 992) {
			var open = false;
			$('#search-button').attr('type', 'button');
			
			$('#search-button').on('click', function(e) {
					if ( !open ) {
						$('#search-input-container').removeClass('hdn');
						$('#search-button span').removeClass('icon-magnifying-glass').addClass('icon-close-x');
						$('#menu-main-menu li.menu-item').addClass('disable');
						open = true;
						return;
					}
					if ( open ) {
						$('#search-input-container').addClass('hdn');
						$('#search-button span').removeClass('icon-close-x').addClass('icon-magnifying-glass');
						$('#menu-main-menu li.menu-item').removeClass('disable');
						open = false;
						return;
					}
			}); 
			$('html').on('click', function(e) {
				var target = e.target;
				if( $(target).closest('.navbar-form-search').length ) {
					return;
				} else {
					if ( open ) {
						$('#search-input-container').addClass('hdn');
						$('#search-button span').removeClass('icon-close-x').addClass('icon-magnifying-glass');
						$('#menu-main-menu li.menu-item').removeClass('disable');
						open = false;
						return;
					}
				}
			});
		}
	});


	$(document).ready(function () {
		var $windowWidth = $(window).width();
		if ($windowWidth < 600) {
			if ($('.info-popup').length) {
				$('.info-popup').append('<div class="mobile-close">x</div>');
			}
			$('.info-bubble').on('click', function () {
				$(this).find('.info-popup').toggleClass('active');
			})
			$('.info-popup .mobile-close').on('click', function () {
				$(this).parent('.info-popup').toggleClass('active');
			})
		}
	})

});

