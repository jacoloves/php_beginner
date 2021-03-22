<?php
[$A] = fscanf(STDIN, str_repeat("%d", 1));
[$B] = fscanf(STDIN, str_repeat("%d", 1));
[$C] = fscanf(STDIN, str_repeat("%d", 1));
[$X] = fscanf(STDIN, str_repeat("%d", 1));

$ans = 0;
for ($i=0; $i<=$A; ++$i) {
    for ($j=0; $j<=$B; ++$j) {
        for ($k=0; $k<=$C; ++$k) {
            $sum = 500*$i+100*$j+50*$k;
            if ($sum == $X) {
                $ans++;
            }
        }
    }
}

echo $ans . PHP_EOL;
