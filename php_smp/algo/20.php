<?php

[$n, $x] = fscanf(STDIN, "%d%d");
$sum = 0;
$answer = -1;
for ($i = 0; $i < $n; $i++) {
    [$v, $p] = fscanf(STDIN, "%d%d");
    $sum += $v * $p;
    if ($sum > $x * 100) {
        $answer = $i + 1;
        break;
    }
}
echo $answer . "\n";