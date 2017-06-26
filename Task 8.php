<?php
/*Yanushkevich Aliona*/
$sch=0;
$summ=0;
$mult=0;
$simple=0;
$medium=0;
$getAllElem=range(-74,48,6);
foreach ($getAllElem as $number){
        if ($number % 2 == 0) {
            $sch++;
            $mult=$mult+$number;
            $medium=$mult/$sch;

        }else{
            if ($number%3!=0 && $number>1)$simple++;
            $summ=$summ+$number;
        }
        if ($number==2 || $number==3) $simple++;
        echo " $number ";
}
echo "<br>Kоличество простых чисел в интервале от (48 до - 74)= $simple";
echo "<br> Cреднее значение элементов кратных 2 в интервале от (48 до - 74)= $medium";
echo "<br>Сумма нечетных элементов в интервале от (48 до - 74)= $summ";
echo "<br>Количество четных элементов в интервале от (48 до - 74)= $sch";
?>