<?php
[$N] = fscanf(STDIN, str_repeat("%d", 1));

$arr = array();

$arr[] = fscanf(STDIN, str_repeat("%d", $N));

$flg = false;
$cnt = 0;

while (true) {
    for ($i=0; $i<$N; ++$i) {
        if ($arr[0][$i] % 2 === 0) {
            $arr[0][$i] = $arr[0][$i] / 2;

        } else {
            $flg = true;
            break;
        }
    }

    if ($flg) {
        break;
    } else {
        $cnt++;
    }
}

echo $cnt . PHP_EOL;
