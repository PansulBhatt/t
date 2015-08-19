<?php
session_start();
if(!($_SESSION['ID']))
header("location:in.html");


	require_once('includes/class-query.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Members Directory</title>
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
		<h1>Members Directory</h1>
		<div class="content">
			<?php $query->do_user_directory(); ?>
		</div>
	</body>
</html>