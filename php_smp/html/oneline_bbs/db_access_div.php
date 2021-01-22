<?php
function get_pdo() {
    $dsn = "mysql:dbname=oneline_bbs;host=mysql;charset=utf8";
    $user = 'root';
    $password = 'root';
    return new PDO($dsn, $user, $password);
}
?>