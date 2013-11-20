<?php
session_start();

$hostname='csf.db';
$username='mvcsf';
$password='4ol9y6a';
$dbname='csfBackend';

$conn = mysqli_connect($hostname, $username, $password, $dbname);
		echo "<div id='searchForMembers'>";
		echo "<p style='font-size: 16px;'>Click on a category to begin searching. Leave blank to search all.</p>";
		echo "<form id ='memberSearch'>";
		echo "<table>";
		echo "<tr>";
		echo "<td><label for='grade'>Grade</label></td>";
		echo "<td><label for='firstName'>First Name</label></td>";
		echo "<td><label for='lastName'>Last Name</label></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><select id='grade' name='grade' onchange='javascript:searchMembers()'>";
		echo "<option> </option>";
		echo "<option value='9'>9</option>";
		echo "<option value='10'>10</option>";
		echo "<option value='11'>11</option>";
		echo "<option value='12'>12</option>";
		echo "</select></td>";
		echo "<td><input type='text' id='firstName' name='firstName' onkeyup='javascript:searchMembers()'/></td>";
		echo "<td><input type='text' id='lastName' name='lastName' onkeyup='javascript:searchMembers()'/></td>";
		echo "</tr>";
		echo "</table></form>";
		echo "<div id='searchOutput'>";
		include("search.php");
		echo "</div>";
		echo "</div>";
/*$result = mysqli_query($conn, "SELECT * FROM `user` ORDER BY `grade` ASC, `lastName` ASC");
		$rowCounter = 1;
		$indivCounter = 1;
		while($row = mysqli_fetch_array($result)){
			$name = $row['name'];			
			$lastName = $row['lastName'];
			$fullName = $name . ' ' . $lastName;
			$email = $row['email'];
			$grade = $row['grade'];
			$studentid = $row['studentid'];
			$hours = $row['hours'];
			$phone = $row['phone'];

				echo "<div class='everyone'>";
					echo "<div class='individual_person'>";
						echo "<p><b>$fullName</b><br />";
						echo "Grade: $grade</p>";
					echo  "</div>";
				$indivCounter++;
			if($indivCounter %4 == 0) {
				echo "</div>";
			}
	}*/
?>