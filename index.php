<?php
  include("conect.php");
  session_start();

if(isset($_SESSION["id"])){
      if( $_SESSION["type"] == "utilisateur" || $_SESSION["type"] == "annonceur"){
        header("Location: http://localhost/alifertah_avito_v2/announce/userDashboard.php");
      }
      if( $_SESSION["type"] == "admin"){
        header("Location: http://localhost/alifertah_avito_v2/user/utilisateur.php");
      }
}

if(isset($_POST["login"])){
    $uname = $_POST["user"];
    $pass = $_POST["password"]; 

    $result = $con->query("SELECT * FROM `user` where username = '$uname' and password = '$pass';");
    
    $col = $result->fetch_assoc();

    if($result->num_rows){
      $_SESSION["id"] = $col["id"];
      $_SESSION["type"] = $col["user_type"];
      $_SESSION["username"] = "hello";
      if($col["user_type"] == "utilisateur" || 
      $result->num_rows && $col["user_type"] == "annonceur"){
        header("Location: http://localhost/alifertah_avito_v2/announce/userDashboard.php");
      }
      if($col["user_type"] == "admin"){
        header("Location: http://localhost/alifertah_avito_v2/user/utilisateur.php");
      }
    }
    else{
      $error = "invalide password or username!";
    }
    $uname = "";
    $pass = "";
    $result = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>index</title>
</head>
<body class="flex justify-center flex-col items-center">
<div class="w-full max-w-xs">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="index.php" method="post" name="login-form">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Username
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="user" type="text" name="user" placeholder="Username">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" placeholder="******************">
      <?php if(isset($error)){echo "<p class='text-red-500 text-xs italic'> $error </p>";}  ?>
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="login" value="login">
        Log in
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="register.php">
        register
      </a>
    </div>
  </form>
</div>
</body>
</html>