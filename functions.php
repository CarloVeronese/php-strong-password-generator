<?php
function generatePassword($passwordChars, $length, &$password) {
    $password = '';
    $passwordCharsLength = strlen($passwordChars);
    for($i = 0; $i < $length; $i++) {
        $index = rand(0, $passwordCharsLength);
        $char = $passwordChars[$index];
        $password .= $char;
    }
    return $password;
}