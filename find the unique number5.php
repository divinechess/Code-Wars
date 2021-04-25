<?php
$number_arr = [1,2,1,2,4,3,4];
find_uniq($number_arr);

function find_uniq($a) {
    sort($a);

    echo ($a[0] === $a[1]) ? end($a) : current($a);
}


