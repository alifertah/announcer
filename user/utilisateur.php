<?php
    session_start();
    include ("userCrud.php");
    include "../conect.php";
    userCrud();
    echo $_SESSION["type"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>utilisateur</title>
</head>
<body>
    
</body>
</html>