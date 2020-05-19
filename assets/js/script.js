(function( $ ) {
	$(document).ready(function(){
		
	    // Для мобилы 
        $('.navbar-toggler').click(function() {
            setTimeout(function() {
                $('body, html').toggleClass('overflow');
            }, 600)
        });

	});

	
	/*$(window).on("load resize", function () {
		var imgHeight = $('.section-why .col-md-6').outerHeight();
		$('.section-why .col-md-6').css({
			height: imgHeight
		})
	});
	*/


	var mobileOnlySlider = function() {
		
		function mobileOnlySlider() {
			$('.slick-base').slick({
				autoplay: false,
				slidesToShow: 1,
				slidesToScroll: 1,

				dots: true,
				infinite: true,
				arrows: false
			});
		}

		$(window).on("load resize", function () {
			var slickInit = $('.slick-base').hasClass('slick-initialized');
			if (window.innerWidth < 768) {
				if (!slickInit) {
					mobileOnlySlider();
				}
			} else {
				if (slickInit) {
					$('.slick-base').slick('unslick');
				}
			}
		});
	

	};
	

	var scrollToBottom = function() {
		$('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	};


	 //scroll down btn 2
    /*$('.scroll-down').click(function() {
        var sectionOffset = $(this).parents('section').next('section').offset().top;
        $('body, html').animate({ scrollTop: sectionOffset }, 1500)
    })*/



	var maps = function() {
		$('.maps').click(function () {
			$('.maps iframe').css("pointer-events", "auto");
		});
		$( ".maps" ).mouseleave(function() {
			$('.maps iframe').css("pointer-events", "none"); 
		});
	};


	var headerFixed = function() {
		if ( $( ".header-sticky" ).length ) {

			$(window).on('load scroll', function() {
				var y = $(this).scrollTop();

				if ( y >= 440 ) {
					$('.header-sticky').addClass('float-header');
				} else {
					$('.header-sticky').removeClass('float-header');
				}
			});

		}
	};

	var headerSticky  = function() {
		// When the user scrolls the page, execute myFunction
		window.onscroll = function() {
			myFunction()
		};

		// Get the header
		var header = document.getElementById("header");
		// Get the offset position of the navbar
		var sticky = header.offsetTop;

		// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
		function myFunction() {
			if (window.pageYOffset > sticky) {
				header.classList.add("sticky");
			} else {
				header.classList.remove("sticky");
			}
		}
	};


	var goTop = function() {
		$(window).scroll(function() {
			if ( $(this).scrollTop() > 100 ) {
				$('.go-top').addClass('show');
			} else {
				$('.go-top').removeClass('show');
			}
		});

		$('.go-top').on('click', function() {
			$("html, body").animate({ scrollTop: 0 }, 1000);
			return false;
		});
	};


	// Dom Ready
	$(function() {
		mobileOnlySlider();
		// scrollToBottom();
		// goTop();
		// maps();
		// headerFixed();

		// headerSticky();
	});


})(jQuery);


// searchToggle
function searchToggle(obj, evt){
	var container = $(obj).closest('.form-search');

	if(!container.hasClass('active')){
		container.addClass('active');
		evt.preventDefault();
	}
	else if(container.hasClass('active') && $(obj).closest('.btn-search').length == 0){
		container.removeClass('active');
	}
}


// $(function() {
// 	$('a[href*=#]').on('click', function(e) {
// 		e.preventDefault();
// 		$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
// 	});
// });