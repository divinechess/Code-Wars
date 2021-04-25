<?php
$number_arr = [1,2,1,2,4,3,4];
$arr = array();
$i = 0;
sort($number_arr);

echo "<br />";
foreach ($number_arr as $key => $value) {

    if ($key1 = array_search($value, $arr)|| array_search($value, $arr) === 0 )  {
        echo "The key returned from the if test is " . $key1;
        // unset($arr[$key1]);
        $arr = array();
        echo "<br />";
        print_r($arr);
        echo "in the if";

        echo "<br />";
    }else{
     $arr[$key] = $value;
     echo "im in the else";
     echo "<br />";
     print_r($arr);
     echo "<br />";

    }


}



===============================================
Other solutions

function find_uniq($a) {
  sort($a);
  
  return ($a[0] === $a[1]) ? end($a) : current($a);
}

end — Set the internal pointer of an array to its last element
end() advances array's internal pointer to the last element, and returns its value.

========================================

=====================================
function find_uniq($a) {
  foreach($a as $n) {
    $unique["$n"] = !isset( $unique["$n"] );
  }
  return array_search(1, $unique);
}

=====================================
function find_uniq($a) {
  foreach ($a as $value) {
    $tab["$value"]++;
  }
  return array_search(1,$tab);  
}

example output :

Notice: Undefined variable: tab in C:\xampp\htdocs\Code Wars\find the unique number6.php on line 9

Notice: Undefined offset: 1 in C:\xampp\htdocs\Code Wars\find the unique number6.php on line 9
Array ( [1] => 1 )
Array ( [1] => 2 )

Notice: Undefined offset: 2 in C:\xampp\htdocs\Code Wars\find the unique number6.php on line 9
Array ( [1] => 2 [2] => 1 )
Array ( [1] => 2 [2] => 2 )

Notice: Undefined offset: 3 in C:\xampp\htdocs\Code Wars\find the unique number6.php on line 9
Array ( [1] => 2 [2] => 2 [3] => 1 )

Notice: Undefined offset: 4 in C:\xampp\htdocs\Code Wars\find the unique number6.php on line 9
Array ( [1] => 2 [2] => 2 [3] => 1 [4] => 1 )
Array ( [1] => 2 [2] => 2 [3] => 1 [4] => 2 )
3

=====================================
function find_uniq($a) {
  foreach($a as $n) {
    $unique["$n"] = !isset( $unique["$n"] );
  }
  return array_search(1, $unique);
}

If a value is set then no matter what the value, the isset will always return 1
if it is not set it will return null or nothing

Here the isset is inverted.
So if we find a duplicate a value will be set to null.
So any duplicate values will always be set to nothing and any unque values will be set to 1 as the value.
We will also know the actual value because the value is copied to the key, so when we return the key,
this is the original value.



==================================================