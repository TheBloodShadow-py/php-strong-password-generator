<?php

function getRandomPass($leng, $password_string) {
    $pass = "";
    for ($i = 0; $i < $leng; $i++){
        $random_int = random_int(0, strlen($password_string) - 1);
        $pass .= $password_string[$random_int];
    }
    return $pass;
}