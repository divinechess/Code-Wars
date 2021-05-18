<?php
$items = ["a","a","a","b"];
heaps(4,$items);

function swap(&$items, $i, $j)
{
    $temp = $items[$i];
    $items[$i] = $items[$j];
    $items[$j] = $temp;
}

function heaps($n, &$items)
{
    $result = [];
    if ($n == 1) {
        $result[] = implode('', $items);
    } else {
        for ($i = 0; $i < $n; ++$i) {
            heaps($n - 1, $items);
            if ($n % 2 == 0) {
                swap($items, 0, $n - 1);
            } else {
                swap($items, $i, $n - 1);
            }
        }
    }
    $result = array_unique($result);
    print_r($result);
return $result;
}