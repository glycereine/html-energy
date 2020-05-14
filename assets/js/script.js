



(function( $ ) {
	$(document).ready(function(){
		
	});

	// $(window).load(function() {

	// });

	$(window).resize(function() {

	});

	$(window).scroll(function() {

	});

	var mainSlider = function() {
		$('.main-slider').slick({
			dots: true,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 4000,
			speed: 500,
			fade: true,
			arrows: true,
			adaptiveHeight: true,
			responsive: [
				{
					breakpoint: 993,
					settings: {
						arrows: false
					}
				}
				
		    ]
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

			var headerFix = $('.header-sticky').offset().top;
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


	var sticky = function() {
		// When the user scrolls the page, execute myFunction
		window.onscroll = function() {myFunction()};

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
		// mainSlider();
		// scrollToBottom();
		// goTop();
		// maps();
		// headerFixed();

		// sticky();
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