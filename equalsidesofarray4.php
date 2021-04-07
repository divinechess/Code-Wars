<?php

find_even_index(array(1,2,3,4,3,2,1));

function find_even_index($arr){

$arraysize =0;
$trueflag = FALSE;
$trueindex = 0;
$left= 0; // if the compare starts with the 0 index value to the left will always be 0
$left2 = 0;
$right= 0;
$right2 = 0;

	if($trueflag == FALSE){

		foreach ($arr as $key => $value){
                        
        		if($key == 0 ){
           		   for($i = $key+1; $i < sizeof($arr); $i++ ){
                              $right += $arr[$i];
                              echo "first right";
                              echo "<br>";
                              echo "$right";
                              echo "<br>";
                       } 
            			 if($left == $right){
                                   $trueflag = TRUE;
                                   return $key; 
                                 }    
                           }
                        elseif($key > 0 ){
        
           		  for($j = $key+1; $j < sizeof($arr); $j++){
                              $right2 += $arr[$j];
                              echo "second right";
                              echo "<br>";
                              echo "$right2";
                              echo "<br>";

                          }
                  
          		  for($i = $key-1; $i >= 0; $i--){
                             $left2 += $arr[$i];
                             
                          }
                                if($left2 == $right2){
                                 $trueflag = TRUE;
                                 echo $key;
                                }

 
                       }

		}



	}else{
	return -1;
        }

}