<?php
//$items = [a,A,b,B];
duplicates();
//heaps(3,$items);

function duplicates(){
   //$a1 = $array("a","a","c");
   $a1 = ["a","a","b","b"];
   //$a2 = ["a","b","d"];
    $unique = array();

    foreach($a1 as $n) {
        (!isset( $unique["$n"])) ? $unique["$n"] = $unique["$n"]+1 : $unique["$n"]++;
    }
    foreach ($unique as $key => $value){

        if($value > 1){
          for($i =1 ; $i <=$value; $i++){
              $unique[$key ."$i"] = 1;

          }
          unset($unique[$key]);
        }
    }


   // print_r(  array_search(1, $unique)) ;
    //echo "<br />";
    //print_r($unique);
    $sum = count($unique);
    echo "<br />";
    echo "<br />";
    foreach ($unique as $key =>$value){
        $unique2 [] = $key;

    }
    echo "<br />";
    //print_r($unique2);
    heaps($sum,$unique2);
}



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
    print_r($result);
return $result;
}