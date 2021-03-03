<?php

[$N, $X] = fscanf(STDIN, str_repeat("%d", 2));

$arr = array();

$arr[] = fscanf(STDIN, str_repeat("%d", $N));

for ($i=0; $i<count($arr[0]); $i++) {
    if ($X === $arr[0][$i]) {
        unset($arr[0][$i]);
    }
}

$ans_arr = array_values($arr[0]);

for ($i=0; $i<count($ans_arr); $i++) {
    echo $ans_arr[$i] . " ";
}
echo PHP_EOL;
