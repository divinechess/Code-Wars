<?php
kebabize("camelsHaveThreeHumps");
echo "<br />";
kebabize("camelsHave3Humps");


function kebabize($string) {

    $result = [];

    for ($i = 0; $i < strlen($string); $i++) {

        if (preg_match("/^[a-zA-Z]$/", $string[$i])) {
            $result[] = strtolower($string[$i]);
        }
    }

    echo join('-', $result);  // maybe worth keeping in mind to avoid trailing space






}