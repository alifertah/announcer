<?php

include 'handleBack.php';

handleBack();

function userCrud(){
    echo(
        "
        <nav class='bg-red-700'>
            <a href='newUser.php'>create</a>
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