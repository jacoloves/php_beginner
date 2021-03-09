<?php

[$N] = fscanf(STDIN, str_repeat("%d", 1));

$arr = array();

for ($i=0; $i < $N; $i++) {
    $arr[] = fscanf(STDIN, str_repeat("%d", 3));
}

$min = 9999999999999;
for ($i=0; $i<$N; $i++) {
    if (($arr[$i][2]-$arr[$i][0] > 0) && ($min > $arr[$i][1])) {
        $min = $arr[$i][1];
    }
}

if ($min === 9999999999999) {
    echo -1 . PHP_EOL;
} else {
    echo $min . PHP_EOL;
}