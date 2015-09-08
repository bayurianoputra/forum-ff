(function($) {
	'use strict';	
	/*
	Dropdown
	=========================== */
	$('ul.navbar-nav li.dropdown').on("mouseenter", function() {
		$(this).addClass('active');$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
		return false;
	})
	$('ul.navbar-nav li.dropdown').on("mouseleave", function() {
		$(this).removeClass('active');$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
			return false;
	});	
	
	/*
	Megamenu
	=========================== */
     window.prettyPrint && prettyPrint()
     $(document).on('hover', '.yamm .dropdown-menu', function(e) {
        e.stopPropagation();
		return false;
     })
	
	/*
	Tooltip
	=========================== */
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip();
	  return false;
	})

	/*
	Image hover
	=========================== */	
	$('.img-wrapper').on("mouseenter", function() {
		$(".img-caption", this).stop().animate({bottom:'0'},{queue:false,duration:600});
		return false;
	})
	$('.img-wrapper').on("mouseleave", function() {
		$(".img-caption", this).stop().animate({bottom:'-80px'},{queue:false,duration:600});
		return false;
	});	
	
	/*
	Image hover
	=========================== */	
	$(".client-hover").css({'opacity':'0','filter':'alpha(opacity=0)'});	
	$('.logo-link').on("mouseenter", function() {
		$(this).find('.client-hover').stop().fadeTo(900, 1);$(this).find('.client').stop().fadeTo(900, 0);
		return false;
	})
	$('.logo-link').on("mouseleave", function() {
		$(this).find('.client-hover').stop().fadeTo(900, 0);$(this).find('.client').stop().fadeTo(900, 1);
		return false;
	});	
	
	/*
	Product hover
	=========================== */	
	$(".product-caption").css({'opacity':'0','filter':'alpha(opacity=0)'});	
	$('.product-wrapper').on("mouseenter", function() {
		$(this).find('.product-caption').stop().fadeTo(900, 1);$(".detail", this).stop().animate({top:'50%'},{queue:false,duration:600});$(".buy", this).stop().animate({bottom:'50%'},{queue:false,duration:600});
		return false;
	})
	$('.product-wrapper').on("mouseleave", function() {
		$(this).find('.product-caption').stop().fadeTo(900, 0);$(".detail", this).stop().animate({top:'-50%'},{queue:false,duration:300});$(".buy", this).stop().animate({bottom:'-50%'},{queue:false,duration:300});
		return false;
	});	
})(jQuery);

