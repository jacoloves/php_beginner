<?php

[$X] = fscanf(STDIN, str_repeat("%d", 1));

$a = $X / 100;

$b = ((int)$a + 1)*100;

$ans = $b - $X;

echo $ans . PHP_EOL;
