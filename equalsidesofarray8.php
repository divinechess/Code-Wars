<?php
// find_even_index(array(1,2,3,4,3,2,1));
// find_even_index(array(20,10,-80,10,10,15,35));
find_even_index(array(1,100,50,-51,1,1));

function find_even_index($arr){

$flag = TRUE;
$result = -1;




 if($flag == TRUE) {

     foreach ($arr as $key => $value) {

         $left = 0;
         $left2 = 0;
         $right = 0;
         $right2 = 0;


         if ($key == 0) {
             for ($i = $key + 1; $i < sizeof($arr); $i++) {
                 $right += $arr[$i];

             }
             if ($right == "NULL") {
                 $right = 0;
             }


             if ($left == $right) {
                 $flag = FALSE;
                 $result = $key;


             }
         } elseif ($key > 0) {

             for ($j = $key + 1; $j < sizeof($arr); $j++) {
                 $right2 += $arr[$j];


             }

             for ($i = $key - 1; $i >= 0; $i--) {
                 $left2 += $arr[$i];


             }
             if ($left2 == "NULL") {
                 $left2 = 0;
             }
             if ($right2 == "NULL") {
                 $right2 = 0;
             }

             if ($left2 == $right2) {
                 $flag = FALSE;
                 $result = $key;

             }


         }


     }
 }
 echo $result;
 return $result;




}