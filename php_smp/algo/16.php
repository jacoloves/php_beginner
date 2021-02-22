<?php

[$N] = fscanf(STDIN, str_repeat("%d", 1));

$arr = array();
for ($i = 1; $i <= $N; $i++) {
    $arr[] = fscanf(STDIN, str_repeat("%d", 2));
}

$cnt = 0;
if ($N == 1) {
    echo $cnt . PHP_EOL;
    exit();
} else {
    for ($i = 0; $i < $N - 1; $i++) {
        for ($j = $i+1; $j < $N; $j++) {
            $ans = ($arr[$j][1] - $arr[$i][1]) / ($arr[$j][0] - $arr[$i][0]);
//            echo "\$ans:" . $ans . PHP_EOL;
            if (-1 <= $ans && $ans <= 1) {
                $cnt++;
            }
        }
    }
}

echo $cnt . PHP_EOL;
