<?php

[$N, $A] = fscanf(STDIN, str_repeat("%d", 2));

$arr = array();

for ($i = 0; $i < $N; ++$i) {
    $arr[] = fscanf(STDIN, str_repeat("%d", 1));
}

$exist = false;

for ($bit = 0; $bit < (1 << $N); ++$bit) {
    $sum = 0;
    for ($i = 0; $i < $N; ++$i) {
        if ($bit & (1 << $i)) {
            $sum += $arr[$i];
        }
    }

    if ($sum == $A) {
        $exist = true;
    }
}

if ($exist) {
    echo "Yes" . PHP_EOL;
} else {
    echo "No" . PHP_EOL;
}