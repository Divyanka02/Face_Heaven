<?php
ob_start();

$con = new mysqli("localhost" , "root" , "" , "faceheaven");
if($con == false){
    die("ERROR : Could not connect1 ".$con->connection_error);
}
session_start();
        //  echo "WELCOME ".$_SESSION['session_email'];
        $email=$_SESSION['session_email'];
        
$sql = "DELETE from register where email='$email'";

if($con->query($sql) == TRUE)
{
    //echo "Record deleted successfully";
    unset($_SESSION['session_email']);
session_destroy();
    header("Location:after.php");

    //http://localhost/php_projects/MCA_project/deactivate.php
}else{
    echo "Error deleting record: ".$con->error;
}

$con->close();
?>
