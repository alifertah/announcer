<?php
function handleBack(){
    if(!isset($_SESSION["id"])){
        header("Location: ../index.php");
    }
    if(isset($_POST["logout"])){
        session_unset();
        session_destroy();
        header("Location: ../index.php");
    }
}
?>