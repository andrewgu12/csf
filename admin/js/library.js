$(document).ready(function(){	
	$("#modal-preview-news").click(function() {
		var title = $("#title").val();
		var content = $("#actualNews").val().replace(/\r\n|\r|\n/g,"<br />");
		$("#modal-title").html(title);
		$("#modal-content").html(content);
	});
	$("#modal-preview-event").click(function() {
		var title = $("#title").val();
		var date =$("#date").val();		
		var limit = $("#limit").val();
		var time=$("#time").val();
		var location = $("#location").val();
		var eventDesc = $("#eventDesc").val().replace(/\r\n|\r|\n/g,"<br />");
		$("#modal-title").html(title);
		$("#modal-date").html(date);
		$("#modal-limit").html(limit);
		$("#modal-time").html(time);
		$("#modal-location").html(location);
		$("#modal-desc").html(eventDesc);
	});
	$("#date").on("input", function() {
		var localDate = $("#date").val();
		var timestamp = moment(localDate, "MM-DD-YYYY").unix();
		$("#unixtime").val(timestamp);
	});
});

function deleteMembers(id) 
{
	var del = confirm("Are you sure you want to delete?");
	if(del) 
	{
		window.location="http://mvcsf.com/dev/admin/members_delete.php?id="+id;
	}
	else
	{
		window.location="http://mvcsf.com/dev/admin/members_all.php";
	}
}

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44630680-1', 'mvcsf.com');
  ga('send', 'pageview');
