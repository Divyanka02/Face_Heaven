<?php
include 'database.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
   
    $sql="insert into feedback(name,email,message)
    values('$name','$email','$message')";
    
    if(mysqli_query($con,$sql))
    {
       // echo "<script>alert('new record insert successfully')</script>";
       header('location:homepage.php');
    }
    else
    {
        echo "error:" .mysqli_error($con);
    }
    mysqli_close($con);
}
?>