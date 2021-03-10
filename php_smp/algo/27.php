<?php

[$A, $B] = fscanf(STDIN, str_repeat("%d", 2));

$G = $A + $B;

if ($G >= 15 && $B >= 8) {
    echo 1 . PHP_EOL;
} elseif ($G >= 10 && $B >= 3) {
    echo 2 . PHP_EOL;
} elseif ($G >= 3) {
    echo 3 . PHP_EOL;
} else {
    echo 4 . PHP_EOL;
}