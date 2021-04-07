<?php
// for puzzle: Is the string uppercase?
FINDCAPS("AAZZT the  THE");
// FINDCAPS("  ");

function FINDCAPS($x) {

$length = strlen($x);
echo "the first length is: " . $length;
echo "<br>";

$new_str = str_replace(' ', '', $x);
$length2 = strlen($new_str);

 if($length != $length2){
    echo "After the spaces have been removed the length is now: " . $length2;
    echo "<br>";

 }else{
 echo "All CAPS is true, as both strings filled with spaces only";
 }

// $new_str = str_replace(' ', '', $x);
// echo "$new_str";
echo "<br>";

$caps = preg_match_all('/[A-Z]/',$x,$matches);
echo $caps;

	
}
