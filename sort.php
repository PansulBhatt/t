<?php

  $connect = mysql_connect("localhost","root","") or die ("Couldnt connect to ");
  mysql_select_db("social") or die ("could not find database");
      


 function build_heap(&$array, $i, $t){
  $tmp_var = $array[$i];    
  $j = $i * 2 + 1;

  while ($j <= $t)  {
   if($j < $t)
    if($array[$j] < $array[$j + 1]) {
     $j = $j + 1; 
    }
   if($tmp_var < $array[$j]) {
    $array[$i] = $array[$j];
    $i = $j;
    $j = 2 * $i + 1;
   } else {
    $j = $t + 1;
   }
  }
  $array[$i] = $tmp_var;
 }

 function heap_sort(&$array) {
  $init = (int)floor((count($array) - 1) / 2);
  for($i=$init; $i >= 0; $i--){
   $count = count($array) - 1;
   build_heap($array, $i, $count);
  }

 
  for ($i = (count($array) - 1); $i >= 1; $i--)  {
   $tmp_var = $array[0];
   $array [0] = $array [$i];
   $array [$i] = $tmp_var;
   build_heap($array, 0, $i - 1);
  }
 }


//$array = array(9,8,7,6,5,4,3,2,1,0,1un0,1000,0);
heap_sort($array);


$i=0;
 $query = mysql_query("SELECT * FROM  imageupload WHERE 1");
             $numrows = mysql_num_rows($query);
             if($numrows !=0)
              {
               while ($row = mysql_fetch_assoc($query)) 
                {
                 $ID = $row['user'];
                 $array[$i++]=$row['id'];  
                  $location="upload/".$ID;
                    //echo "<a href='$location'>File:'$ID'.</a><br>";

                     

}
}

heap_sort($array);


for($i=0; $i <= (count($array)-1); $i++){

echo $array[$i]."  ";

}
//print_r($array);
?>