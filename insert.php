<?php 

function insertion($pass, $table, $uname, $email, $user_type){
    include("conect.php");
    $query = "INSERT INTO $table (
    `username`, `password`, `email`, `user_type`
    ) VALUES 
    ('$uname', '$pass', '$email', '$user_type')";
    if($con->query($query)){
    echo("<script>alert('yes')</script>");
    return 1;
    } else {
    echo "ERROR : " . $query . $con->error;
    return 0;
    }
}
?>