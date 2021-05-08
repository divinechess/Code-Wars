<?php
buddy(48,50);
//  buddy (1071625,1103735);
//buddy(57345, 90061);
//buddy(1081184,1331967);
//buddy(6379, 8275);

function buddy($start, $limit) {
       $n = [];
       $m = [];

    for($i = $start; $i <= $limit ; $i++) {


        $n = array_sum(divisors($i)) -1;
        //print_r($n);
        //echo "<br />";

       //print_r($n);
       //echo "<br />";
        //echo "<br />";
        $m = divisors($n);
        $s = array_sum($m);
        $m = $s -1;
        //print_r($s);
        //print_r($m);
        //echo "<br />";
        if($m == $i ){   //&& $s - 1 > $i
            echo "We have a buddy!";
            echo "<br />";
            echo "$m $n"; //inverse

        }



        //return "$n";
    }
    echo "Nothing";

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









