<?php



print date("H:i");
echo "<br>";
print date("H:i");//hours and minutes
print (" ");
//print date("d,j");
print date("n,m,Y");

echo "<br>";


$date1=date("nmY Hi");

echo $date1;
if($date1<5052014)
{echo "late";
}
else
{
echo "on time";
}





?>