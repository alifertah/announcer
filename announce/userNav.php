<?php


if(!isset($_SESSION["id"])){
    header("Location: ../index.php");
}

if(isset($_POST["logout"])){
    session_unset();
    session_destroy();
    header("Location: ../index.php");
}

function userNav(){
    echo(
        "
        <nav class='bg-blue-700 font-bold text-white flex justify-around'>
            <a href='userEdit.php'>edit profile</a>
            <form method='post'>
                <button type='submit' name='logout' >logout</button>
            </form>
        </nav>
        "
    );
}
?>