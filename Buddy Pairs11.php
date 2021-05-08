<?php
//buddy(48,50);
// buddy (1071625,1103735);
buddy(57345, 90061);
//buddy(1081184,1331967);
//buddy(6379, 8275);

function buddy($start, $limit) {
      // $n = [];
     //  $m = [];
    $startTime = microtime(true);
    for($i = $start; $i <= $limit ; $i++) {


        $n = divisors($i) -1;

        $m = divisors($n) -1;

        if($m == $i ){   //&& $s - 1 > $i
            echo "We have a buddy!";
            echo "<br />";
            echo "$m $n"; //inverse
            echo "Elapsed time is: ". (microtime(true) - $startTime) ." seconds";
            return "$m $n";
        }



        //return "$n";
    }
    echo "Nothing";
    echo "Elapsed time is: ". (microtime(true) - $startTime) ." seconds";

}

function divisors($x) {
    $z = 0;
    for($i = 1; $i < $x; $i ++) {
        if ($x % $i == 0) {
            $z += $i;
        }
    }
    return $z;
}









