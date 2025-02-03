<?php

$num = 121;
$temp=$num;
$rev = 0;
$rem;

while ($num != 0) {
    $rem = $num % 10;
    $rev = $rev * 10 + $rem;

    $num = (int)($num / 10);
}


if($rev==$temp){
    echo"$rev is palindrone";

}
else{
    echo"$rev is not palindrone";
}

?>
