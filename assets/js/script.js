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


	var scrollToDown = function() {
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
    $('.scroll-down').click(function() {
        var sectionOffset = $(this).parents('section').next('section').offset().top;
        $('body, html').animate({ scrollTop: sectionOffset }, 1500)
    })



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


	var sectionSearch = function() {
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
	}


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



window.on_main=false
window.total_price = 0.45;
window.currency_symbol = {}
window.currency_symbol.rur='руб';
window.currency_symbol.uah='грн';
window.currency_symbol.usd='usd';
window.currency_symbol.eur='eur';

window.currency=[];
window.currency.rur=58;
window.currency.uah=27.2;
window.currency.eur=0.926;
window.currency.usd=1;

//window.vdsorderlink="https://my.hosting.energy/billmgr";
//XXX&project=1

if ($.cookie('curr')) {
	if(window.location.pathname.indexOf("/en/") > -1 && ($.cookie('curr')=='rur' || $.cookie('curr')=='uah'))
		window.curr='usd';
	else
		window.curr=$.cookie('curr');
}

else

	window.curr='usd';

$(function() {

	window.bk_total_price=$("#total_price").data('usd-price')
	
	
    
	if($("#hosting-configurator").length)
	{
		window.on_main=true
		window.orderlink=$( ".button-order" ).attr('href');
		
		$( "#total_price" ).html( window.total_price );

		$( "#sites" ).slider({
			// animate: true,
			orientation: "horizontal",
     		range: "min",
			min: 1,
			max: 40,
			step: 1,
			slide: function( event, ui ) {
				$( "#sites_amount" ).val( ui.value );
				count_total_price();
			}
		});
		$("#sites_amount").change(function() {
		    $("#sites").slider(
		    	'value', $(this).val(), count_total_price()
		    );
		});


		$( "#databases" ).slider({
			// animate: true,
			orientation: "horizontal",
     		range: "min",
			min: 1,
			max: 40,
			step: 1,
			slide: function( event, ui ) {
				$( "#databases_amount" ).val( ui.value );
				count_total_price();
			}
		});
		$("#databases_amount").change(function() {
		    $("#databases").slider(
		    	'value', $(this).val(), count_total_price()
		    );
		});

		$( "#disk" ).slider({
			// animate: true,
			orientation: "horizontal",
     		range: "min",
			min: 3000,
			max: 15000,
			step: 1000,
			slide: function( event, ui ) {
				$( "#disk_amount" ).val( ui.value );
				count_total_price();
			}
		});
		$("#disk_amount").change(function() {
		    $("#disk").slider(
		    	'value', $(this).val(), count_total_price()
		    );
		});

		$( "#ram" ).slider({
			// animate: true,
			orientation: "horizontal",
     		range: "min",
			min: 160,
	 		max: 1120,
			step: 64,
			slide: function( event, ui ) {
				$( "#ram_amount" ).val( ui.value );
				count_total_price();
			}
		});
		$("#ram_amount").change(function() {
		    $("#ram").slider(
		    	'value', $(this).val(), count_total_price()
		    );
		});

		$( "#ip" ).slider({
			// animate: true,
			orientation: "horizontal",
     		range: "min",
			min: 0, 
			max: 20,
			step: 1,
			slide: function( event, ui ) {
				$( "#ip_amount" ).val( ui.value );
				count_total_price();
			}
		});
		$("#ip_amount").change(function() {
		    $("#ip").slider(
		    	'value', $(this).val(), count_total_price()
		    );
		});


		$( "#mailboxes" ).slider({
			// animate: true,
			orientation: "horizontal",
     		range: "min",
			min: 1,  
			max: 40,
			step: 1,
			slide: function( event, ui ) {
				$( "#mailboxes_amount" ).val( ui.value );
				count_total_price();
			}
		});
		$("#mailboxes_amount").change(function() {
		    $("#mailboxes").slider(
		    	'value', $(this).val(), count_total_price()
		    );
		});
		
        
        // presets
		// basic
		$('.preset_basic').click(function(){
			$( ".preset" ).removeClass( "preset_active" );
			$(this).addClass( "preset_active" );
			
			$( "#sites" ).slider("value", 1);
			$( "#sites_amount" ).val( 1 );
			
			$( "#databases" ).slider("value", 1);
			$( "#databases_amount" ).val( 1 );
			
			$( "#disk" ).slider("value", 3000);
			$( "#disk_amount" ).val( 3000 );
			
			$( "#ram" ).slider("value", 160);
			$( "#ram_amount" ).val( 160 );
			
			$( "#ip" ).slider("value", 0);
			$( "#ip_amount" ).val( 0 );
			
			$( "#mailboxes" ).slider("value", 1);
			$( "#mailboxes_amount" ).val( 1 );
			
			count_total_price();
		});
		
		
		// norm
		$('.preset_normal').click(function(){
			$( ".preset" ).removeClass( "preset_active" );
			$(this).addClass( "preset_active" );
			
			$( "#sites" ).slider("value", 10);
			$( "#sites_amount" ).val( 10 );
			
			$( "#databases" ).slider("value", 10);
			$( "#databases_amount" ).val( 10 );
			
            $( "#disk" ).slider("value", 5000);
			$( "#disk_amount" ).val( 5000 );
			
			
			$( "#ip" ).slider("value", 0);
			$( "#ip_amount" ).val( 0 );
			
			
			count_total_price();
		});
		
		// pro
		$('.preset_pro').click(function(){
			$( ".preset" ).removeClass( "preset_active" );
			$(this).addClass( "preset_active" );
			
			$( "#sites" ).slider("value", 30);
			$( "#sites_amount" ).val( 30 );
			
			$( "#databases" ).slider("value", 30);
			$( "#databases_amount" ).val( 30 );
			
            $( "#disk" ).slider("value", 10000);
			$( "#disk_amount" ).val( 10000 );
			
			
			$( "#ip" ).slider("value", 0);
			$( "#ip_amount" ).val( 0 );
			
			
			count_total_price();
		});
	}
	
	$('.currency-name').click(function(){
		window.curr=$(this).data('currency');
		$.cookie('curr', window.curr);
		
		$('.currency-symbol').html(window.currency_symbol[window.curr])
		
		currency_init ();
	});

});


function currency_init () {
	$( ".currency-name" ).removeClass( "currency-name-active" );;
	$('*[data-currency="'+window.curr+'"]').addClass( "currency-name-active" );
	
	$( ".currency-relative" ).each(function() {
		$('.currency-symbol').html(window.currency_symbol[window.curr])

        if($( this ).data('usd-price')*window.currency[window.curr] < 5 || window.curr=='usd' || window.curr=='eur')
            $( this ).html(parseFloat(($( this ).data('usd-price')*window.currency[window.curr]).toFixed(2)));
        else
 			$( this ).html(parseFloat(($( this ).data('usd-price')*window.currency[window.curr]).toFixed()));

	});
}

function count_bk_total_price() {
 	var total_price = window.bk_total_price;
	total_price = total_price+($( "#backup_space_amount" ).html() - $( "#backup_space" ).slider( "option", "min" ))/15*1;
	total_price = total_price.toFixed(2); //округляем
	
	$("#total_price").data('usd-price', total_price).attr('data-usd-price', total_price);
	
	if(window.curr=='usd' || window.curr=='eur')
		total_price_incurrency=(total_price*window.currency[window.curr]).toFixed(2)
	else	
		total_price_incurrency=(total_price*window.currency[window.curr]).toFixed()
		
	$( "#total_price" ).html( total_price_incurrency );
	
	var link=window.orderlink;
	
	$( ".param_slider" ).each(function() {
		var addon = $(this).data( "addon" );
		var id = $(this).attr( "id" );
		var val = $( "#"+id+"_amount" ).html();
		link = link+"%26"+"addon_"+addon+"%3D"+val;
	});
	
	$( ".button-order" ).attr('href', link);
}

function count_total_price() {
 	var total_price = window.total_price;
	total_price = total_price+($( "#sites_amount" ).val() - $( "#sites" ).slider( "option", "min" ))*0.02;
	total_price = total_price+($( "#databases_amount" ).val() - $( "#databases" ).slider( "option", "min" ))*0.02;
	total_price = total_price+($( "#disk_amount" ).val() - $( "#disk" ).slider( "option", "min" ))/1000*0.3;
	total_price = total_price+($( "#ram_amount" ).val() - $( "#ram" ).slider( "option", "min" ))/64*0.15;
	total_price = total_price+($( "#ip_amount" ).val() - $( "#ip" ).slider( "option", "min" ))*1.5;
	total_price = total_price+($( "#mailboxes_amount" ).val() - $( "#mailboxes" ).slider( "option", "min" ))*0.01;
	total_price = total_price.toFixed(2); //округляем
	
	$("#total_price").data('usd-price', total_price).attr('data-usd-price', total_price);
	
	if(window.curr=='usd' || window.curr=='eur')
		total_price_incurrency=(total_price*window.currency[window.curr]).toFixed(2)
	else	
		total_price_incurrency=(total_price*window.currency[window.curr]).toFixed()
		
	$( "#total_price" ).html( total_price_incurrency );
	
	var link=window.orderlink;
	
	$( ".param_slider" ).each(function() {
		var addon = $(this).data( "addon" );
		var id = $(this).attr( "id" );
		var val = $( "#"+id+"_amount" ).html();
		link = link+"%26"+"addon_"+addon+"%3D"+val;
	});
	
	$( ".button-order" ).attr('href', link);
}