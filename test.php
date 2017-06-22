<?php
$a=array(1,0,0,4,8,0,6,1);
$a1=array(2,1,0,5,1,8,9,0);
    $a2=array(2,2,1,4,8,9,6,2);
for ($i=0;$i<count($a);$i++) {

    if ($a[$i]>2 && $a[$i]<5)
        echo "$a[$i] |";
}
 echo "<br>";
 for ($i=0; $i<count($a1); $i++) {
     echo "$a1[$i] |";
}
echo "<br>";
$x=3;
 switch ($x) {
     case 1:
         echo "$x";
         break;
     case 2:
         echo "$x";
         break;
     case 3:
         echo "$x";
         break;
 }
?>
