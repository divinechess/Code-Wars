<?php
function printDivisors ($n)
{
    for ($i = 1; $i < $n; $i++){
        if ($n % $i == 0){
            echo $i, " ";

        }
    }
}
echo "The divisors of 100 are:\n";
printDivisors(100);






