
// Set filter
$(function(){
	$('ul.filter-items li span').each(function(){
		$(this).click(function(){
			$('ul.filter-items li').removeClass('active');				   
			$(this).parent().addClass('active');					   
		});										
	});		   
});

$(function() {
	var wall = new freewall("#freewall");
		wall.reset({
			selector: '.brick',
			animate: true,
			gutterX: 10,
			gutterY: 10,
			cellW: 280,
			cellH: 'auto',
			onResize: function() {
			wall.fitWidth();
		}
	});
                
	wall.filter("");
	$(".filter-label").click(function() {
		$(".filter-label").removeClass("active");
		var filter = $(this).addClass('active').data('filter');
		if (filter) {
			wall.filter(filter);
		} else {
			wall.unFilter();
		}
	});
	
	wall.container.find('.brick img').load(function() {
		wall.fitWidth();
	});
});