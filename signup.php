
<!DOCTYPE HTML>
<html>
<head>
<title>Virtual Classroom</title>
<!-- Bootstrap -->



	<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Blueprint: On Scroll Effect Layout</title>
		<meta name="description" content="Blueprint: On Scroll Effect Layout" />
		<meta name="keywords" content="on scroll, effect, slide in, layout, template, transition, javascript" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css4/demo.css" />
		<link rel="stylesheet" type="text/css" href="css4/component.css" />
		<script src="js4/modernizr.custom.js"></script>
	






<link href="css1/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css1/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="css1/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js1/jquery.min.js"></script>
<script type="text/javascript" src="js1/bootstrap.js"></script>
<script type="text/javascript" src="js1/bootstrap.min.js"></script>





<!-- start slider -->
<link href="css1/slider.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js1/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="js1/jquery.cslider.js"></script>
	<script type="text/javascript">
			$(function() {

				$('#da-slider').cslider({
					autoplay : true,
					bgincrement : 450
				});

			});
		</script>
<!-- Owl Carousel Assets -->
<link href="css1/owl.carousel.css" rel="stylesheet">
<script src="js1/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});

			});
		</script>
		<!-- //Owl Carousel Assets -->
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts1/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
<div class="header_bg">
<div class="container">
<br>
</div>
</div>
<div class="container">
	<div class="row h_menu">
		<nav class="navbar navbar-default navbar-left" role="navigation">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="in.html">Home</a></li>
		        <li><a href="about.html">About</a></li>
		        <li><a href="contact.html">Contact</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		    <!-- start soc_icons -->
		</nav>
		</div>
</div>

<div class="container">
			<div id="cbp-so-scroller" class="cbp-so-scroller">
				<section class="cbp-so-section">
					<article class="cbp-so-side cbp-so-side-left">
						<h2>Student Login</h2>










<form action="signup.php"  method="POST">
    <p> ID : <input type="text" name="ID">
     <p>Password1: <input type="password" name="password"><p>
     Password2: <input type="password" name="password1"><p>
     user_email: <input type="text" name="user_email"><p>
     user_nicename : <input type="text" name="user_nicename"><p>
     course:<select name="select">
  <option value="software engineering">software engineering</option> 
  <option value="some value" selected>abc</option>
</select>

<p>



       <input type="submit" name="submit" value="Submit">
     <input type="reset" name="cancel" value="Cancel">


</form>




<?php



if(isset($_POST['submit']))  
{
   $ID = mysql_real_escape_string($_POST['ID']);  
   $password1 = mysql_real_escape_string($_POST['password']); 
   $password2 = mysql_real_escape_string($_POST['password1']); 
   $user_email = mysql_real_escape_string($_POST['user_email']); 
   $user_nicename = mysql_real_escape_string($_POST['user_nicename']); 
   $course=($_POST['select']);   
/*    
   $salt = 'S@lt!'.$ID;
$salted_password = $password.$salt;
$password1= sha1($salted_password);
*/

/*
$salted_password = $password1.$salt;
$password2= sha1($salted_password);
*/



  if($ID && $password1 && $password2 && $user_email && $user_nicename )
 {
  
  if($password1==$password2)
   {
    $connect = mysql_connect("localhost","root","");
    mysql_select_db("social");
    $pass=$password1;
    $query = mysql_query("INSERT INTO s_users VALUES('$course','$ID','$user_email','$pass','$user_nicename');");
    echo "<p>";  
    echo "You have been registered";     
    echo "<p>";
     

   }else
     {
    echo "Password must match";
     }
}
   else
    {

   echo "All fields are required.";
    }
 }


    




?>


</div>
<div class="slider_bg"><!-- start slider -->
	<div class="container">
		<div id="da-slider" class="da-slider text-center">
			<div class="da-slide">
				<h2>Virtual Classroom</h2>
				<p> A virtual-based collaboration differs from the classroom-based collaboration in terms of the interactions among the community members.<span class="hide_text">  The virtual learning system must be able to provide tools that will facilitate communication, collaboration and the process of problem solving. </span></p>
				<h3 class="da-link"><a href="about.html" class="fa-btn btn-1 btn-1e">view more</a></h3>
			</div>
			<div class="da-slide">
				<h2>online educations</h2>
				<p>bring the team together in order to accomplish a common goal which can be easily achieved within classroom-based collaborative activities.<span class="hide_text"> The virtual learning system must be able to provide tools that will facilitate communication, collaboration and the process of problem solving. </span></p>
				<h3 class="da-link"><a href="about.html" class="fa-btn btn-1 btn-1e">view more</a></h3>
			</div>
			<div class="da-slide">
				<h2>education portal</h2>
				<p> The virtual learning system must be able to provide tools that will facilitate communication, collaboration and the process of problem solving. <span class="hide_text">  In addition, the virtual learning system should also be able to facilitate the project management functions</span></p>
				<h3 class="da-link"><a href="about.html" class="fa-btn btn-1 btn-1e">view more</a></h3>
			</div>
			
	   </div>
	</div>
</div><!-- end slider -->





</body>
</html>