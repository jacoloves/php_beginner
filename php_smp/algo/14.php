<?php

[$h, $w] = fscanf(STDIN, str_repeat("%d", 2));

$arr = array();
$min = 0;
for ($i = 0; $i < $h; $i++) {
    $arr[] = fscanf(STDIN, str_repeat("%d", $w));
    for ($j = 0; $j < $w; $j++) {
        if ($i == 0 and $j == 0) {
            $min = $arr[$i][$j];
        } else {
            if ($min > $arr[$i][$j]) {
                $min = $arr[$i][$j];
            }
        }
    }
}

$cnt = 0;

for ($i = 0; $i < $h; $i++) {
    for ($j = 0; $j < $w; $j++) {
        if ($arr[$i][$j] > $min) {
            $cnt += $arr[$i][$j] - $min;
        }
    }
}

echo $cnt . PHP_EOL;
