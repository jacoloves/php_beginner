<?php

[$N] = fscanf(STDIN, str_repeat("%d", 1));

$flg = false;

for ($i=2; $i*$i <= $N; ++$i) {
    if ($N % $i == 0) {
        break;
    }

}