<?php

[$M, $H] = fscanf(STDIN, str_repeat("%d", 2));

if ($H % $M == 0) {
    echo "Yes" . PHP_EOL;
} else {
    echo "No" . PHP_EOL;
}

