<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Virtual Classroom</title>
<!-- Bootstrap -->
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
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts1/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
<div class="header_bg1">
<div class="container">
	<div class="row header">
		<div class="logo navbar-left">
			<h1><a href="index.html">Learner</a></h1>
		</div>
		<div class="clearfix"></div>
	</div>
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
		        <li class="active"><a href="contact.php">Contact</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		    <!-- start soc_icons -->
		</nav>
		
	</div>
	<div class="clearfix"></div>
</div>
</div>
<div class="main_bg"><!-- start main -->
	<div class="container">
	</div>
</div><!-- end main -->
<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<div class="main row">
			    <div class="col-md-4 company_ad">
				    <h2>find Address :</h2>
      				<address>
						 <p>500 </p>
						 <p>23-22-21-20 Street,</p>
						 <p>Indis</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <a href="mailto:info@mycompany.com">info(at)mycompany.com</a></p>
				   	</address>
				</div>
				<div class="col-md-8">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					    <form method="post" action="contact.php">
					    	<div>
						    	<span>name</span>
						    	<span><input type="username" class="form-control"  name="pl"></span>
						    </div>
						    <div>
						    	<span>e-mail</span>
						    	<span><input type="email" class="form-control"  name="email"></span>
						    </div>
						    <div>
						    	<span>subject</span>
						    	<span><textarea  name="sub"> </textarea></span>
						    </div>
						   <div>
						   		<label class="fa-btn btn-1 btn-1e"><input type="submit" value="submit us" name="submit"></label>
						  </div>
					    </form>


<?php



if(isset($_POST['submit']))  
{
   $ID = mysql_real_escape_string($_POST['pl']);  
   $email = mysql_real_escape_string($_POST['email']); 
   $sub = mysql_real_escape_string($_POST['sub']); 


  if($ID && $email && $sub )
 {
  
    $connect = mysql_connect("localhost","root","");
    mysql_select_db("social");
    $query = mysql_query("INSERT INTO contact VALUES('$ID','$email','$sub');");
    echo "<p>";  
    echo "Your message has been sent";     
    echo "<p>";
     

   }

   else
    {

   echo "All fields are required.";
    }
 }


    




?>




				    </div>
  			</div>		
  			<div class="clearfix"></div>		
	</div> 
</div>
</div>




<div class="footer_bg"><!-- start footer -->
	<div class="container">
		<div class="row  footer">
			<div class="copy text-center">
				<p class="link"><span>Designed By: Pansul Bhatt using  <a href="http://w3layouts.com/"> W3Layouts</a></span></p>
			</div>
		</div>
	</div>
</div>
</body>
</html>