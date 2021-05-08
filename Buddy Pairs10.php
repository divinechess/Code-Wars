<?php
$num = 10;

            $m = divisors($num);
            echo "Divisors is " . $m;
            $m = array_sum($m);
            echo "The sum of m is " . $m;
            echo "<br />";
            // echo "<br />";


function divisors($x) {
    $divisors_arr = array ();
    for($i = 1; $i < $x; $i ++) {
        if ($x % $i == 0) {
            $divisors_arr [] = $i;
        }
    }
    return $divisors_arr;
}









