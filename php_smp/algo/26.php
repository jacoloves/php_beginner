<?php

[$N] = fscanf(STDIN, str_repeat("%d", 1));

$arr = array();

for ($i=0; $i < $N; $i++) {
    $arr[] = fscanf(STDIN, str_replace("%d", 3));
}