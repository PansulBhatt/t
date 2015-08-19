<html>
<head><h1><center>SIGN UP</h1></head>
<body>
<body background="nice.jpg">
<center>
<form action="signup.php"  method="POST">
     ID : <input type="text" name="ID"><p>
     Password1: <input type="password" name="password3"><p>
     Password2: <input type="password" name="password4"><p>
     user_email: <input type="text" name="user_email"><p>
     user_nicename : <input type="text" name="user_nicename"><p>
     Date:<input type="date" name="d"><p>




       <input type="submit" name="submit" value="submit">


</form>




<?php



if(isset($_POST['submit']))  
{
   $ID = mysql_real_escape_string($_POST['ID']);  
   $password3 = mysql_real_escape_string($_POST['password3']); 
   $password4 = mysql_real_escape_string($_POST['password4']); 
   $user_email = mysql_real_escape_string($_POST['user_email']); 
   $user_nicename = mysql_real_escape_string($_POST['user_nicename']); 
   $d = mysql_real_escape_string($_POST['d']); 
    
    
/*   $salt = 'S@lt!'.$ID;
$salted_password = $password3.$salt;
$password1= sha1($salted_password);



$salted_password = $password4.$salt;
$password2= sha1($salted_password);

*/


  if($ID && $password1 && $password2 && $user_email && $user_nicename )
 {
  
  if($password1==$password2)
   {
    $connect = mysql_connect("localhost","root","");
    mysql_select_db("social");
    $pass=$password1;
    $query = mysql_query("INSERT INTO s_users VALUES('$ID','$user_email','$pass','$user_nicename');");
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

</body>
</html>