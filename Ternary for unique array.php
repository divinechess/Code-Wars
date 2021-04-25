<?php
$a = [1,2,1,2,2,4,3,4,5,5,6,6];
// sorted would be $a = [1,1,2,2,2,3,4,4];
$result = find_uniq($a);
echo $result;

function find_uniq($a) {
    sort($a);

    return ($a[0] === $a[1]) ? end($a) : current($a);
}


