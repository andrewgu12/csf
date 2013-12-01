$(document).ready(function(){	
	$("#modal-preview-link").click(function() {
		var title = $("#title").val();
		var content = $("#actualNews").val();
		$("#modal-title").html(title);
		$("#modal-content").html(content);
	});
});