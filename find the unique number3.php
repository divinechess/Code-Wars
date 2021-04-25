<?php
$number_arr = [0, 0, 0.55, 0, 0];
sort($number_arr);
$newarray = array_count_values($number_arr);

print_r($newarray);

foreach ($newarray as $key => $value) {

    if ($value == 1)  {
        return $key;
    }






}



