<?php
if (isset($_GET['dir']) === true) {
    $dir = str_replace("\0", '', $_GET['dir']);
} else {
    $dir = '/';
}

echo "<pre>";
if (file_exists($dir) && is_dir($dir)) {
    system('ls -la ' . escapeshellarg($dir));
}
echo "</pre>";
