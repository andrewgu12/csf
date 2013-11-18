<?php
			include('included.php'); 
			include('login.php');
			if($_SESSION['user'] == ""){
				?>
				<p>You must <a href="index.php?target=volunteer">login</a> to view activities.</p>
				<?
			} else {
				$user = $_SESSION['user']; // student id
				
				$results = mysqli_query($conn, "SELECT * FROM `activities` ORDER BY `date`") or die($conn);
				while($event = mysqli_fetch_array($results)){
					$name = $event['name'];
					$id = $event['id'];
					$date = date("D, j M",$event['date']);
					$desc = str_replace("\n", "<br/>", $event['desc']);
					$users = $event['users'];
					$limit = $event['limit'];
					$curr = $event['curr'];
					$left = $limit - $curr;
					$time = $event['time'];
					$location = $event['location'];
					if($act['complete'] == 1) { continue; }
					
					$now =  time(); 
				
					if ($event['date'] < $now){
						continue; // skip finished events
					}
				
					// close value of 1 overrides now
					// actual time minus three days for locking period
					//if($event['date'] - (3*24*60*60) > $now || $event['close'] == 1) {
						echo "<b><u>$name</u></b> on $date<br/>";
						echo "<b>Time: $time</b><br/>";
						echo "<b>Location: $location</b><br/>";
						echo "$desc";
						echo "<br/>$left out of $limit spaces left";
						
						// if user already signed up, do not allow to re-sign up, check limits
						if(!strstr($users, $user) && ($left > 0 )){
							echo "<br/><a href='v_signup.php?id=$id'>[Signup]</a><br/><br/>";
						} else {
							echo "<br/><br/>";
						}
					//}
				}
				
			}
			
			?>