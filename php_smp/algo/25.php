<?php

[$A, $B] = fscanf(STDIN, str_repeat("%d", 2));

$ans = 100.0 - ($B/$A)*100;

echo $ans . PHP_EOL;