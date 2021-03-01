<?php

[$V, $T, $S, $D] = fscanf(STDIN, str_repeat("%d", 4));

$div = $D / $V;

if ($div < $T || $S < $div) {
    echo "Yes" . PHP_EOL;
} else {
    echo "No" . PHP_EOL;
}