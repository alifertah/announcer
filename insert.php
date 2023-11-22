<?php 

function insertion($pass, $table, $uname, $email){
   
    include("conect.php");
    $query = "INSERT INTO $table (
    `username`, `password`, `email`
    ) VALUES 
    ('$uname', '$pass', '$email')";
    if($con->query($query)){
    echo("<script>alert('yes')</script>");
    } else {
    echo "ERROR : " . $query . $con->error;
    }
}
?>