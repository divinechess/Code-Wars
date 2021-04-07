<?php
// find_even_index(array(1,2,3,4,3,2,1));
 find_even_index(array(20,10,-80,10,10,15,35));

function find_even_index($arr){









		foreach ($arr as $key => $value){

 		       $left= 0;
 	           $left2 = 0;
	           $right= 0;
 	           $right2 = 0;


                        
        		if($key == 0 ) {
                    for ($i = $key + 1; $i < sizeof($arr); $i++) {
                        echo "first right";
                        echo $right += $arr[$i];
                        //      echo "first right";
                              echo "<br>";
                               echo "=======";
                               echo "<br>";
                    }
                        if($right == "NULL"){
                           $right = 0;
                        }


                    if ($left == $right) {
                        echo $key;

                    }
                }
        		elseif($key > 0 ){
        
           		  for($j = $key+1; $j < sizeof($arr); $j++){
                              $right2 += $arr[$j];
                         //     echo "second right";
                        //      echo "<br>";
                        //     echo "$right2";
                        //      echo "<br>";

           		  }
                  
          		  for($i = $key-1; $i >= 0; $i--){
                             $left2 += $arr[$i];

                             
          		  }
          		             if($left2 == "NULL"){
          		                $left2 = 0;
                             }
          		             if($right2 == "NULL"){
          		                 $right2 = 0;
                             }

                                if($left2 == $right2){
                                   echo $left2;
                                   echo "<br>";
                                   echo $right2;
                                   echo "<br>";
                                   echo $key;
                                }

 
        		}






        
		}
    return -1;




}