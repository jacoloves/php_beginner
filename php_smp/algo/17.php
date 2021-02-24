<?php

[$x, $y] = fscanf(STDIN, str_repeat("%d", 2));

if ($x > $y) {
    $y += 3;
    if ($x < $y) {
        echo "Yes" . PHP_EOL;
    } else {
        echo "No" . PHP_EOL;
    }
} else {
    $x += 3;
    if ($x > $y) {
        echo "Yes" . PHP_EOL;
    } else {
        echo "No" . PHP_EOL;
    }
}
