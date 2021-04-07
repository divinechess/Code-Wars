<?php
// for puzzle: Is the string uppercase?
FINDCAPS("BOB WALKS HIS DOG EVERY DAY.");
// FINDCAPS("  ");

function FINDCAPS($str) {
$caps = preg_match_all('/[A-Z]/',$str,$matches);
echo "Capitals: " . $caps;
echo "<br>";
$new_str = str_replace(' ', '', $str);
$lower = preg_match_all('/[a-z]/',$new_str,$matches);
$length = strlen($new_str);
echo "Lowercase: " . $lower;
echo "<br>";
echo $length;

   if ($length == 0){
       // echo $new_str;
      return TRUE;
   }else{
      // echo $new_str;
     // echo "<br>";

      return ($caps == $lower);

   }













}
