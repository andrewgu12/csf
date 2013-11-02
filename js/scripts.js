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

	 $(document).foundation();	
	 //calculate score from grades 
	 $(".grades").change(function() {
	 	var gradeNumber = $(this).attr("id");
	 	var section = $(this).attr('class');
	 	section = section.split(" ",1);
	 	switch($.trim(section)) {
	 		case "section1":
	 			var subscore = $('#subscore1').val();
	 			break;
	 		case "section2": 
	 			var subscore = $('#subscore2').val();
	 			break;
	 		case "section3":
	 			var subscore = $('#subscore3').val();
	 			break;
	 	}
	 	subscore = parseInt(subscore, 10);
	 	var letterID = "#" + gradeNumber;
	 	var letterGrade = $(letterID).val();
	 	switch($.trim(letterGrade)) {
	 		case "A":
	 			subscore = subscore + 3;
	 		break;
	 		case "B":
	 			subscore = subscore + 1;	 			
	 		break;
	 	}
	 	//call function to calculate points from weighted class
	 	addInWeightedScore(letterGrade);
	 	var totalScore = parseInt($("#totalscore").val(), 10);
	 	totalScore  = totalScore + subscore;
		switch($.trim(section)) {
	 		case "section1":
	 			$('#subscore1').val(subscore);
	 			$('#subscore1Bottom').val(subscore);
	 			break;
	 		case "section2": 
	 			$('#subscore2').val(subscore);
	 			$('#subscore2Bottom').val(subscore);
	 			break;
	 		case "section3":
	 			$('#subscore3').val(subscore);
	 			$('#subscore3Bottom').val(subscore);
	 			break;
	 	}		 	
	 	calculateTotalScore();
	 });
	//add in weighted scores; restrictions: grade has to be A or B and can't have more than 2 points	
	function addInWeightedScore(letterGrade) {
		if(letterGrade == "A" || letterGrade == "B" && parseInt($("#totalWeight").val(), 10) < 2) {
			var total = parseInt($("#totalWeight").val(), 10) + 1;			
			$("#totalWeight").val(total);
		}
	}
	//calculate total score
	function calculateTotalScore() {
		var subscore1 = parseInt($("#subscore1Bottom").val(), 10);
		var subscore2 = parseInt($("#subscore2Bottom").val(), 10);
		var subscore3 = parseInt($("#subscore3Bottom").val(), 10);
		var weightedTotal = parseInt($("#totalWeight").val(), 10);
		total = subscore1 + subscore2 + subscore3 + weightedTotal;
		$("#totalscore").val(total);
	}
	//get member data upon submit button
	/*$("#submit").click(function({
		var firstName = $("#firstName").val();
		var lastName = $("#lastName").val();
		var grade = $("#grade").val();
		var studentID = $("#studentID").val();
		var email = $("#email").val();
		var phone = $("#phone").val();
	});*/
});
