<?php
session_start();
require './functions.php';
$getLength = $_GET['pw-length'] ?? 0;
if($getLength > 0) {
    $_SESSION["password"] = generatePassword($getLength);
    header("Location: http://localhost:8888/php-strong-password-generator/password.php");
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
        <label for="pw-length">Password Legth</label>
        <input type="number" name="pw-length" required id="pw-length" min="5">
        <input type="submit" value="Send">
    </form>
</body>
</html>