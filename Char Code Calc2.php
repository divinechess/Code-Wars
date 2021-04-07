<?php
$string = "ABC";
calc($string);


function calc($s) {
$str = "";
    $arr1 = str_split($s);
        foreach($arr1 as $char){
            $str .= ord($char);

        //echo $str;


    }
    echo $str . "<br />.";

    echo print_r($arr1);
}



