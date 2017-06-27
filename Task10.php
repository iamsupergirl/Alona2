<?php
/*Yanushkevich Aliona*/
function munth($nameMunth){
    switch ($nameMunth){
        case 'February':
            echo '28';
            break;
        case 'January':
        case 'March':
        case 'May':
        case 'July':
        case 'August':
        case 'October':
        case 'Desember':
            echo '31';
            break;
        case 'April':
        case 'June':
        case'September':
        case'November':
            echo '30';
            break;
    }

}
munth("June");
echo"<br>";
echo "<br>";
function text($lines){
    $count=0;
    $returnMass=array(array('e'=>0,'u'=>0, 'i'=>0, 'o'=>0, 'a'=>0));
    for ($i=0;$i<strlen($lines);$i++){
       if($lines[$i]=="/" && $lines[$i+1]=='n'){
           $count++;
           $returnMass[]=(array('e'=>0,'u'=>0, 'i'=>0, 'o'=>0, 'a'=>0));
       }

    switch ($lines[$i]) {
        case 'e':
            $returnMass[$count]['e']++;
            break;
        case 'u':
            $returnMass[$count]['u']++;
            break;
        case 'i':
            $returnMass[$count]['i']++;
            break;
        case 'o':
            $returnMass[$count]['o']++;
            break;
        case 'a':
            $returnMass[$count]['a']++;
            break;
    }

    }
echo "$count";
return $returnMass;
}
function text1($lines)
{
    $count = 0;
    $returnMass = array(array('a' => 0));
    for ($i = 0; $i < strlen($lines); $i++) {
        if ($lines[$i] == "/" && $lines[$i + 1] == 'n') {
            $count++;
            $returnMass[] = (array('a' => 0));
        }
        switch ($lines[$i]) {
            case 'a':
                $returnMass[$count]['a']++;
                break;
        }
    }

    echo "$count";
    return $returnMass;
}
$s="Docker is a software technology providing containers,/n
 promoted by the company Docker, Inc. Docker provides an additional /n
  layer of abstraction and automation of operating-system-level virtualization /n
   on Windows and Linux. Docker uses the resource isolation features of the /n
    Linux kernel such as cgroups and kernel namespaces, and a union-capable file system /n
     such as OverlayFS and others to allow independent \"containers\" to run /n
      within a single Linux instance, avoiding the overhead of starting and maintaining virtual machines.";
$Mass= text($s);
print_r($Mass);
echo "<br>";
echo "<br>";

$Mass=text1($s);
$reverset=array_reverse($Mass);
$preserved=array_reverse($Mass, true);
print_r($preserved);

?>