<?php
    $num=10;

    $a=0;
    $b=1;
    $temp;

    echo"$a,$b,";
    while($num>2){

        $temp=$a+$b;
        echo"$temp".",";
        $a=$b;
        $b=$temp;

        $num--;

    }

?>