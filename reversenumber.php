<?php

$num = 12345;
$rev = 0;
$rem;

while ($num != 0) {
    $rem = $num % 10;
    $rev = $rev * 10 + $rem;

    $num = (int)($num / 10);
}

echo $rev;
