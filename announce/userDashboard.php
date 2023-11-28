<?php
    include '../conect.php';
    session_start();
    include 'userNav.php';
    userNav();
    $id = $_SESSION["id"];
    $result = $con->query("SELECT * FROM `user` where id = $id;");
    $col = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>dashboard</title>
</head>
<body>
    <div class="flex bg-blue-400 flex justify-around p-0 m-0">
        <?php
                echo "<div> USERNAME :"  . $col["username"] . "</div> |";
                echo "<div> EMAIL :" . $col["email"] . "</div> |";
                echo "<div> ACCOUNT TYPE :" . $col["user_type"] . "</div>";
        ?>
    </div>
</body>
</html>