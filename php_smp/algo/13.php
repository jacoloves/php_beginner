<?php

[$n, $w] = fscanf(STDIN, str_repeat("%d", 2));

$ans = $n / $w;

echo (int)$ans . PHP_EOL;