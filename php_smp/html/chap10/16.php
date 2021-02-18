<?php
$string = 'こたんたにたちたわた、世界！';
if (strpos($string, $_GET['keyword']) !== false) {
    eval("echo htmlspecialchars(str_replace('".$_GET['keyword']."','','".$string."'), ENT_QUOTES, 'UTF-8');");
}