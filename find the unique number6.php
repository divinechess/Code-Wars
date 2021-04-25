<?php
$a = [1,2,1,2,4,3,4];
sort($a);
find_uniq($a);

function find_uniq($a) {

    foreach ($a as $value) {
        $tab["$value"]++;
        print_r($tab);
        echo "<br />";
    }
    echo array_search(1,$tab);
}


