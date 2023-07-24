(function($){
	"use strict";
	jQuery(document).on('ready', function () {
		/* Header Sticky
		========================================================*/
        $(window).on('scroll',function() {
            if ($(this).scrollTop() >70){  
                $('.header-sticky').addClass("is-sticky");
            }
            else{
                $('.header-sticky').removeClass("is-sticky");
            }
        });
		
		// Nav Active Code
		/*==============================================================*/
		if ($.fn.classyNav) {
			$('#listingNav').classyNav({
				theme: 'light'
			});
		};
		
		/* Home Slides
        ========================================================*/
        $('.home-slides').owlCarousel({
            items:1,
            loop:true,
            autoplay:true,
            animateOut: 'fadeOut',
            rtl: true,
            nav:true,
            responsiveClass:true,
            dots:false,
            autoplayHoverPause:true,
            mouseDrag:true,
            navText: [
            "<i class='fas fa-angle-left'></i>",
            "<i class='fas fa-angle-right'></i>"
            ],
        });
		
		// Nice Select
		/*==============================================================*/
		$('select').niceSelect();
        
        // Category Slides
        /*==============================================================*/
        $(".category-slider").owlCarousel({
            nav: false,
            dots: true,
            mouseDrag: true,
            autoplay: true,
            rtl: true,
            smartSpeed: 750,
            autoplayHoverPause: true,
            loop: true,
            responsive:{
                0:{
                    items:1,
                },
                768:{
                    items:3,
                },
                1200:{
                    items:5,
                }
            }
        });
        
        // Places Slides
        /*==============================================================*/
        $(".place-slider").owlCarousel({
            nav: false,
            dots: true,
            mouseDrag: true,
            autoplay: true,
            rtl: true,
            smartSpeed: 750,
            autoplayHoverPause: true,
            loop: true,
            responsive:{
                0:{
                    items:1,
                },
                768:{
                    items:2,
                },
                1200:{
                    items:3,
                }
            }
        });
        
        
        // Counter Up
        /*==============================================================*/
        $('.count').counterUp({
            delay: 10,
            time: 1000
        });
        
        // Blog Slides
        /*==============================================================*/
        $(".blog-slider").owlCarousel({
            nav: false,
            dots: true,
            mouseDrag: true,
            rtl: true,
            autoplay: true,
            smartSpeed: 750,
            autoplayHoverPause: true,
            loop: true,
            responsive:{
                0:{
                    items:1,
                },
                768:{
                    items:2,
                },
                1200:{
                    items:3,
                }
            }
        });
        
        // Team Slides
        /*==============================================================*/
        $(".team-slider").owlCarousel({
            nav: false,
            dots: true,
            rtl: true,
            mouseDrag: true,
            autoplay: true,
            smartSpeed: 750,
            autoplayHoverPause: true,
            loop: true,
            responsive:{
                0:{
                    items:1,
                },
                768:{
                    items:2,
                },
                992:{
                    items:3,
                },
                1200:{
                    items:3,
                }
            }
        });
        
        // Testimonials Slides
        /*==============================================================*/
        $(".testimonials-slider").owlCarousel({
            nav: false,
            dots: true,
            mouseDrag: true,
            rtl: true,
            autoplay: true,
            smartSpeed: 750,
            autoplayHoverPause: true,
            loop: true,
            responsive:{
                0:{
                    items:1,
                },
                768:{
                    items:2,
                },
                1200:{
                    items:3,
                }
            }
        });
        
        /* Popup
        ========================================================*/
        $('.popup-youtube').magnificPopup({
            disableOn: 320,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
        
        // Listing Details Slides
        /*==============================================================*/
        $(".listing-details-slider").owlCarousel({
            nav: true,
            dots: false,
            rtl: true,
            mouseDrag: true,
            autoplay: true,
            smartSpeed: 750,
            autoplayHoverPause: true,
            loop: true,
            navText: [
            "<i class='fas fa-angle-left'></i>",
            "<i class='fas fa-angle-right'></i>"
            ],
            responsive:{
                0:{
                    items:1,
                },
                768:{
                    items:2,
                },
                1200:{
                    items:3,
                }
            }
        });
        
        // Zoom Gallery Popup
        /*==============================================================*/
        $('.zoom-gallery').magnificPopup({
            type: 'image',
            gallery:{
                enabled:true
            }
        });
        
        /* Tooltip
        ========================================================*/
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
        
        /* Rating
        ========================================================*/
        $('.rating input').change(function () {
            var $radio = $(this);
            $('.rating .selected').removeClass('selected');
            $radio.closest('label').addClass('selected');
        });
        
        /* Go To Top
        ========================================================*/
        $(function(){
            //Scroll event
            $(window).on("scroll",function(){
                var scrolled = $(window).scrollTop();
                if (scrolled > 200) $('.go-top').fadeIn('slow');
                if (scrolled < 200) $('.go-top').fadeOut('slow');
            });  
            //Click event
            $('.go-top').on('click', function () {
                $("html, body").animate({ scrollTop: "0" },  500);
            });
        });
    });
    
    /* Preloader
    ========================================================*/
    jQuery(window).on('load', function() {
        $('.preloader-area').fadeOut();
    });
}(jQuery));