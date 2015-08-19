
<body>

<center>
<?php

session_start();

$ID = $_POST['ID'];
$user_pass = $_POST['user_pass'];


if ($ID&&$user_pass)
{
             $connect = mysql_connect("localhost","root","") or die ("Couldnt connect to ");
             mysql_select_db("social") or die ("could not find database");
             $query = mysql_query("SELECT * FROM  s_users WHERE ID='$ID'");
             $numrows = mysql_num_rows($query);
             if($numrows !=0)
              {
               while ($row = mysql_fetch_assoc($query)) 
                {
                  $dbID = $row['ID'];
                  $dbuser_pass = $row['user_pass'];
 
                  }
                          if ($ID==$dbID&&$user_pass==$dbuser_pass)
                         {
 
                             header('location:index.php');                      
                             $_SESSION['ID']=$dbID;                          

                         }
                           else
                               echo "Incorrect user_pass";
                              
}
                      else
                              die("That ID doesnt exist");
}
else
    die("Please enter a ID and user_pass");


?>
</body>