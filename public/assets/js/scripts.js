/*
Author       : Themesvila
Template Name: Edumon
Version      : 1.0
*/


(function($) {
	'use strict';

		new WOW().init();
		/*PRELOADER JS*/
		
		$(window).on('load', function() { 
			$('.preloader').fadeOut();
			$('.preloader').delay(350).fadeOut('slow'); 
		}); 
				
		/*END PRELOADER JS*/
		
		jQuery(document).ready(function($) {

			
			
		});
		
		
		
		

  	
		/*END Mini Cart JS*/
		
		/* Image Popup */
		 $('.popbtn').magnificPopup({
			 type:'image',
			 gallery:{
				enabled:true
			  }
		});		
		
		 /*START Portfolio*/	
		$('.courses-slider').owlCarousel({
			items : 3,
			autoplay: true,
			center: true,
			loop: true,
			navText: ["<i class='bx bx-chevrons-left'></i>" ,"<i class='bx bx-chevrons-right'></i>"],
			nav: true,
			dots: false,
			margin: 30,
			responsive:{
				0:{
					items:1,
					
				},
				575:{
					items:1,
					
				},
				768:{
					items:2,
					
				},
				1000:{
					items:3,
			
				},
				1200:{
					items:3,
			
				}
			}
		});
		
		/*END Portfolio*/
		$('.job-opt-iimm').owlCarousel({
			items : 1,
			autoPlay: true,
			center: true,
			autoplayTimeout:8000,
			loop: true,
			nav: false,
			dots: true,
		});
		
		/*START PARTNER LOGO*/
		$('.partners').owlCarousel({
			margin: 60,
			autoPlay: 4000, //Set AutoPlay to 3 seconds
			items : 6,			
			nav: false,
			dots: false,
			loop: true,
			responsive:{
				0:{
					items:2,
					
				},
				575:{
					items:3,
					
				},
				768:{
					items:4,
					
				},
				1000:{
					items:5,
			
				},
				1200:{
					items:6,
			
				}
			}
		});
		/*END PARTNER LOGO*/
		
		 /*START Testimonials*/	
		$('.review-slider').owlCarousel({
			items : 3,
			autoplay: true,
			center: true,
			loop: true,
			navText: ["<i class='bx bx-chevrons-left'></i>" ,"<i class='bx bx-chevrons-right'></i>"],
			nav: false,
			dots: true,
			margin: 35,
			responsive:{
				0:{
					items:1,
					
				},
				575:{
					items:1,
					
				},
				768:{
					items:2,
					
				},
				1000:{
					items:3,
			
				},
				1200:{
					items:3,
			
				}
			}
		});

		
		/*END Testimonials*/
		$('.iimm-client').owlCarousel({
		    loop:true,
		    margin:10,
		    autoplay:true,
		    nav: false,
		    dots:false,
		    responsive:{
		        0:{
		            items:2
		        },
		        600:{
		            items:5
		        },
		        1000:{
		            items:8
		        }
		    }
		});
		$('.top-iimm-client').owlCarousel({
		    loop:true,
		    items:6,
		    autoplay:true,
			autoplayTimeout:1000,
		    responsive:{
		        0:{
		            items:3
		        },
		        400:{
		            items:3
		        },
		        565:{
		            items:4
		        },
		        767:{
		            items:5
		        },
		        1000:{
		            items:6
		        }
		    }
		});
$('.sponser-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
	dots:false,
	autoplay:true,
	autoplayTimeout:2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
		/*Start MouseMove*/
		document.addEventListener("mousemove", parallax);
		function parallax(event) {
		  this.querySelectorAll(".eitem").forEach((shift) => {
			const position = shift.getAttribute("value");
			const x = (window.innerWidth - event.pageX * position) / 90;
			const y = (window.innerHeight - event.pageY * position) / 90;

			shift.style.transform = `translateX(${x}px) translateY(${y}px)`;
		  });
		}
		/*End MouseMove*/
		
		/* WOW */
		

})(jQuery);
