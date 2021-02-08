<?php
$str = '2021-04-07';

$strdate = new DateTime($str);

$nowdate = new DateTime("now");

$ans = date_diff($strdate, $nowdate);

echo $ans->days;
