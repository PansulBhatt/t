<?php
	require_once('includes/class-query.php');
	require_once('includes/class-insert.php');
	
	session_start();
	$logged_user_id = $_SESSION['ID'];
	if($_SESSION['ID']){
	if ( !empty ( $_GET['uid'] ) ) {
		$user_id = $_GET['uid'];
		$user = $query->load_user_object1($user_id);
		
		if ( $logged_user_id == $user_id ) {
			$mine = true;
		}
	} else {
		$user = $query->load_user_object1($logged_user_id);
		$mine = true;
	}

	$friends = $query->get_friends($logged_user_id);
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
		<title>Teacher View Profile</title>
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



<h1>View Profile</h1>
		<div class="content">
			<p>Name: <?php echo $user->user_nicename; ?></p>
			<p>Email Address: <?php echo $user->user_email; ?></p>
			<p>Course: <?php echo $user->course; ?></p>
			<?php if ( !$mine ) : ?>
				<?php if ( !in_array($user_id, $friends) ) : ?>
					<p>
						<form method="post">
							<input name="user_id" type="hidden" value="<?php echo $logged_user_id; ?>" />
							<input name="friend_id" type="hidden" value="<?php echo $user_id; ?>" />
							<input name="type" type="hidden" value="add" />
							<input type="submit" value="Add as Friend" />
						</form>
					</p>
				<?php else : ?>
					<p>
						<form method="post">
							<input name="user_id" type="hidden" value="<?php echo $logged_user_id; ?>" />
							<input name="friend_id" type="hidden" value="<?php echo $user_id; ?>" />
							<input name="type" type="hidden" value="remove" />
							<input type="submit" value="Remove Friend" />
						</form>
					</p>
				<?php endif; ?>
			<?php endif; ?>
		</div>

	</body>
</html>


