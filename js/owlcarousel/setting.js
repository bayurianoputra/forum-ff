(function($) {
	'use strict';
      $("#team").owlCarousel({
        autoPlay : 6000,transitionStyle : "fade",stopOnHover : true,navigation : true,pagination : false,paginationSpeed : 1000,goToFirstSpeed : 2000,singleItem : true,autoHeight : true
      });
      $("#recent-blog").owlCarousel({
        autoPlay : 6000,stopOnHover : true,navigation : true,pagination : false,paginationSpeed : 1000,goToFirstSpeed : 2000,singleItem : true,autoHeight : true
      });
      $("#portfolio-slide").owlCarousel({
        autoPlay : 6000,stopOnHover : true,navigation : true,pagination : false,paginationSpeed : 1000,goToFirstSpeed : 2000,singleItem : true,autoHeight : true
      });
})(jQuery);