<?php

[$V, $T, $S, $D] = fscanf(STDIN, str_repeat("%d", 4));

$tmp = $S -$T;
$tmp_v = $V*$tmp;

if ($tmp_v >= $D) {
    echo "Yes" . PHP_EOL;
} else {
    echo "No" . PHP_EOL;
}