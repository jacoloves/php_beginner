<?php
[$a, $b] = fscanf(STDIN, str_repeat("%d", 2));
[$c, $d] = fscanf(STDIN, str_repeat("%d", 2));


$ans1 = $a - $c;
$ans2 = $a - $d;
$ans3 = $b - $c;
$ans4 = $b - $d;

$ans = max($ans1, $ans2, $ans3, $ans4);

echo $ans . PHP_EOL;