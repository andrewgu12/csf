<?php
$hostname='csf.db';
$username='mvcsf';
$password='4ol9y6a';
$dbname='csftrials';

$conn = mysqli_connect($hostname, $username, $password, $dbname);
		if(isset($_REQUEST['firstName'])) {
			$firstNameValue = $_REQUEST['firstName'];				
		}
		if(isset($_REQUEST['lastName'])) {
			$lastNameValue = $_REQUEST['lastName'];
		}		
		if(isset($_REQUEST['grade'])) {
			$gradeValue = $_REQUEST['grade'];			
		}
		
		$query = "SELECT * FROM `user` ";

		if($firstNameValue || $lastNameValue || $gradeValue || $studentIDValue) {
			$query .= "WHERE ";
			if($firstNameValue) {
				$query .= "`name` LIKE '%$firstNameValue%'";
				if($lastNameValue || $gradeValue || $studentIDValue) {
					$query .= " AND ";
				}
			}
			if($lastNameValue) {
				$query .= "`lastName` LIKE '%$lastNameValue%'";
				if($gradeValue || $studentIDValue) {
					$query .= " AND";
				}
			}
			if($gradeValue) {
				$query .= "`grade` = '$gradeValue'";
				if($studentIDValue) {
					$query .= " AND";
				}
			}
		}
		$query .= "  ORDER BY `grade` ASC, `lastName` ASC";
		$result = mysqli_query($conn, $query);
		$indivCounter = 0;
		while($row = mysqli_fetch_array($result)){

			$name = $row['name'];
			
			$lastName = $row['lastName'];

			$email = $row['email'];

			$grade = $row['grade'];

			$studentid = $row['studentid'];

			$hours = $row['hours'];

			$phone = $row['phone'];

			$money = $row['money'];
			if($money == '') {
				$money = 'no';
			}
			$waiver = $row['waiver'];
			if($waiver == '') {
				$waiver = 'no';
			}			
			$name = $row['name'];			
			$lastName = $row['lastName'];
			$fullName = $name . ' ' . $lastName;
			$email = $row['email'];
			$grade = $row['grade'];
			$studentid = $row['studentid'];
			$hours = $row['hours'];
			$phone = $row['phone'];
			if($indivCounter %4 == 0) {
				echo "<div class='row' id='outputTable'>";
			}
			
			echo "<div class='large-3 columns individual_person'>";
				echo "<div><span class='setName'><a class='fancybox fancybox.ajax' href='member_profile.php?id=$studentid' title='$fullName'><b>$fullName</b></a></span></div><br />";
				echo "Grade: <span class='setGrade'>$grade</span>";
				echo "<span class='setEmail' style='display: none;'>$email</span>";
				echo "<span class='setPhone' style='display: none;'>$phone</span>";
				echo "<span class='setUrl' style='display: none;'>$url</span>";
			echo  "</div>";
				$indivCounter++;
			if($indivCounter %4 == 0) {
				echo "</div>";
			}
		}


?>