<?php
[$a] = fscanf(STDIN, str_repeat("%d", 1));
[$b, $c] = fscanf(STDIN, str_repeat("%d", 2));
[$s] = fscanf(STDIN, str_repeat("%s", 1));

echo $a+$b+$c . " " . $s . PHP_EOL;
