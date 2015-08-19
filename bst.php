<?php



$connect = mysql_connect("localhost","root","") or die ("Couldnt connect to ");
mysql_select_db("social") or die ("could not find database");



class node
{
        public $left;
        public $right;
        public $value;
}


$i=0;
 $query = mysql_query("SELECT * FROM  s_users WHERE 1");
             $numrows = mysql_num_rows($query);
             if($numrows !=0)
              {
               while ($row = mysql_fetch_assoc($query)) 
                {
$array[$i++]=$row['ID'];  




}
}

$input = $array;


$queue = array();

$i = 0;

$level = 2;
$max = count($input);

$current = new node();
$current->value = $input[$i++];
$current->left = null;
$current->right = null;

array_unshift($queue,  $current);

//echo $current->value." ";

while ( $i < $max )
{
        $j = pow(2,$level-1);

        // create nodes until 2^(level-1) and
        while( $j > 0  && $i < $max )
        {

                $parent = array_pop($queue);

                // create a left node
                $newLeft = new node();
                $newLeft->value = $input[$i++];
                $newLeft->left = null;
                $newLeft->right = null;

                $parent->left =  $newLeft;
                array_unshift($queue, $newLeft);

                $j--;

                if($i >= $max || $j <= 0)
                {
                   break;
                }

                // create right node
                $newRight = new node();
                $newRight->value = $input[$i++];
                $newRight->left = null;
                $newRight->right = null;

                $parent->right = $newRight;
                array_unshift($queue, $newRight);

                $j--;
   //             echo print_r($parent,1);

        }

        $level++;
//        echo "level :".$level;
        
}

$BFTQueue = array();

array_unshift($BFTQueue,  $current);


//echo "visit: ".$current->value."<br>";

$i=0;
$bst1=array();
while( count($BFTQueue) > 0 )
{
// next level.
$BFTCurrent = array_pop($BFTQueue);

// print the value and push
//echo "visit: ".$BFTCurrent->value;
   $bst1[$i++]=$BFTCurrent->value;
if($BFTCurrent->left)
{
        array_unshift($BFTQueue, $BFTCurrent->left);
}
if($BFTCurrent->right)
{
        array_unshift($BFTQueue, $BFTCurrent->right);
}

}



for($i=0; $i <= (count($array)-1); $i++){

echo $array[$i]."  ";

}


?>