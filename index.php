<?php
$passwordChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!£$&-_=?)(/';
$getLength = $_GET['pw-length'] ?? 0;
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


if($getLength > 0) {
    generatePassword($passwordChars, $getLength, $password);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
</head>
<body>
    <form action="" method="GET">
        <input type="number" name="pw-length">
        <input type="submit" value="Send">
    </form>
    <h1><?php if($getLength > 0) {?>Your password is: <?php } echo generatePassword($passwordChars, $getLength, $password); ?></h1>
</body>
</html>