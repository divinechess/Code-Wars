<?php
// buddy(48,50);
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

function divisors($n) {
    $z =0;
    for ($i = 1; $i <= sqrt($n); $i++){
        if ($n % $i == 0){
            if ( $n / $i == $i) {
                //    echo $i, " ";
                $z += $i;
            }
            else{
                // echo $i," ", $n/$i," ";
                $z += $i;
                $z += $n/$i;

            }
        }
    }
    return $z -$n;
}









