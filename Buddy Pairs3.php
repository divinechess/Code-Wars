<?php
buddy(8,43);
// buddy (1071625,1103735);
// buddy(1081184,1331967);
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
        echo "<br />";
        echo "n == to: $n";
        echo "<br />";
        echo "m == to: $m";
        echo "<br />";
        echo "Start == to : $start";
        echo "<br />";
        echo "Limit == to : $limit";

    }else{
        echo "Nothing";
        echo "<br />";
        echo "n == to: $n";
        echo "<br />";
        echo "m == to: $m";
        echo "<br />";
        echo "Start == to : $start";
        echo "<br />";
        echo "Limit == to : $limit";

    }
    if($n >= $start && $n <= $limit && $m > $n ){
        return $n; $m;

    }else{
        return "Nothing";
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









