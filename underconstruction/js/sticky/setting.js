function sticky_style(){
    // Flexslider fixed style
    $('.flexslider.fixed').sticky({ 
		topSpacing: 0,
		responsiveWidth: true
	});
    $('.flexslider.fixed').on('sticky-end', function() { 
        alert('ok');
    });
    
    // Header fixed style
    $("header").sticky({ 
		topSpacing: 0,
		responsiveWidth: true
	});
}
$(window).load(function(){
    sticky_style();
	$(this).resize(sticky_style);
    $(this).scroll(function(){
       if( $(document).scrollTop() > 50 ) {
          $('.is-sticky').find('.flexslider.fixed').find('.wrap-slide').addClass('scrolled');
       }else {
          $('.is-sticky').find('.flexslider.fixed').find('.wrap-slide').removeClass('scrolled');
       }
    });
});
