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
});