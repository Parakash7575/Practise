<?php
    $num=15;
    $temp;
    $first=0;
    $sec=1;
    echo"$first,$sec,";

    for($i=1;$i<15;$i++){
        $temp=$first+$sec;
        echo"$temp,";
        $first=$sec;
        $sec=$temp;

    }
?>