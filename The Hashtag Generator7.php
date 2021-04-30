<?php

// $ss1 = "Codewars      ";
$ss4 = "Code Wars is nice";
// $ss2 = "This is        string                                                                             big";
// $ss3 = "       ";
generateHashtag($ss4);

function generateHashtag($str) {

    $string1 = "";

    if (ctype_space($str) || $str == "" ) {
        echo "false";
        return false;
    }
    $string1 = ucwords(strtolower($str));
    $string1 = preg_replace('/\s+/', '', $string1);
     // print_r($str_array);


    $string1 = "#$string1";
    $string1 = trim($string1);
    $size = strlen($string1);

    echo $size;
    // echo $string1[$size - 1];
    echo "<br />";
    echo "$string1";
    return ($size > 140) ? false : $string1;
}


===================================================================o
Other Solutions
=====================================
function generateHashtag($str) {
  
   $str = '#' . str_replace(' ', '', ucwords($str));
   
   return (strlen($str) > 140 || strlen($str) == 1) ? false : $str;
}


=======================================
function generateHashtag($str) {
    if (trim($str) == '') {
        return false;
    }
    $hash = '#' . str_replace(' ', '', trim(ucwords($str)));
    if (strlen($hash) > 140) {
        return false;
    }
    return $hash;
}