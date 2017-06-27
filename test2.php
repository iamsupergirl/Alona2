<?php
/*Yanushkevich Aliona*/
$mas=array (
    array (1,0,0),
    array (2,1,0),
    array (2,2,1)
);
$mas2=array (
    array (0,0,0),
    array (0,0,0),
    array (0,0,0)
);
        $i=0;
            for ($j = 0; $j < 2; $j++)
             {
                $mas2[$i][$j] = $mas[$i][$j];
            }
        $j=2;
        for ($i = 0; $i < 2; $i++) {
            $mas2[$i][$j]=$mas[$i][$j];
        }
        $i=2;
            for ($j = 2; $j > 0; $j--) {
                $mas2[$i][$j]=$mas[$i] [$j];
            }
        $j=0;
        for ($i = 2; $i > 0; $i--){
            $mas2[$i][$j]= $mas[$i] [$j];
        }
        $mas2[1] [1]=1;
foreach ($mas2 as $line) {
    foreach ($line as $value) {
        echo "$value |";

    }
    echo "<br>";
}
?>