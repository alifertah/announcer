<?php
if(!isset($_SESSION["id"])){
    header("Location: ../index.php");
}
if(isset($_POST["logout"])){
    session_unset();
    session_destroy();
    header("Location: ../index.php");
}

function userCrud(){
    echo(
        "
        <nav class='bg-red-700'>
            <a href='../announce/newAnnounce.php'>create</a>
            <a href='userEdit.php'>edit/update</a>
            <a href='userDelete.php'>delete</a>
            <form method='post'>
                <button type='submit' name='logout' >logout</button>
            </form>
        </nav>
        "
    );
}
?>