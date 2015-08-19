<?php	
	require_once('includes/class-query.php');
	require_once('includes/class-insert.php');
	session_start();
	$logged_user_id = $_SESSION['ID'];
	if($_SESSION['ID']){
	if ( !empty ( $_POST ) ) {
		$update = $insert->update_user1($logged_user_id, $_POST);
	}
	
	$user = $query->load_user_object1($logged_user_id);
}
else
 header("location:in.html");
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Edit profile</title>
		<meta name="description" content="Tab Styles Inspiration: A small collection of styles for tabs" />
		<meta name="keywords" content="tabs, inspiration, web design, css, modern, effects, svg" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css3/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css3/demo.css" />
		<link rel="stylesheet" type="text/css" href="css3/tabs.css" />
		<link rel="stylesheet" type="text/css" href="css3/tabstyles.css" />
  		<script src="js3/modernizr.custom.js"></script>
	</head>
	<body>
		<svg class="hidden">
			<defs>
				<path id="tabshape" d="M80,60C34,53.5,64.417,0,0,0v60H80z"/>
			</defs>
		</svg>
		<div class="container">
			<section>
				<div class="tabs tabs-style-bar">
					<nav>
						<ul>
							<li><a href="profile-view1.php" class="icon icon-home"><span>View Profile</span></a></li>
							<li><a href="friends-list1.php" class="icon icon-box"><span>Student List</span></a></li>
							<li><a href="assign.html" class="icon icon-display"><span>Homework</span></a></li>
							<li><a href="upload_file1.php" class="icon icon-upload"><span>Answers</span></a></li>
							<li><a href="profile-edit1.php" class="icon icon-tools"><span>Edit Profile</span></a></li>
							<li><a href="logout.php" class="icon icon-tools"><span>Log Out</span></a></li>
						</ul>
					</nav>
					
					<script src="js3/cbpFWTabs.js"></script>
		<script>
			(function() {

				[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
					new CBPFWTabs( el );
				});

			})();
		</script>




<h1>Edit Profile</h1>
		<div class="content">
			<form method="post">
				<p>
					<label class="labels" for="name">Full Name:</label>
					<input name="user_nicename" type="text" value="<?php echo $user->user_nicename; ?>" />
				</p>
				<p>
					<label class="labels" for="email">Email Address:</label>
					<input name="user_email" type="text" value="<?php echo $user->user_email; ?>" />
				</p>
				<p>
					<label class="labels" for="password">Password:</label>
					<input name="user_pass" type="password" value="<?php echo $user->user_pass; ?>" />
				</p>
				<p>
					<input type="submit" value="Submit" />
				</p>
			</form>
		</div>
	
	</body>
</html>



