<?php
// for puzzle: Is the string uppercase?
// FINDCAPS("BOB WALKS HIS DOG EVERY DAY.");
// FINDCAPS("  ");
 FINDCAPS("BOB WALKS HIS DOG EVERY DAYa.");

function FINDCAPS($str) {

    $new_str = str_replace(' ', '', $str);  // returns a string
    $length = strlen($new_str); //counts length






    $lower = preg_match_all('/[a-z]/',$str,$matches);  // returns a integer
    // $length2 = strlen($lower);
    
    echo $lower;
    echo "<br>";
    // echo "lowercase: " . $length2;
    echo "<br>";


    $upper = preg_match_all('/[A-Z]/',$str,$matches);  // returns an integer
    // $length3 = strlen($upper);
   
    echo $upper;
    echo "<br>";   

    if ($length == 0){
         echo "This has no characters in this string just spaces";
        return TRUE;
    }
    elseif($lower > 0){
        echo "This has lower case letters in the string";
        return FALSE;

    }
    elseif($upper > 0){
        echo "It must be ALL CAPS: " . $upper;
        return TRUE;
    }





}
