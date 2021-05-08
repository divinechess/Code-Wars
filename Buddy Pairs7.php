<?php
//buddy(10,50);
 // buddy (1071625,1103735);
 buddy(57345, 90061);
//buddy(1081184,1331967);
function buddy($start, $limit) {
    // $n = $start;
    // $m = $limit;

    for($i = $start; $i <= $limit; $i++){
        $n = divisors($i);
        $n = array_sum($n);
        echo "Number of n is " . $i;
        echo "<br />";
        echo "The Sum of n is " . $n;
        echo "<br />";
          for($j = $limit * 2; $j >= $start ; $j-- ){

            $m = divisors($j);
            echo "<br />";
            echo "The number of m is " . $j;
            echo "<br />";
            $m = array_sum($m);
            echo "The sum of m is " . $m;
            echo "<br />";
            // echo "<br />";

            if ($n == $j + 1 && $m == $i + 1 ) {
                echo "We have a buddy!";
                echo "<br />";
                echo "n == to: $n";
                echo "<br />";
                echo "m == to: $m";
                echo "<br />";
                echo $i;
                echo "<br />";
                echo $j;
                return "$i $j";
            }
        }
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









