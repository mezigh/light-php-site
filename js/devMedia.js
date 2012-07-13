jQuery(function($){
	
/* supersized */

	$.supersized({
		random:1,
		transition_speed:3000,
		slides : [
		{image:'http://localhost/Serious_WebDev/hooboo/images/slides/bg2.jpg'},
		{image:'http://localhost/Serious_WebDev/hooboo/images/slides/amp-neri-000329-38.jpg'},
		{image:'http://localhost/Serious_WebDev/hooboo/images/slides/DUO-Main-Dining-Room.jpg'},
		{image:'http://localhost/Serious_WebDev/hooboo/images/slides/valentines-day-074.jpg'}
		]
	});



/* fin supersized */

/* masonry */

	var portfolio = $("#portfolio");
	portfolio.masonry({

		isAnimated : true,
		itemSelector : '.bloc:not(.hidden)',
		columnWidth: 220

	});
	
	portfolio.find('a.thumb').click(function(e){
		
		var elem = $(this);
		portfolio.find('.unfold').removeClass('unfold');
		elem.parent().addClass('unfold');
		portfolio.masonry('reload');
		
		e.preventDefault();
	})

/* fin masonry */

/* scrollPane */

	$('#music-jazz,#news').jScrollPane({
		showArrows: true,
		arrowScrollOnHover: true
	});

/* fin scrollPane */
})