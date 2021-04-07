<?php
$string = "ABC";
calc($string);  //github test


function calc($s) {
$total1 = "";
$sum1 = 0;
$sum2 = 0;

    $arr1 = str_split($s);
    foreach($arr1 as $char){
        $total1 .= ord($char);


        //echo $str;


    }
    $total2 = preg_replace('/7/','1', $total1);


    $total_arr1 = str_split($total1);
    $total_arr2 = str_split($total2);

    foreach ($total_arr1 as $value){
        $sum1 += $value;
    }

    foreach ($total_arr2 as $value2){
        $sum2 += $value2;
    }

    return $sum1 - $sum2;
}
=============================================================
Other solutions

function calc($s) {
   return substr_count(join(array_map('ord', str_split($s))), '7') * 6;
}

====================================================================
function calc($s) {
  $total1 = implode(array_map(fn(string $s) => ord($s), str_split($s)));
  $total2 = str_replace('7', '1', $total1);
  
  return array_sum(str_split($total1)) - array_sum(str_split($total2));
}



