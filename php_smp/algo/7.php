<?php

[$N] = ints();
$a = ints();

$max_a = max($a);
$max_cnt = 0;
$ans = $max_a;
for ($i = 2; $i <= $max_a; $i++) {
    $cnt = 0;
    for ($j = 0; $j < $N; $j++) {
        if ($a[$j] % $i === 0) ++$cnt;
    }
    if ($cnt > $max_cnt) {
        $max_cnt = $cnt;
        $ans = $i;
    }
}

echo $ans . PHP_EOL;

function ints() {
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}