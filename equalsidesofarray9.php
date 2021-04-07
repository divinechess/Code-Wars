<?php
 find_even_index(array(1,2,3,4,3,2,1));
// find_even_index(array(20,10,-80,10,10,15,35));
// find_even_index(array(1,100,50,-51,1,1));
// find_even_index(array(0,0,0,0,0));

function find_even_index($arr){

$flag = TRUE;
$result = -1;






foreach ($arr as $key => $value) {
      if($flag == TRUE) {
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

=============================================================================================
Other solutions

function find_even_index($arr){
  foreach($arr as $i => $n) {
    if (array_sum(array_slice($arr, 0, $i)) == array_sum(array_slice($arr, $i+1))) {
      return $i;
    }
  }
  return -1;
}

----------------
array_slice(array, start, length, preserve)
Parameter Values
Parameter	Description
array	Required. Specifies an array
start	Required. Numeric value. Specifies where the function will start the slice. 0 = the first element. If this value is set to a negative number, the function will start slicing that far from the last element. -2 means start at the second last element of the array.
length	Optional. Numeric value. Specifies the length of the returned array. If this value is set to a negative number, the function will stop slicing that far from the last element. If this value is not set, the function will return all elements, starting from the position set by the start-parameter.
preserve	Optional. Specifies if the function should preserve or reset the keys. Possible values:
=========================================================================================
function find_even_index($arr){
    $sum_right = array_sum($arr);
    $sum_left = 0;

    foreach($arr as $i=>$a){
        $sum_right-=$a;
        if ($sum_left == $sum_right){
            return $i;
        }
        $sum_left +=$a;
    }
    return -1;
}


