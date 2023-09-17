<?php
ob_start();

$con = new mysqli("localhost" , "root" , "" , "faceheaven");
if($con == false){
    die("ERROR : Could not connect1 ".$con->connection_error);
}
session_start();
        //  echo "WELCOME ".$_SESSION['session_email'];
        $email=$_SESSION['session_email'];
/*
$update_name = "UPDATE register SET name = '$_POST[name]' WHERE email=$email";
$update_phone = "UPDATE register SET phonenumber = '$_POST[phonenumber]' WHERE email=$email";
$update_address = "UPDATE register SET address = '$_POST[address]' WHERE email=$email";
$update_city = "UPDATE register SET city = '$_POST[city]' WHERE email=$email";
$update_state = "UPDATE register SET state = '$_POST[state]' WHERE email=$email";
$update_gender = "UPDATE register SET gender = '$_POST[gender]' WHERE email=$email";
*/
$update_name = "UPDATE register SET name = '$_POST[name]' WHERE email='$_SESSION[session_email]'";
$update_phone = "UPDATE register SET phonenumber = '$_POST[phonenumber]' WHERE email='$_SESSION[session_email]'";
$update_address = "UPDATE register SET address = '$_POST[address]' WHERE email='$_SESSION[session_email]'";
$update_city = "UPDATE register SET city = '$_POST[city]' WHERE email='$_SESSION[session_email]'";
$update_state = "UPDATE register SET state = '$_POST[state]' WHERE email='$_SESSION[session_email]'";
$update_gender = "UPDATE register SET gender = '$_POST[gender]' WHERE email='$_SESSION[session_email]'";

/*
$update_name = "UPDATE register SET name = '$_POST[name]' WHERE email='anugyakri@gmail.com'";
$update_phone = "UPDATE register SET phonenumber = '$_POST[phonenumber]' WHERE email='anugyakri@gmail.com'";
$update_address = "UPDATE register SET address = '$_POST[address]' WHERE email='anugyakri@gmail.com'";
$update_city = "UPDATE register SET city = '$_POST[city]' WHERE email='anugyakri@gmail.com'";
$update_state = "UPDATE register SET state = '$_POST[state]' WHERE email='anugyakri@gmail.com'";
$update_gender = "UPDATE register SET gender = '$_POST[gender]' WHERE email='anugyakri@gmail.com'";
*/
$update_name_run = mysqli_query($con,$update_name);
$update_phone_run = mysqli_query($con,$update_name);
$update_address_run = mysqli_query($con,$update_name);
$update_city_run = mysqli_query($con,$update_name);
$update_state_run = mysqli_query($con,$update_name);
$update_gender_run = mysqli_query($con,$update_name);

if($update_name_run && $update_phone_run && $update_address_run && $update_city_run && $update_state_run && $update_gender_run){

    header("Location: pro.php");
    exit();

    //http://localhost/php_projects/MCA_project/editProfile.php
 
 }
 else{
    echo "<br>Invalid user";
 }

 ?>