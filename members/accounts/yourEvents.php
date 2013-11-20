<?php
				include('included.php'); 
				include('login.php');
				$results = mysqli_query($conn, "SELECT * FROM `activities` WHERE `users` LIKE '%$user%' ORDER BY `id` DESC");
				while($event = mysqli_fetch_array($results)){				
					$name = $event['name'];
					$id = $event['id'];
					$date = date("D, j M",$event['date']);
					$desc = $event['desc'];
					$users = substr($event['users'],1);
					$time = $event['time'];
					$location = $event['location'];
					
					$now =  time();
					
					echo "<b><u>$name</u></b> on $date<br/>";
					echo "<b>Time: $time</b><br/>";
					echo "<b>Location: $location</b><br/>";
					echo "$desc</br>";
					
					// parse user list
					$userarr = split(",", $users);
					$carpool = array(count($userarr));
					
					$users = "";
					
					foreach($userarr as $key=>$value){
						$ur = mysqli_query($conn,"SELECT `name` FROM `user` WHERE `studentid` = '$value' LIMIT 1");
						$ua = mysqli_fetch_array($ur);
						
						$users .= ", ".$ua['name'];
					}
					
					$users = substr($users, 2);
					
					echo "<br/><b>Carpool List:</b>$users";
					
					// check if activity is closed
					// close value of 1 overrides date-based locking
					if($event['date'] - (3*24*60*60) > $now || $event['close'] == 1) {
						echo "<br/><a href='v_remove.php?id=$id'>[Remove]</a><br/>";
					} else {
						echo "<br/>";
					}
					
					echo "<br/>";
				}
				?>