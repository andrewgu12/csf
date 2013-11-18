<?php include('included.php'); 
include('login.php'); ?>
<div id="profile" class="members_home">
	
    <h2>Update Personal Profile</h2>
    <form id="form1" name="form1" method="post" action="members_profile_chg.php" enctype="multipart/form-data">
        <p><input type="text" id="student" name="student" value="<?= $user ?>" disabled /><br/>
        Student ID</p>
        <p><input type="text" id="name" name="name" value="<?= $current['name'] ?>" /><br/>
        First Name</p>
        <p><input type="text" id="lastname" name="lastname" value="<?= $current['lastName'] ?>" /><br/>
        Last Name</p>
        <p><input type="text" id="email" name="email" value="<?= $current['email'] ?>" /><br/>
        Email</p>
        <p><input type="text" id="grade" name="grade" value="<?= $current['grade'] ?>" /><br/>
        Grade</p>
        <p><input type="text" id="phone" name="phone" value="<?= $current['phone'] ?>" /><br/>
        Phone</p>
        <p><input type="file" name="file" id="file"><br>
        Upload profile picture. <br />
        Notes: <br />
        <ul>
        	<li>Please crop the image to 180px(width) by 155px(height).</li>
            <li> Images are to be no bigger than 200 kb. </li>
            <li>Please change the file name to your user id (i.e. 123546.png).</li>
            <li>Pictures are to be only .jpg or .png.</li>
            <li> If you need help, email andrew@mingbogu.com.</li>
            </ul>
        </p>
        <br/>
        <p><input type="password" id="pass" name="pass" /><br/>
        <span class="red_text">Password Change (type here <b>ONLY</b> if you want to change it)</span></p>
        <br/>
        
        <p><input type="submit" id="submit" name="submit" /></p>
    </form>
</div>