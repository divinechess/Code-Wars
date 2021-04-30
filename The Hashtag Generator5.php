<?php

$ss1 = "Codewars      ";
// $ss2 = "This is        string                                                                             big";
// $ss3 = "       ";
generateHashtag($ss1);

function generateHashtag($str) {

    $string1 = "";

    if (ctype_space($str) || $str == "" ) {
        echo "false";
        return false;
    }

    //if($str == ""){
    //    return false;
    //}
    // $str_array = explode(" ",$str);
    $str = preg_replace('/\s+/', ' ', $str);
     // print_r($str_array);

    $string1 = ucwords(strtolower($str));
    $string1 = "#$string1";
    $string1 = trim($string1);
    $size = strlen($string1);

    echo $size;
    // echo $string1[$size - 1];
    echo "<br />";
    echo "$string1";
    return ($size > 140) ? false : $string1;
}


