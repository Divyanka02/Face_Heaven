

<?php

$link = new mysqli("localhost" , "root", "","faceheaven");
if($link ==false){
    die("ERROR : Could not connect1 ".$link->connection_error);

}
else{
    echo "<br> -".$link->host_info;

}



$email=$_POST['email'];
$email_check = "SELECT * FROM register WHERE email = '$email'";
$res = mysqli_query($link, $email_check);
if(mysqli_num_rows($res) > 0){
   
    header('location:login_new.html');
}

else{
   
    $sql = "INSERT INTO register(name, email, phonenumber, address, city, state, pincode, gender, password)
    VALUES ('$_POST[name]','$_POST[email]','$_POST[phonenumber]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[pincode]','$_POST[gender]','$_POST[password]')";

}
    







if($link->query($sql)==true){
  
   header('location:registersuccess.html');
    exit();

}
else{
    echo("<br>ERROR : Could not connect ".$link->error);

}

$link->close();
?>


    

<?php
/*
session_start();
$con = mysqli_connect("localhost" , "root", "","faceheaven");
$email = "";
$name = "";
$errors = array();

//if user signup button
if(isset($_POST['signup'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $state = mysqli_real_escape_string($con, $_POST['state']);
    $pincode = mysqli_real_escape_string($con, $_POST['pincode']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM register WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }
    if(count($errors) === 0){
       /* $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";*/
  /*      $insert_data = "INSERT INTO usertable (name, email, password, code, status)
                        values('$name', '$email', '$encpass', '$code', '$status')";
                        "INSERT INTO register(name, email, phonenumber, address, city, state, pincode, gender, password, cpassword, image, code, status)
                         VALUES ('$name', '$email', '$phonenumber', '$address','$city','$state','$pincode','$gender','$password','$cpassword', '$code', '$status')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
            $subject = "Email Verification Code";
            $message = "Your verification code is $code";
            $sender = "From: tradewebsite2702@gmail.com";
            if(mail($email, $subject, $message, $sender)){
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: user-otp.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while sending code!";
            }
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }

}
$sql = "INSERT INTO register(name, email, phonenumber, address, city, state, pincode, gender, password, cpassword, image)
VALUES ('$name', '$email', '$phonenumber', '$address','$city','$state','$pincode','$gender','$password','$cpassword', '$code', '$status')";

if($link->query($sql)==true){
   echo("Connected ".$link->error);
   header('location:login.html');
    exit();

}
else{
    echo("<br>ERROR : Could not connect ".$link->error);

}

$link->close();*/
?>


    
