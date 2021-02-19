<?php

$nmt = ints();

$n = $nmt[0];
$m = $nmt[1];
$t = $nmt[2];

$max_n = $n;
$arr = array();
for ($i = 1; $i <= $m; $i++) {
    $nums = ints();
    $arr[] = $nums;
}

$time_cnt = 0;
$arr_cnt = 0;
for ($i = 0; $i <= $t; $i += 0.5) {
    echo "\$i:" . $i . PHP_EOL;
    echo "\$n:" . $n . PHP_EOL;
    echo "\$time_cnt:" . $time_cnt . PHP_EOL;
    echo "\$arr_cnt:" . $arr_cnt . PHP_EOL;
    echo "---------------------------------" . PHP_EOL;
    if ($arr_cnt < $m) {
        if (($i === $time_cnt+0.5) && ((float)$arr[$arr_cnt][0] > $i) && ($n !== 0)) {
            $n--;
            $time_cnt++;
        }
        elseif (((float)$arr[$arr_cnt][0] <= $i && $i <= (float)$arr[$arr_cnt][1]) && ($n < $max_n)) {
            if ($i === $time_cnt+0.5) {
                $n++;
                $time_cnt++;
            }
        }

        if ($i === (float)$arr[$arr_cnt][1]) {
            $arr_cnt++;
        }
    }
    elseif ($arr_cnt >= $m) {
        if (($i === $time_cnt+0.5) && ($n !== 0)) {
            $n--;
            $time_cnt++;
        }
    }

    if ($n === 0) {
        break;
    }

}

if ($n > 0) {
    echo "Yes" . PHP_EOL;
} else {
    echo "No" .PHP_EOL;
}


function ints() {
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}

function std_string() {
    return array_map(null, explode(' ', trim(fgets(STDIN))));
}