<?php

if(isset($argv[1]) && $argv[1]) {
    echo '与えられた引数は真です。', PHP_EOL;
}
else {
    echo '引数が与えられていないか、与えられた引数が真ではありません', PHP_EOL;
}