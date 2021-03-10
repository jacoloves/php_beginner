<?php

[$N] = fscanf(STDIN, str_repeat("%d", 1));

$arrA = array();
$arrB = array();

for ($i = 0; $i < $N; $i++) {
    [$A, $B] = fscanf(STDIN, str_repeat("%d", 2));
    $arrA[] = $A;
    $arrB[] = $B;
}

$min = 9999999999;
$sum = 0;
$tmp = 0;
$workB = 9999999999;

for ($i = 0; $i < $N; $i++) {
    if ($min > $arrA[$i]) {
        $min = $arrA[$i];
        $tmp = $i;
    }
}

$sum = $arrA[$tmp] + $arrB[$tmp];

for ($i = 0; $i < $N; $i++) {
    if ($i == $tmp) {
        continue;
    }

    if ($arrB[$i] < $sum && $workB > $arrB[$i]) {
        $workB = $arrB[$i];
    }
}

if ($workB == 9999999999) {
    echo $sum . PHP_EOL;
} else {
    echo max($min, $workB) . PHP_EOL;
}