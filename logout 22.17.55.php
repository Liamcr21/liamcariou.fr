<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Admin - liamcariou.fr - liam cariou</title>
    <link rel="stylesheet" href="style/admin.css">
</head>
<body>
<?php
session_start();
session_destroy();
header("Location: login.php");
?>
</body>
</html>