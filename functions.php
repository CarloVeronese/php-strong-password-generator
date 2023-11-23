<?php
function generatePassword($length) {
    $passwordChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!£$&-_=?)(/';
    $password = '';
    $passwordCharsLength = strlen($passwordChars);
    for($i = 0; $i < $length; $i++) {
        $index = rand(0, $passwordCharsLength - 1);
        $char = $passwordChars[$index];
        $password .= $char;
    }
    return $password;
}