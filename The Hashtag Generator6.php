<?php

// $ss1 = "This is the new sample string.";
$ss2 = "This is        string                                                                             big";
// $ss3 = "       ";
generateHashtag($ss2);

function generateHashtag($str) {

    $string1 = "";

    if (ctype_space($str) || $str == "" ) {
        echo "false";
        return false;
    }


    $str = preg_replace('/\s+/', ' ', $str);

    $string1 = ucwords(strtolower($str));
    $string1 = "#$string1";
    $size = strlen($string1);
    return ($size > 140) ? false : $string1;
}


