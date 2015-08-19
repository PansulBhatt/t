<!DOCTYPE html>



<html>

	<head>
		<title>Home</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>



	


	<body>






		<div id="navigation">
			<ul>
				<li><a href="profile-view1.php">View Profile</a></li>
				<li><a href="profile-edit1.php">Edit Profile</a></li>
				<li><a href="friends-list1.php">Student list</a></li>
				<li><a href="assign.html">HW</a></li>
                                
                                 
                                 <li><a href="upload_file.php">Assignments</a></li>
                                <li><a href="logout.php">Log Out</a></li> 
			</ul>
		</div>
		<h1>Home</h1>
		<div class="square">
		<h3>Profile</h3>
		<ul>
			<li><a href="profile-view.php">View Profile</a></li>
			<li><a href="profile-edit.php">Edit Profile</a></li>
		</ul>
		</div>
		


<div class="square">
		<h3>Assignments</h3>
			<ul>
			<li><a href="assign.html">HW</a></li>
		</ul>
		</div>

	
<?php
	session_start();
if($_SESSION['ID']){
	    
}
else
    header("location: start2.html");

?>





</body>
</html>