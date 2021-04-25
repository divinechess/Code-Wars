<?php

// $ss1 = "This is the new sample string.";
$ss2 = "This is        string.";
generateHashtag($ss2);

function generateHashtag($str) {
    $string = "";
    $string1= "";

    if($str == ""){
        return false;
    }
    $str_array = explode(" ",$str);
    // print_r($str_array);
    foreach ($str_array as $string){
        $string1 .= ucwords(strtolower($string));
        $string1 .= " ";


    }
    echo "$string1";
    echo "<br />";
    $string2 = "#$string1";
    echo $string2;
    $size =strlen($string2);
    echo "<br />";
    echo $size;
    return ($size > 140) ? false : $string2;
}


