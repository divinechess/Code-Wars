<?php
kebabize("camelsHaveThreeHumps");
echo "<br />";
kebabize("camelsHave3Humps");


function kebabize($string) {
    $keywords = preg_split("/(?=[A-Z])/", $string);
  //$str_arr  = print_r(str_word_count($string, 1,));
    print_r($keywords);
    for ($i = 0; $i < strlen($string); $i++) {

        $result[] = strtolower(preg_replace("/^[^a-zA-Z]$/", "",$string[$i]));


    }

   echo join('-', $result);  // maybe worth keeping in mind to avoid trailing space



}