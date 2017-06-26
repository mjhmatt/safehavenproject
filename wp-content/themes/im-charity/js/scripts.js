(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		// DOM ready, take it away
		$('.donation-points li').click(function(){
			var index = $(this).index();
			index = index+1;


			$('.donation-points li').removeClass('active');
			$(this).addClass('active');


			$('.donation-description p').addClass('no-display');
			$('.donation-description p:nth-child(' + index  + ')').removeClass('no-display');
		});	
	});
	
})(jQuery, this);
