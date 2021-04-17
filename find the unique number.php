<?php
$number_arr = [1,2,1,2,4,3,4];
$arr = array();
$i = 0;
sort($number_arr);

echo "<br />";
foreach ($number_arr as $key => $value) {

    if ($key1 = array_search($value, $arr))  {
        unset($arr[$key1]);
        echo "in the if";
        echo $key1;
        echo "<br />";
    }else{
     $arr[$key] = $value;
     echo "im in the else";
     echo "<br />";
     print_r($arr);
     echo "<br />";

    }


}

print_r($arr);

