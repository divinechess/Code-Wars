<?php
$string = "THIS# is a string1";
// $str = "A";
alphabet_position($string);
function alphabet_position(string $s): string {
   // $string2 ="";
    // $x = str_replace('/[A-Z][a-z]/', '', $s);
    $x = preg_replace("/[^a-zA-Z]/", "", $s);
    // $arr = explode(" " ,$x);
    $x = strtolower($x);
    for($i = 0; $i < strlen($x); $i++){
        echo ord($x[$i]) - 96;
        echo ":";

    }

    //print_r($arr);

    return $x;
}










