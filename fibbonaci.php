<?php
    $num=15;
    $temp;
    $first=0;
    $sec=1;
    echo"$first,$sec,";

    while($num>0){
        $temp=$first+$sec;
        echo"$temp,";
        $first=$sec;
        $sec=$temp;
        $num--;
    }
?>