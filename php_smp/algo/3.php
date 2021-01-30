<?php

fscanf(STDIN, "%d %d", $n, $m);

$array = array();
for ($i = 0; $i < $m; $i++) {
    fscanf(STDIN, "%d %d", $a, $b);
    $array[] = [$a, $b];
}

fscanf(STDIN, "%d", $k);

$array2 = array();

for ($i = 0; $i < $k; $i++) {
    fscanf(STDIN, "%d %d", $c, $d);
    $array2[] = [$c, $d];
}

$num_array = array();
foreach ($array2 as $line) {
    $num_array[] = $line[0];
    $num_array[] = $line[1];
}

$unique_array = array_unique($num_array);

$cnt = 0;
foreach ($array as $line) {
    $a_flg = 0;
    $b_flg = 0;

    foreach ($unique_array as $value) {
        if ($line[0] === $value) {
            $a_flg = 1;
        }
        if (($line[1] === $value) ) {
            $b_flg = 1;
        }
    }
    if (($a_flg === 1) && ($b_flg === 1)) {
        $cnt++;
    }
}

print $cnt . "\n";
