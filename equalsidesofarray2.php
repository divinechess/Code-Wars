<?php

find_even_index(array(20,10,-80,10,10,15,35));

function find_even_index($arr){

    $arraysize =0;
    $trueflag = FALSE;
    $trueindex = 0;


    if($trueflag == FALSE){


        foreach ($arr as $key => $value){

            $left= 0;
            $left2 = 0;
            $right= 0;
            $right2 = 0;



            if($key == 0 ){
                for($i = $key+1; $i < sizeof($arr); $i++ ){
                    $right += $arr[$i];
                    //  echo "first right";
                    //  echo "<br>";
                    //    echo "$right";
                    //     echo "<br>";
                }
                if($left == $right){
                    $trueflag = TRUE;
                    return $key;
                }
            }
            elseif($key > 0 ){

                for($j = $key+1; $j < sizeof($arr); $j++){
                    $right2 += $arr[$j];
                    //   echo "second right";
                    //  echo "<br>";
                    //   echo "$right2";
                    //   echo "<br>";

                }

                for($i = $key-1; $i >= 0; $i--){
                    $left2 += $arr[$i];

                }
                if($left2 == $right2){
                    echo $left2;
                    echo "<br>";
                    echo $right2;
                    echo "<br>";
                    $trueflag = TRUE;
                    echo $key;
                }


            }

        }



    }else{
        return -1;
    }

}