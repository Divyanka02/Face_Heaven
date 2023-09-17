<?php
$servername="localhost";
$name="root";
$message="";
$database="faceheaven";
$con=mysqli_connect($servername,$name,$message,$database);
//$con=mysqli_connect("localhost","root","","feedback");
if(!$con)
{
    die("error detected".mysqli_error($con));
}
?>