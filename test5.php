<?php
function printDivisors ($n)


{
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
echo "The divisors of 100 are:\n";
printDivisors(48);






