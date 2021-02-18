<?php
if (strpos($_GET['design'], "\0") !== false) {
    exit();
}

include '/var/www/html/design/' . basename($_GET['design']) . '.html';