function searchMembers() {
	document.body.style.cursor = "wait";
	var gradeMenu = document.getElementById("grade");
	var gradeValue = gradeMenu.options[gradeMenu.selectedIndex].value;
	var firstNameValue = document.getElementById("firstName").value;
	var lastNameValue = document.getElementById("lastName").value;
	
	$.post (
		"search.php", 
		{'firstName' : firstNameValue, 'lastName' : lastNameValue, 'grade' : gradeValue },
		function(data) {
			document.getElementById("searchOutput").innerHTML=data;
			document.body.style.cursor="auto";
		}
	);
}
$(document).ready(function() {
	var loc = (String)(window.location);
	if(loc.indexOf("view_members.php") > 0)
		searchMembers();

	$('.menuOption').click(function(e) {
		$('#mainContent').hide();
		$('.menuOption').removeClass('active');
    		 $(this).addClass('active');					
/*		e.preventDefault();		
		 linkURL = $('.active #sidebarLink').attr('href');
		 $("#bottomContentWords").load(linkURL);		 
		 $('#bottomContentWords').show();			*/
	});
	$(".fancybox").fancybox();
});

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44630680-1', 'mvcsf.com');
  ga('send', 'pageview');
