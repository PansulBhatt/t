<?php

   $connect = mysql_connect("localhost","root","") or die ("Couldnt connect to ");
             mysql_select_db("social") or die ("could not find database");



if(isset($_GET['id']))
{

   $id=mysql_real_escape_string($_GET['id']);
   $query=mysql_query("SELECT * FROM 'blob' WHERE 'id'='$id'");
   while($row=mysql_fetch_assoc($query))
{

      $imageData=$row["image"];
}
   header("content-type: image/png");


}
}




?>