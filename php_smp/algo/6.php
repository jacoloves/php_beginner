<?php

fscanf(STDIN, "%d", $num);

$array = array();
for ($i = 0; $i < $num; $i++) {
    fscanf(STDIN, "%d %d", $a, $b);
    $array[] = [$a, $b];
}

$sum = 0;

foreach ($array as $line) {
    $tmp1 = ($line[1]+1)*$line[1]/2;
    $tmp2 = ($line[0]-1)*$line[0]/2;
    $sum += $tmp1 - $tmp2;
}

print $sum . "\n";