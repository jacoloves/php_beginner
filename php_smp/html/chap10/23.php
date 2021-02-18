<?php
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', '/path/to/php/php_error.log');

if (isset($_GET['string']) === true) {
    $string = $_GET['string'];
} else {
    $string = '';
}

echo htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
