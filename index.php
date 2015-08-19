<!DOCTYPE html>



<html>

	<head>
		<title>Home</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>



	


	<body>






		<div id="navigation">
			<ul>
				<li><a href="/t">Home</a></li>
				<li><a href="profile-view.php">View Profile</a></li>
				<li><a href="profile-edit.php">Edit Profile</a></li>
				<li><a href="friends-directory.php">Member Directory</a></li>
				<li><a href="friends-list.php">Friends List</a></li>
				<li><a href="feed-view.php">View Feed</a></li>
				<li><a href="feed-post.php">Post Status</a></li>
				<li><a href="messages-inbox.php">Inbox</a></li>
				<li><a href="messages-compose.php">Compose</a></li>
                                <li><a href="assignment.php">HW</a></li>
                                
                                 
                                 <li><a href="upload.html">Upload</a></li>
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
		<h3>Friends</h3>
			<ul>
			<li><a href="friends-directory.php">Member Directory</a></li>
			<li><a href="friends-list.php">Friends List</a></li>
		</ul>
		</div>
		<div class="square">
		<h3>News Feed</h3>
			<ul>
			<li><a href="feed-view.php">View Feed</a></li>
			<li><a href="feed-post.php">Post Status</a></li>
		</ul>
		</div>
		<div class="square">
		<h3>Messages</h3>
			<ul>
			<li><a href="messages-inbox.php">Inbox</a></li>
			<li><a href="messages-compose.php">Compose</a></li>
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
    header("location: in.html");

?>





</body>
</html>