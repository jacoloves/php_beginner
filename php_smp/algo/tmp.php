<?php

fscanf(STDIN, "%d", $num);

function ints() {
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}