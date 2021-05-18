<?php
kebabize("camelsHaveThreeHumps");
echo "<br />";
kebabize("camelsHave3Humps");
echo "<br />";
kebabize("S1yWk");

function kebabize($string) {
    $keywords = preg_split("/(?=[A-Z])/", $string);

    foreach ($keywords as $word) {

       //$result[] = strtolower(preg_replace("/[^a-zA-Z]/", "", $word)) . "-"; //carrot symbol inverts regex
          $result[] = strtolower(preg_replace("/[^a-zA-Z]/", "", $word));
    }

    if($result[0] == "") {
        array_shift($result);
      //  print_r($result);
    }

    echo join('-', $result);  // maybe worth keeping in mind to avoid trailing space
     //print_r($result);

}