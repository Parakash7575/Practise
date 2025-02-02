<?php
    $num=15;
    
    for($i=1;$i<=$num;$i++){
        $count=0;
    
        for($j=1;$j<=$num;$j++){
            if($i%$j==0){
                $count++;

            }
        }

        if($count==2){
            echo"$i<br>";
        }
    }
?>