//scripts.js by Andrew Gu

$(document).ready(function(){	
	//ajax page loading
	$('.menuOption').click(function(e) {
		$('#mainContent').hide();
		$('.menuOption').removeClass('active');
    		 $(this).addClass('active');					
		e.preventDefault();		
		 linkURL = $('.active #sidebarLink').attr('href');
		 $("#mainContent").load(linkURL);		 
		 $('#mainContent').show();	
	});
	//nivo slider
	 $('#slider').nivoSlider({		
		effect: 'slideInRight',
		directionNavHide: false,	 
		directionNav: true,  			    
		controlNav: false,
		prevText: ' ',
			nextText: ' '            
	});
	 $(document).foundation();
});
