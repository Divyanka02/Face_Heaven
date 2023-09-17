<?php

ob_start();

$con = new mysqli("localhost" , "root", "","faceheaven");
if($con ==false){
    die("ERROR : Could not connect1 ".$con->connection_error);

}


//$update_pass = "UPDATE product SET name = '$_POST[name]' , mrp = '$_POST[ mrp]' ,price = '$_POST[price]' ,image = '$_POST[image]' ,short_desc = '$_POST[short_desc]' ,
 //                              description = '$_POST[description]' ,meta_title = '$_POST[meta_title]' ,meta_desc = '$_POST[meta_desc]' ,meta_keyword = '$_POST[meta_keyword]'  WHERE id = 1";
$update_name = "UPDATE product SET name ='$_POST[name]' WHERE id = '$_POST[id]'";
$update_mrp = "UPDATE product SET mrp ='$_POST[mrp]' WHERE id = '$_POST[id]'";
$update_price = "UPDATE product SET price ='$_POST[price]' WHERE id = '$_POST[id]'";
$update_image = "UPDATE product SET image ='$_POST[image]' WHERE id = '$_POST[id]'";
$update_short_desc = "UPDATE product SET short_desc ='$_POST[short_desc]' WHERE id = '$_POST[id]'";
$update_description = "UPDATE product SET description ='$_POST[description]' WHERE id = '$_POST[id]'";
$update_meta_title = "UPDATE product SET meta_title ='$_POST[meta_title]' WHERE id = '$_POST[id]'";
$update_meta_desc = "UPDATE product SET meta_desc ='$_POST[meta_desc]' WHERE id = '$_POST[id]'";
$update_meta_keyword = "UPDATE product SET meta_keyword ='$_POST[meta_keyword]' WHERE id = '$_POST[id]'";



$update_name_run=mysqli_query($con,$update_name);
$update_mrp_run=mysqli_query($con,$update_mrp);
$update_price_run=mysqli_query($con,$update_price);
$update_image_run=mysqli_query($con,$update_image);
$update_short_desc_run=mysqli_query($con,$update_short_desc);
$update_description_run=mysqli_query($con,$update_description);
$update_meta_title_run=mysqli_query($con,$update_meta_title);
$update_meta_desc_run=mysqli_query($con,$update_meta_desc);
$update_meta_keyword_run=mysqli_query($con,$update_meta_keyword);

if( $update_name_run && $update_mrp_run && $update_price_run  && $update_image_run&& $update_short_desc_run  
     && $update_description_run && $update_meta_title_run && $update_meta_desc_run && $update_meta_keyword_run ){
    header('Location: product.php');
     exit();
 
}else{
    header('Location:editproduct.php');
}

?>

