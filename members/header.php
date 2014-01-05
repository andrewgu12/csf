<?php
	  $firstName = $current['name'];
			                    $lastName = $current['lastName'];
			                   	$fullName = $firstName . ' ' . $lastName;		                        	
		                        	$email = $current['email'];
		                        	$phone = $current['phone'];
		                        	$grade = $current['grade'];
						$image = $current['image'];
						$currentHours = $current['hours'];
						$id = $current['studentid'];

						$historyDB = 'userHistory';
						$historyConn = mysqli_connect($hostname, $username, $password, $historyDB);			
						$historyQuery = mysqli_query($historyConn, "SELECT * FROM `history` WHERE `id`='$id' LIMIT 1 ");
						$history = mysqli_fetch_array($historyQuery);
						$totalHours = $history['hours'] + $currentHours;

			                    echo "<div id='membersImage'>";
			                    	echo "<img src='../img/members/person.png' />";
			                    	echo "</div>";
			                    	echo  "<div id='description'>";
			                    	echo  "<h3>$fullName</h3>";
			                    	echo	"<div class='row'>";
			                    	echo	"<div class='large-6 columns'>";
			                    	echo      "<p>Grade: $grade</p></div>";
			                    	echo      "<div class='large-6 columns'>";			                    			
			                    	echo	"<p>Student ID: $id</p></div></div>";
			                    	echo     "<div class='row'>";
			                    	echo	"<div class='large-6 columns'>";
			                    	echo	"<p>Phone: $phone</p></div>";			                    			
			                    	echo	"<div class='large-6 columns'>";
			                    	echo	"<p>Email: $email</p></div></div>";
			                    	echo	"<div class='row'>";
			                    	echo	"<div class='large-6 columns'>";
			                    	echo	"<p>Hours (semester): $currentHours</p></div>";			                 			
			                    	echo	"<div class='large-6 columns'>";
			                    	echo	"<p>Hours (total): $totalHours</p></div></div></div>";			
?>