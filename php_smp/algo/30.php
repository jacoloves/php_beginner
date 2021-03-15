<?php

[$A, $B, $W] = fscanf(STDIN, str_repeat("%d", 3));

$N = floor(1000*$W/$A);
$S = ceil(1000*$W/$B);

if ($S > $N) {
    echo "UNSATISFIABLE";
} else {
    echo $S . ' ' . $N;
}