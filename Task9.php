<?php
/*Yanushkevich Aliona*/
function name($iam){
for ($i=0;$i<strlen($iam);$i++){
    echo "<br>$iam[$i]";
}
}

name("Aliona");
echo "<br>";
function mass($dimens,$number){
for($i=0;$i<$dimens;$i++){
    $mass[$i]=$number;
    echo "$mass[$i]";
}
}

mass(7,5);
echo "<br>";
function proverka($iam){
    for ($i=0;$i<count($iam);$i++){
        echo "<br>$iam[$i]";
    }
}
$massv=array(0,7,8);
if (is_array($massv)) proverka($massv);
?>
