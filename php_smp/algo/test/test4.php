<?php

[$N] = fscanf(STDIN, str_repeat("%d", 1));

$cnt = 0;

while ($N > 0) {
    if ($N % 2 == 1) {
        $cnt++;
    }
    $N /= 2;
}

echo $cnt . PHP_EOL;