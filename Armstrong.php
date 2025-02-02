<?php
    $num=153;

    $temp=$num;
    $rem;
    $arm=0;

    while($num>0){
        $rem=$num%10;
        $arm=$arm+($rem*$rem*$rem);
        $num=$num/10;

        
    }
    if($arm==$temp){
        echo"number  is armstrong";

    }
    else{
        echo"not armstrong";
    }

?>