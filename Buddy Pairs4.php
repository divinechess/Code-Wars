<?php
buddy(10,50);
// buddy (1071625,1103735);
//buddy(1081184,1331967);
function buddy($start, $limit) {
    // $n = $start;
    // $m = $limit;
    for($i = $start; $i <= $limit; $i++){
        for($j = $start + 1; $j <= ($limit * 2); $j++ ){
            $n = divisors($start);
            $m = divisors($limit);
            $n = array_sum($n);
            $m = array_sum($m);
            if ($n == $limit + 1 && $m == $start + 1 && $m > $n) {
                echo "We have a buddy!";
                echo "<br />";
                echo "n == to: $n";
                echo "<br />";
                echo "m == to: $m";
                echo "<br />";
                echo "Start == to : $start";
                echo "<br />";
                echo "Limit == to : $limit";
            }
        }
    }




    echo $n;
    echo "<br />";
    echo $m;
    echo "<br />";


echo "Nothing";
return "Nothing";

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









