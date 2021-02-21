<?php

[$h, $w] = fscanf(STDIN, str_repeat("%d", 2));

$arr = array();
$min = 0;
$max = 0;
for ($i = 0; $i < $h; $i++) {
    $arr[] = fscanf(STDIN, str_repeat("%d", $w));
    for ($j = 0; $j < $w; $j++) {
        if ($i == 0 and $j == 0) {
            $min = $arr[$i][$j];
            $max = $arr[$i][$j];
        } else {
            if ($min > $arr[$i][$j]) {
                $min = $arr[$i][$j];
            }

            if ($max < $arr[$i][$j]) {
                $max = $arr[$i][$j];
            }
        }
    }

}

echo $min . PHP_EOL;
echo $max . PHP_EOL;

