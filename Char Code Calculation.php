<?php
$string = "ABC";
calc($string);


function calc($s) {


    $arr1 = str_split($s);
    $i =0;
      foreach($arr1 as $char){
             $arr2[$i] = ord($char);
             $i++;

             //echo $str;


      }
      $total1 = implode($arr2);


      $total2 = preg_replace('/7/','1', $total1);

      echo $total1 . "<br />";
      echo $total2 . "<br />";

      $totarr1 = str_split($total1);
      $totarr2 = str_split($total2);
      print_r($totarr1);

      foreach ($totarr2 as $value){
              $total1 += $value;
      }
    foreach ($totarr2 as $value2){
        $total2 += $value2;
    }
      echo $total1 - $total2;
}



