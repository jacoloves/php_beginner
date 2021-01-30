<?php

fscanf(STDIN, "%d %d %d", $a, $b, $c);

$array = array();
for ($i = 0; $i < $a; $i++) {
    fscanf(STDIN, "%d %d", $x, $y);
    $array[] = [$x, $y];
}

foreach ($array as $line) {
    if (($b > $line[0]) && ($c < $line[1])) {
        print "Yes\n";
        exit();
    }
}

print "No\n";
