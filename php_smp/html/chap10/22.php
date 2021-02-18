<?php
if (isset($_GET['string']) === true) {
    $string = $_GET['string'];
} else {
    $string = '';
}

echo htmlspecialchars($string, ENT_QUOTES, 'UTF-8');