<?php
// for puzzle: Is the string uppercase?
FINDCAPS("BOB WALKS HIS DOG EVERY DAY.");
// FINDCAPS("  ");

function FINDCAPS($str) {

    $new_str = str_replace(' ', '', $str);
    $length = strlen($new_str);






    $lower = preg_match_all('/[a-z]/',$str,$matches);
    // $length2 = strlen($lower);
    
    echo $lower;
    echo "<br>";
    // echo "lowercase: " . $length2;
    echo "<br>";


    $upper = preg_replace("/[^A-Z]/", "", $str);
    $length3 = strlen($upper);

    

    if ($length == 0){
        // echo $new_str;
        return TRUE;
    }
    elseif($lower > 0){
        return FALSE;

    }
    elseif($length3 > 0){
        echo "It must be ALL CAPS: " . $upper;
        return TRUE;
    }





}
