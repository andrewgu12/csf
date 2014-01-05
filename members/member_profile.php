<?php
				$studentid = $_REQUEST['id'];
				$hostname='csf.db';
				$username='mvcsf';
				$password='4ol9y6a';
				$dbname='csfBackend';
				$conn = mysqli_connect($hostname, $username, $password, $dbname);
				$results = mysqli_query($conn, "SELECT * FROM `user` WHERE `studentid`='$studentid' LIMIT 1");
				$current = mysqli_fetch_array($results);
				
                $firstName = $current['name'];
                $lastName = $current['lastName'];
                $fullName = $firstName . ' ' . $lastName;
                $hours = $current['hours'];
                $email = $current['email'];
                $phone = $current['phone'];
                $grade = $current['grade'];
				$image = $current['image'];
				if($image == '') {
					$image = 'person.png';
				}
				echo "<div id='membersImageProfile'>";
                	echo "<img src='../img/members/$image' />";
                echo "</div>";


                echo "<p style='font-size: 48px;'>$fullName</p>";
                echo "<p>Hours: $hours <br />";
                echo "Email: $email<br />";
                echo "Grade: $grade</p>";
            ?>
	</div>	