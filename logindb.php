<?php

ob_start();

$link = new mysqli("localhost" , "root", "","faceheaven");
if($link ==false){
    die("ERROR : Could not connect1 ".$link->connection_error);

}
else{
    //echo "<br> Connection is established sucessfully ".$link->host_info;

}

$sql = "SELECT * FROM register WHERE email='$_POST[email]' and password='$_POST[password]'";
//$res = $link->query($sql);
$numrow=mysqli_num_rows( $link->query($sql));
if($numrow==1){
    //echo "<br>valid user";
    session_start();
if($_SESSION['session_email']=$_POST['email']){
    $run_query = mysqli_query($link,$sql);
    $row = mysqli_fetch_array($run_query);
    $_SESSION['uid']=$row["uid"];
    $_SESSION['name']=$row['name'];
   header('location:pro.php');
    exit();
}
}
else{
    header('location:login_new.html');
}

$link->close();
?>

