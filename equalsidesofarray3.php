<?php

find_even_index(array(1,2,3,4,3,2,1));

function find_even_index($arr){

$arraysize =0;
$trueflag = FALSE;
$trueindex = 0;
$left= 0; // if the compare starts with the 0 index value to the left will always be 0
$right= 0;

	if($trueflag == FALSE){

		foreach ($arr as $key => $value){


        		if($key == 0 ){
           		   for($i = $key+1; $i < sizeof($arr); $i++ ){
                              $right += $arr[$i];
                        } 
            			 if($left == $right){
                                   $trueflag = TRUE;
                                   return $key; 
                                 }    
                           }
                        elseif($key > 0 ){
        
           		  for($key+1; $i < sizeof($arr); $i++){
                             $right += $arr[$i];
                          }
                  
          		  for($key-1; $i >= 0; $i++){
                             $left += $key[$i];
                          }
                                if($left == $right){
                                 $trueflag = TRUE;
                                 return $key;
                                }

 
                       }

		}



	}else{
	return -1;
        }

}