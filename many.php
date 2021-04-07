<?php

$index1 = 1;
$index2 = 2;
$index3 = 3;
compare($index1);
compare($index2);
compare($index3);

function compare($key){
     if(isset($counter)){
       $many[$counter+1] = $key;
       echo  "in first";
     }else{
      $counter = 0;
      $many[$counter] = $key;
      echo  "in second";
     }
     
     
     
             
print_r($many);
echo "<br>";

}

