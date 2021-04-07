<?php
// for puzzle: Is the string uppercase?


// FINDCAPS("BOB WALKS HIS DOG EVERY DAY.");
// FINDCAPS("  ");

 FINDCAPS("BOB WALKS HIS DOG EVERY DAYa.");

function FINDCAPS($str) {

    $new_str = str_replace(' ', '', $str);  // returns a string
    $length = strlen($new_str); //counts length






    $lower = preg_match_all('/[a-z]/',$str,$matches);  // returns a integer
   
    $upper = preg_match_all('/[A-Z]/',$str,$matches);  // returns an integer
       
    if ($length == 0){
         return TRUE;
    }
    elseif($lower > 0){
         return FALSE;

    }
    elseif($upper > 0){
         return TRUE;
    }





}


============================================================================
Other solutions:

function is_uppercase($str) {
  return ($str === strtoupper($str));
}

======================================================================
function is_uppercase($str) {
  return !preg_match('/[a-z]/', $str);
}


