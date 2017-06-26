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

		$('.menu-item a').click(function(e){
			 e.preventDefault();
		});

		$('.menu-item a').click(function(e){
			$('.menu-item').removeClass('current-menu-item');
			$(this).parent().addClass('current-menu-item');
			if($(this).text()=="Our Focus" || $(this).text()=="Client Profiles"){
				var scrollTo = $('.main-areas')
				$("body,html").animate({ 
			        scrollTop: scrollTo.offset().top - 120,
			      }, 1000 );

			}

			if($(this).text()=="Donate"){
				var scrollTo = $('.donate')
				$("body,html").animate({ 
			        scrollTop: scrollTo.offset().top - 120,
			      }, 1000 );
			}

		});
	});
	
})(jQuery, this);
