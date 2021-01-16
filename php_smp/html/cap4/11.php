<?php

$hour = date('G');
if ($hour === '6') {
    echo "朝の６時です、おはようございます。", PHP_EOL;
} elseif ($hour === '12') {
    echo "しょうごですこんにちは。", PHP_EOL;
} elseif ($hour === '15') {
    echo "3時のおやつの時間です。", PHP_EOL;
} else {
    echo "どうも", PHP_EOL;
}