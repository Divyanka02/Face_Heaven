<?php

$link = new mysqli("localhost" , "root", "","faceheaven");
if($link ==false){
    die("ERROR : Could not connect1 ".$link->connection_error);

}
else{
    //echo "<br> Connection is established sucessfully ".$link->host_info;

}
/*

$code = 0;
$email = mysqli_real_escape_string($link, $_POST['email']);
$password = mysqli_real_escape_string($link, $_POST['password']);*/
            $email = $_SESSION['email']; //getting this email using session*/
            $update_pass = "UPDATE register SET password = '$_POST[password]' ,code = 0 WHERE email = '$_POST[email]'";
            $update_pass_run=mysqli_query($link,$update_pass);
            if( $update_pass_run){
                header('Location: passwordchanged.html');
                 exit();
             
            }else{
                header('Location: failedpasswordchanged.html');
            }


?>