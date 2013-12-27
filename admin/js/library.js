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