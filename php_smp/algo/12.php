<?php

[$n, $m, $t] = fscanf(STDIN, str_repeat("%d", 3));
$leavetime = 0;
$rest = $n;
for ($i = 0; $i < $m; $i++) {
    [$a, $b] = fscanf(STDIN, str_repeat("%d", 2));
    $rest -= $a - $leavetime;
    if ($rest <= 0) {
        echo 'No';
        exit();
    }
    $rest = min($n, $rest + $b - $a);
    $leavetime = $b;
}

$rest -= $t - $leavetime;
echo ($rest > 0 ? 'Yes' : 'No');