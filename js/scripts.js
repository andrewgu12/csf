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
	 var checkGrades = [];
	 $(".grades").change(function() {	 	
	 	var gradeNumber = $(this).attr("id");
	 	checkGrades.push(gradeNumber);	 	
	 	var classNumber = gradeNumber.split("Grade", 1);
	 	var weightNumber = classNumber + "Weight";
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
	 	weightNumber = "#"+weightNumber;
	 	weight = $(weightNumber).val();
	 	if(weight == "h" || weight=="ap")  {
	 		addInWeightedScore(letterGrade);
	 	}
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
	$("#next").click(function(){
		var firstName = $("#firstName").val();
		var lastName = $("#lastName").val();
		var grade = $("#grade").val();
		var studentID = $("#studentID").val();
		var email = $("#email").val();
		var phone = $("#phone").val();
		var score = $("#totalscore").val();
		if(firstName == "" || lastName == ""  || grade == "" || studentID == "" || email == "" || phone == "" || score <10) 
		{
			if(firstName == "")
				alert("You forgot to fill out your first name!");
			else if(lastName == "")
				alert("You forgot to fill out your last name!");
			else if(studentID == "")
				alert("You forgot to put in your student ID!");
			else if(email == "")
				alert("You forgot to input your email!");
			else if(phone == "")
				alert("You forgot to input your phone number!");
			else if(score < 10)
				alert("Sorry, you don't have enough points to volunteer this semester!");
		}
		else 
		{			
		        
		        var data = "firstName=" + firstName + "&lastName=" + lastName + "&grade=" + grade + "&studentID=" + studentID + "&email=" + email + "&phone=" + phone;		        
		        $.ajax({
			            type: "POST",
			            url: "join_submit.php",			            
			            data: data, 
			            success: function () {
			              	 $("#regform").load("submitTranscript.php");
			            	}
		        });			
		}
	});
	$(".officerInfo").click(function(){
		var officer = $(this).attr("id");
		var nameSelector = "#" + officer + ".name";
		var imgSelector = "#"+officer+".photo"
		var descriptionSelector = "#"+officer+".description";
		var name = $(nameSelector).text();
		var imageFace = $(imgSelector).attr("src");
		var desc = $(descriptionSelector).html();
		$("#expandedName").text(name);
		$("#face").attr("src", imageFace);
		$("#exapandedDesc").html(desc);
	});
});
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44630680-1', 'mvcsf.com');
  ga('send', 'pageview');
