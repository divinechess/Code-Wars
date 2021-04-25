<?php

// $ss1 = "This is the new sample string.";
$ss2 = "This is        string                                                                             big";
generateHashtag($ss2);

function generateHashtag($str) {
    //$str = str_replace(' ', '|', $str);
    $str = preg_replace('/\s+/', ' ', $str);
    $size = strlen($str);
    echo $size;
    echo "<br />";
    echo $str;
}


