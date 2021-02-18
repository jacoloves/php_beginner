<?php

if (isset($_GET['dir']) === true) {
    $dir = $_GET['dir'];
} else {
    $dir = '/';
}

echo "<pre>";
system('ls -la ' . $dir);
echo "</pre>";
