<?php
buddy(48,75);

function buddy($start, $limit) {
    $n = $start;
    $m = $limit;

    $n = divisors($start);
    $m = divisors($limit);

    Print_r($n);
    echo "<br />";
    Print_r($m);
}

function divisors($x) {
    $divisors_arr = array ();
    for($i = 1; $i < $x; $i ++) {
        if ($x % $i == 0) {
            $divisors_arr [] = $i;
        }
    }
    return $divisors_arr;
}









