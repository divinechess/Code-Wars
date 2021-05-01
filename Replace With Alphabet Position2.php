<?php
$string = "THIS# is a string1";
// $str = "A";
alphabet_position($string);
function alphabet_position(string $s): string {
    $result = "";
    $x = preg_replace("/[^a-zA-Z]/", "", $s);
    $x = strtolower($x);
    for($i = 0; $i < strlen($x); $i++){
        $result .= ord($x[$i]) - 96;
        if( $i < (strlen($x) -1) ){
            $result .= " ";
        }


    }
    //echo "#$result#";
    return $result;
}










