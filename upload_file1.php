<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Submissions</title>
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




<?php
session_start();

if($_SESSION['ID']){
include "connect.php";

//print date("H:i");
//echo "<br>";
//print date("H:i");//hours and minutes
//print (" ");
//print date("d,j");
//print date("n,m,Y");

//echo "<br>";


$date1=date("nmY H:i");

//echo $date1;











if(isset($_POST["submit"]))
{

 
 $name=$_FILES["file"]["name"];
 $type=$_FILES["file"]["type"];
 $size=$_FILES["file"]["size"];
 $tmp_name=$_FILES["file"]["tmp_name"];
 $error=$_FILES["file"]["error"];
  

 if($size > 11000 )
{
 if($error >0)
{

echo "Error!!!".$error;

}
else
{
 $location="upload/".$name;
 move_uploaded_file($tmp_name,$location);
 $user=$name;


   $sqlcode=mysql_query("INSERT INTO imageupload VALUES ('','$user','$location','$date1');");


    
   echo "<a href='$location'>Click here to view your file.</a>";



}


}
else
{
echo "please check the size of the file";
}

}



else
{
echo "Submissions";
}

echo "<br> <br> <br>";
 $query = mysql_query("SELECT * FROM  imageupload WHERE 1");
             $numrows = mysql_num_rows($query);
             if($numrows !=0)
              {
               while ($row = mysql_fetch_assoc($query)) 
                {
                 $late=$row['time'];
                 $ID = $row['user'];
                  $location="upload/".$ID;
                    echo "<a href='$location'>File:'$ID'.</a>  ";

                     
if($late<=5052014)
{echo "on time";
}
else
{
echo "late";
}
echo "<br>";
}
}

}else
 header("location:in.html");


?>


	</body>
</html>


