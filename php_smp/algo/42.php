<?php
[$N] = fscanf(STDIN, str_repeat("%d", 1));

$arrA = array();
$arrB = array();

$arrA[] = fscanf(STDIN, str_repeat("%d", $N));
$arrB[] = fscanf(STDIN, str_repeat("%d", $N));



if ($ans > 0) {
    echo $ans+1 . PHP_EOL;
} else {
    echo "0" . PHP_EOL;
}