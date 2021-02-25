<?php

[$N] = fscanf(STDIN, str_repeat("%d", 1));

$arr = array();

for ($i = 0; $i < 2; $i++) {
    $arr[] = fscanf(STDIN, str_repeat("%d", $N));
}

$ans = 0;

for ($i = 0; $i < $N; $i++) {
    $ans += $arr[0][$i] * $arr[1][$i];

}

if ($ans === 0) {
    echo "Yes" . PHP_EOL;
} else {
    echo "No" . PHP_EOL;
}