<?php
$number_arr = [1,2,1,2,4,4,5,6,6,7];
sort($number_arr);
$newarray = array_count_values($number_arr);

print_r($newarray);

foreach ($newarray as $key => $value) {

    if ($value == 1)  {
        echo "<br />";
        echo $key;
        echo "<br />";
    }






}



