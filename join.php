<?php require_once("included.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
  		<meta name="viewport" content="width=device-width" />
		<title>Monta Vista CSF</title>
		<!--app.css has Foundation styles, styles.css has custom styles-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/app.css" />		
		<link rel="stylesheet" href="css/styles.css" />
		<link rel="stylesheet" href="css/nivo-slider.css" />
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">		
		<script src="js/custom.modernizr.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header-wrapper">
				<div id="header">
					<?php include_once("menu.php"); ?>
				</div>
			</div>
			<div id="slider-wrapper">
				<div id="slider" class="restOfThePages">
					<img src="img/join.png"/>					
				</div>
			</div>	
			<div class="bodytext">
				<form id="joinUs" class="custom">
					<p>Ready to join CSF? Just fill out this form, login, and get volunteering!</p>									
					<div class="separation">
						<div class="row">
							<div class="large-4 columns">
								<label for="firstName" class="left inline">First Name</label>							
								<input type="text" id="firstName" />						
							</div>
							<div class="large-4 columns">
								<label for="lastName" class="left inline">Last Name</label>							
								<input type="text" id="lastName" />						
							</div>
							<div class="large-4 columns">
								<label for="grade" class="left inline">Grade</label>
								 <select id="grade">			
								 	<option value=" "> </option>				 
								 	<option value="9">9</option>
								 	<option value="10">10</option>
								 	<option value="11">11</option>
								 	<option value="12">12</option>
								 </select>
							</div>	
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="studentID" class="left inline">Student ID</label>
								<input type="text" id="studentID" />
							</div>
							<div class="large-4 columns">
								<label for ="email" class="left inline">Email</label>
								<input type="text" id="email" />
							</div>
							<div class="large-4 columns">
								<label for="phone" class="left inline">Phone Number</label>
								<input type="text" id="phone">
							</div>	 
						</div>
					</div>
					<div class="separation">
						<h3>List 1 Classes </h3>
						<p>To find out which classes qualify for this list and below, visit the volunteer page and click on the Class Lists tab</p>
						<div class="row">
							<div class="large-3 columns ">
								<label for="class1Name" class="left inline">Class Name</label>
								<input type="text" id="class1Name" />
							</div>			
							<div class="large-2 columns">
								<label for="class1Weight" class="left inline">Class Weight</label>
								<select id="class1Weight">
									<option value="r">No Weight</option>
									<option value="h">Honors</option>
									<option value="ap">AP</option>
								</select>
							</div>				
							<div class="large-1 columns">
								<label for="class1Grade" class="left inline">Grade</label>
								<select id="class1Grade" class="section1">
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
									<option value="F">F</option>
								</select>	
							</div>						
							<div class="large-3 columns">
								<label for="class2Name" class="left inline">Class Name</label>
								<input type="text" id="class2Name" />
							</div>			
							<div class="large-2 columns">
								<label for="class2Weight" class="left inline">Class Weight</label>
								<select id="class2Weight">
									<option value="r">No Weight</option>
									<option value="h">Honors</option>
									<option value="ap">AP</option>
								</select>
							</div>				
							<div class="large-1 columns">
								<label for="class2Grade" class="left inline">Grade</label>
								<select id="class2Grade" class="section1">
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
									<option value="F">F</option>
								</select>	
							</div>						
						</div>
						<div class="row">
							<div class="large-3 columns">
								<label for="class3Name" class="left inline">Class Name</label>
								<input type="text" id="class3Name" />
							</div>			
							<div class="large-2 columns">
								<label for="class3Weight" class="left inline">Class Weight</label>
								<select id="class3Weight">
									<option value="r">No Weight</option>
									<option value="h">Honors</option>
									<option value="ap">AP</option>
								</select>
							</div>				
							<div class="large-1 columns">
								<label for="class3Grade" class="left inline">Grade</label>
								<select id="class3Grade" class="section1">
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
									<option value="F">F</option>
								</select>	
							</div>						
							<div class="large-3 columns">
								<label for="class4Name" class="left inline">Class Name</label>
								<input type="text" id="class4Name" />
							</div>			
							<div class="large-2 columns">
								<label for="class4Weight" class="left inline">Class Weight</label>
								<select id="class4Weight">
									<option value="r">No Weight</option>
									<option value="h">Honors</option>
									<option value="ap">AP</option>
								</select>
							</div>				
							<div class="large-1 columns">
								<label for="class4Grade" class="left inline">Grade</label>
								<select id="class4Grade" class="section1">
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
									<option value="F">F</option>
								</select>	
							</div>						
						</div><!--end row-->
						<div class="row">
							<div class="large-3 columns">
								<label for="class5Name" class="left inline">Class Name</label>
								<input type="text" id="class5Name" />
							</div>			
							<div class="large-2 columns">
								<label for="class5Weight" class="left inline">Class Weight</label>
								<select id="class5Weight">
									<option value="r">No Weight</option>
									<option value="h">Honors</option>
									<option value="ap">AP</option>
								</select>
							</div>				
							<div class="large-1 columns">
								<label for="class5Grade" class="left inline">Grade</label>
								<select id="class5Grade" class="section1">
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
									<option value="F">F</option>
								</select>	
							</div>						
							<div class="large-3 columns">
								<label for="class6Name" class="left inline">Class Name</label>
								<input type="text" id="class6Name" />
							</div>			
							<div class="large-2 columns">
								<label for="class6Weight" class="left inline">Class Weight</label>
								<select id="class6Weight">
									<option value="r">No Weight</option>
									<option value="h">Honors</option>
									<option value="ap">AP</option>
								</select>
							</div>				
							<div class="large-1 columns">
								<label for="class6Grade" class="left inline">Grade</label>
								<select id="class6Grade" class="section1">
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
									<option value="F">F</option>
								</select>	
							</div>						
						</div><!--end row-->
						<div class="row">
							<div class="large-3 columns">
								<label for="class7Name" class="left inline">Class Name</label>
								<input type="text" id="class7Name" />
							</div>			
							<div class="large-2 columns">
								<label for="class7Weight" class="left inline">Class Weight</label>
								<select id="class7Weight">
									<option value="r">No Weight</option>
									<option value="h">Honors</option>
									<option value="ap">AP</option>
								</select>
							</div>				
							<div class="large-1 columns">
								<label for="class7Grade" class="left inline">Grade</label>
								<select id="class7Grade" class="section1">
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
									<option value="F">F</option>
								</select>	
							</div>
							<div class="large-2 offset-4 columns">
								<div class="scoreBox">
										<label for="subscore1" class="left inline">Subscore</label>
										<input type="text" id="subscore1"  disabled/> 
								</div>
							</div>											
						</div><!--end row-->
					</div>
					<div class="separation">
						<h3>List 2 Classes</h3>
						<div class="row">
							<div class="large-3 columns">
								<label for="class8Name" class="left inline">Class Name</label>
								<input type="text" id="class8Name" />
							</div>			
							<div class="large-2 columns">
								<label for="class8Weight" class="left inline">Class Weight</label>
								<select id="class8Weight">
									<option value="r">No Weight</option>
									<option value="h">Honors</option>
									<option value="ap">AP</option>
								</select>
							</div>				
							<div class="large-1 columns">
								<label for="class8Grade" class="left inline">Grade</label>
								<select id="class8Grade" class="section2">
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
									<option value="F">F</option>
								</select>	
							</div>						
							<div class="large-3 columns">
								<label for="class9Name" class="left inline">Class Name</label>
								<input type="text" id="class9Name" />
							</div>			
							<div class="large-2 columns">
								<label for="class9Weight" class="left inline">Class Weight</label>
								<select id="class9Weight">
									<option value="r">No Weight</option>
									<option value="h">Honors</option>
									<option value="ap">AP</option>
								</select>
							</div>				
							<div class="large-1 columns">
								<label for="class9Grade" class="left inline">Grade</label>
								<select id="class9Grade" class="section2">
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
									<option value="F">F</option>
								</select>	
							</div>						
						</div><!--end row-->
						<div class="row">
							<div class="large-3 columns">
								<label for="class10Name" class="left inline">Class Name</label>
								<input type="text" id="class10Name" />
							</div>			
							<div class="large-2 columns">
								<label for="class10Weight" class="left inline">Class Weight</label>
								<select id="class10Weight">
									<option value="r">No Weight</option>
									<option value="h">Honors</option>
									<option value="ap">AP</option>
								</select>
							</div>				
							<div class="large-1 columns">
								<label for="class10Grade" class="left inline">Grade</label>
								<select id="class10Grade" class="section2">
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
									<option value="F">F</option>
								</select>	
							</div>						
							<div class="large-3 columns">
								<label for="class11Name" class="left inline">Class Name</label>
								<input type="text" id="class11Name" />
							</div>			
							<div class="large-2 columns">
								<label for="class11Weight" class="left inline">Class Weight</label>
								<select id="class11Weight">
									<option value="r">No Weight</option>
									<option value="h">Honors</option>
									<option value="ap">AP</option>
								</select>
							</div>				
							<div class="large-1 columns">
								<label for="class11Grade" class="left inline">Grade</label>
								<select id="class11Grade" class="section2">
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
									<option value="F">F</option>
								</select>	
							</div>						
						</div><!--end row-->
						<div class="row">
							<div class="large-2 offset-10 right columns">
								<div class="scoreBox">
										<label for="subscore2" class="left inline">Subscore</label>
										<input type="text" id="subscore2"  disabled/> 
								</div>
							</div>	
						</div>
					</div><!--end list 2 classes-->
					<div class="separation">
						<h3>List 3 Classes</h3>
						<div class="row">
							<div class="large-3 columns">
								<label for="class12Name" class="left inline">Class Name</label>
								<input type="text" id="class12Name" />
							</div>			
							<div class="large-2 columns">
								<label for="class12Weight" class="left inline">Class Weight</label>
								<select id="class12Weight">
									<option value="r">No Weight</option>
									<option value="h">Honors</option>
									<option value="ap">AP</option>
								</select>
							</div>				
							<div class="large-1 columns">
								<label for="class12Grade" class="left inline">Grade</label>
								<select id="classGrade" class="section2">
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
									<option value="F">F</option>
								</select>	
							</div>						
							<div class="large-3 columns">
								<label for="class13Name" class="left inline">Class Name</label>
								<input type="text" id="class13Name" />
							</div>			
							<div class="large-2 columns">
								<label for="class13Weight" class="left inline">Class Weight</label>
								<select id="class13Weight">
									<option value="r">No Weight</option>
									<option value="h">Honors</option>
									<option value="ap">AP</option>
								</select>
							</div>				
							<div class="large-1 columns">
								<label for="class13Grade" class="left inline">Grade</label>
								<select id="class13Grade" class="section2">
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
									<option value="F">F</option>
								</select>	
							</div>						
						</div><!--end row-->
						<div class="row">
							<div class="large-3 columns">
								<label for="class14Name" class="left inline">Class Name</label>
								<input type="text" id="class14Name" />
							</div>			
							<div class="large-2 columns">
								<label for="class14Weight" class="left inline">Class Weight</label>
								<select id="class14Weight">
									<option value="r">No Weight</option>
									<option value="h">Honors</option>
									<option value="ap">AP</option>
								</select>
							</div>				
							<div class="large-1 columns">
								<label for="class14Grade" class="left inline">Grade</label>
								<select id="class14Grade" class="section2">
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
									<option value="F">F</option>
								</select>	
							</div>																
								<div class="large-2 offset-4 right columns">
									<div class="scoreBox">
											<label for="subscore2" class="left inline">Subscore</label>
											<input type="text" id="subscore2"  disabled/> 
									</div>
								</div>								
						</div><!--end row-->						
					</div><!--end list 3 classes-->
					<div class="row">
							<div class="large-2 offset-10 right columns">
								<div class="scoreBox">
										<label for="totalscore" class="left inline">Total Score</label>
										<input type="text" id="totalscore"  disabled/> 
								</div>
							</div>	
						</div>
				</form>
			</div>
		</div>
		<footer>
			<div id="footer-inner">
				<?php include_once("footer.php"); ?>
			</div>
		</footer>
		<!--include all JS files for both personal and Foundation-->
		<script src="js/jquery.js"></script>  	
		<script>
			  document.write('<script src=/js/'
			    + ('__proto__' in {} ? 'zepto' : 'jquery')
			    + '.js><\/script>');
		</script>
		<script src="js/nivo-slider.js"></script>
		<script src="js/foundation.js"></script>
      	  	<script src="js/scripts.js"></script>
	</body>
</html>