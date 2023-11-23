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
    <title>Document</title>
</head>
<body>
    j
</body>
</html>