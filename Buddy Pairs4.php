<?php
buddy(10,50);
// buddy (1071625,1103735);
//buddy(1081184,1331967);
function buddy($start, $limit) {
    // $n = $start;
    // $m = $limit;
    for($i = 47; $i <= 48; $i++){
        for($j = 74; $j <= 75; $j++ ){
            $n = divisors($i);
            $m = divisors($j);

            echo "Number of n is " . $i;
            $n = array_sum($n);
            echo "<br />";
            echo "The Sum of n is " . $n;
            echo "<br />";
            echo "<br />";
            echo "The number of m is " . $j;
            echo "<br />";
            $m = array_sum($m);
            echo "The sum of m is " . $m;
            echo "<br />";
            echo "<br />";

            if ($n == $j + 1 && $m == $i + 1 ) {
                echo "We have a buddy!";
                echo "<br />";
                echo "n == to: $n";
                echo "<br />";
                echo "m == to: $m";
                echo "<br />";

            }
        }
    }




    echo $n;
    echo "<br />";
    echo $m;
    echo "<br />";







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









