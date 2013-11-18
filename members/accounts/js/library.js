//library.js written by Andrew Gu

$(document).ready(function(){
	
	$('.menuOption').click(function(e) {
		$('#bottomContentWords').hide();
		$('#loading').show();
		$('.menuOption').removeClass('active');
    		 $(this).addClass('active');		
		
		if($(this).attr('id') != 'logout') {
			e.preventDefault();		
			linkURL = $('.active #sidebarLink').attr('href');
			 $("#bottomContentWords").load(linkURL);
			 $('#loading').hide();
			 $('#bottomContentWords').show();
		}
	});
	 $(document).foundation();
	 $('.fancybox').fancybox();
	 
});