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
    echo "<br />";
    // echo $start;
    $n = array_sum($n);
    $m = array_sum($m);
    if ($n == $limit + 1 && $m == $start + 1){
        echo "We have a buddy!";

    }

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









