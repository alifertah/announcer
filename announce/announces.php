<?php
    include ("../conect.php");
    $query = "SELECT * FROM annonce;"; 
    $result = $con->query($query);
    while($s = $result->fetch_assoc()){
        echo($s["titre"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Announces</title>
</head>
<body>
    <a href="newAnnounce.php">create announce</a>
</body>
</html>