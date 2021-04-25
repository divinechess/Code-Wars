<?php
$number_arr = [1,2,1,2,4,3,4];
$arr = array();
$i = 0;
sort($number_arr);

echo "<br />";
foreach ($number_arr as $key => $value) {

    $key1 = array_search($value, $number_arr, true);
        echo "The key " . $key1;
        echo "<br />";








}



