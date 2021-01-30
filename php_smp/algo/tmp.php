<?php

function main($lines)
{
    foreach ($lines as $values) {
        $datas = array();
        $datas[] = explode(" ", $values);

        }
    }
}

$array = array();
while (true) {
    $stdin = fgets(STDIN);
    if ($stdin == "") {
        break;
    }
    $array[] = rtrim($stdin);
}
main($array);