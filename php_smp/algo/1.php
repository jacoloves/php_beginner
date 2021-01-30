<?php

fscanf(STDIN, "%d %d %d", $a, $b, $c);

if ($c === 0) {
    if ($a > $b) {
        print "Takahashi\n";
    } elseif ($a <= $b) {
        print "Aoki\n";
    }
} else {
    if ($a < $b) {
        print "Aoki\n";
    } elseif ($a >= $b) {
        print "Takahashi\n";
    }
}