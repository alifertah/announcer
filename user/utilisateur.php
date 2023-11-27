<?php
    session_start();
    include ("userCrud.php");
    userCrud();
    echo $_SESSION["username"]; 
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
    <h1 class="text-3xl">this is user page</h1>
</body>
</html>