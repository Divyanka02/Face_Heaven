<?php
session_start();
//$con=mysqli_connect("localhost","root","","ecom");

$con = new mysqli("localhost" , "root", "","faceheaven");
if($con ==false){
    die("ERROR : Could not connect1 ".$con->connection_error);

}
else{
   // echo "<br> -".$con->host_info;

}
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/php/ecommerce/');
define('SITE_PATH','http://127.0.0.1/php/ecommerce/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');


?>