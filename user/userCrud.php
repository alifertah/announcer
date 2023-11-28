<?php

include 'handleBack.php';

handleBack();

function userCrud(){
    echo(
        "
        <nav class='bg-blue-500 text-white font-bold flex justify-around'>
            <div>
                <a href='newUser.php'>create</a>
                <a class='px-8' href='userEdit.php'>edit/update</a>
                <a href='userDelete.php'>delete</a>
            </div>
            <form method='post'>
                <button type='submit' name='logout' >logout</button>
            </form>
        </nav>
        "
    );
}
?>