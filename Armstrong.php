<?php
    $num=121;

    $temp=$num;
    $rem;
    $palindrome=0;

    while($num>0){
        $rem=$num%10;
        $palindrome=$palindrome*10+$rem;
        
        $num=$num/10;

        
    }
    if($palindrome==$temp){
        echo"number  is palindrome";

    }
    else{
        echo"not palindrome";
    }

?>