<?php

include '../conect.php';

if (isset($_POST['announce'])) {
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $date = $_POST['date'];

    $query = "INSERT INTO annonce (
        `titre`, `prix`, `description`, `date_poste`
        ) VALUES 
        ('$titre', '$prix', '$description' , '$date')";

        if($con->query($query)){
        echo("<script>alert('yes')</script>");
        } else {
        echo "ERROR : " . $query . $con->error;
        }
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
<body class="flex justify-center">
<div class="w-full max-w-xs">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="newAnnounce.php  " method="post" name="announce">
    
  <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="titre">
        titre
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="titre" type="text" name="titre" placeholder="titre">
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="prix">
        prix
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="prix" type="text" name="prix" placeholder="prix">
    </div>

      <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
        description
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" type="text" name="description" placeholder="description">
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
        date
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="date" type="date" name="date" placeholder="date">
    </div>

    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="announce" value="announce">
        announce
    </button>
      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
        Forgot Password?
      </a>
    </div>
    
  </form>
</div>
</body>
</html>