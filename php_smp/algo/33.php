<?php
[$s] = fscanf(STDIN, str_repeat("%s", 1));

$str_arry = str_split($s);

$cnt = 0;
for ($i=0; $i<3; ++$i) {
    if ($str_arry[$i] === '1') {
        $cnt++;
    }
}

echo $cnt . PHP_EOL;
