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
}
else
header("location:in.html");



?>


