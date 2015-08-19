<!DOCTYPE html>
<html>
	<head>
		<title>View Feed</title>
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
</body>
</html>
<?php
session_start();

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


   $sqlcode=mysql_query("INSERT INTO assign VALUES ('','$user','$location','$date1');");


    
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
echo "";
}

echo "<br> <br> <br>";
 $query = mysql_query("SELECT * FROM  assign WHERE 1");
             $numrows = mysql_num_rows($query);
             if($numrows !=0)
              {
               while ($row = mysql_fetch_assoc($query)) 
                {
                 $late=$row['time'];
                 $ID = $row['user'];
                  $location="upload/".$ID;
                    echo "<a href='$location'>File:'$ID'.</a>  ";

}


}

?>


