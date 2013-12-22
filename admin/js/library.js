$(document).ready(function(){	
	$("#modal-preview-link").click(function() {
		var title = $("#title").val();
		var content = $("#actualNews").val();
		$("#modal-title").html(title);
		$("#modal-content").html(content);
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