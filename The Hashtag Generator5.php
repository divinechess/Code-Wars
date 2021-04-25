<?php

// $ss1 = "This is the new sample string.";
$ss2 = "This is        string                                                                             big";
generateHashtag($ss2);

function generateHashtag($str) {
    $string = "";
    $string1= "";

    if($str == ""){
        return false;
    }
    // $str_array = explode(" ",$str);
    $str = preg_replace('/\s+/', ' ', $str);
     // print_r($str_array);

    $string1 .= ucwords(strtolower($str));
    $string1 = "#$string1";
    $size = strlen($string1);
    echo $size;
    echo "<br />";
    echo $string1;
    return ($size > 140) ? false : $string1;
}


