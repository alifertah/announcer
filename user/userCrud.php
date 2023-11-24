<?php

function userCrud(){
    echo(
        "
        <nav class='bg-red-700'>
            <a href='../announce/newAnnounce.php'>create</a>
            <a href='userEdit.php'>edit/update</a>
            <a href='userDelete.php'>delete</a>
        </nav>
        "
    );
}
?>