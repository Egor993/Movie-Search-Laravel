$(() => {
	$('#grid-select > span').on('click', function(e) {
		e.preventDefault();

		let viewType = $(this).attr('data-type'),
			loop = $('#grid'),
			loopView = loop.attr('data-view');

		$(this).addClass('current').siblings('span').removeClass('current');

		loop.stop().fadeOut(100, function(){
			if(loopView)
				loop.removeClass(loopView);
		
			$(this).fadeIn().attr('data-view', viewType).addClass(viewType);
		});
	});
});
