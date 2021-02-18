<?php
if (isset($_GET['dir']) === true) {
    $dir = str_replace("\0", '', $_GET['dir']);
} else {
    $dir = '/';
}
