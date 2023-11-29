<?php
    session_start();
    include ("userCrud.php");
    include "../conect.php";
    userCrud();
    $result = $con->query("SELECT * FROM `user`;");
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
    <div class="flex flex-col">
        <?php 
            while($col = $result->fetch_assoc()){
                echo "<div class='text-xl flex justify-center text-left items-left'>" . $col["id"] . $col["username"] . "</div>";
            }
    ?>
    </div>
</body>
</html>