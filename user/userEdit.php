<?php
include "userCrud.php";
include "../conect.php";
userCrud();
$sql = "UPDATE user SET username='Doe' WHERE id=4";

if($con->query($sql)){
    echo "YES";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <form action="userEdit.php" method="post">
    
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        User Name
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="newUsername" type="text" name="newUsername" placeholder="new username">
    </div>
    
</form>
</body>
</html>