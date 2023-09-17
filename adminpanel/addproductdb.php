<?php

ob_start();

$con = new mysqli("localhost" , "root", "","faceheaven");
if($con ==false){
    die("ERROR : Could not connect1 ".$con->connection_error);

}

$banner=$_FILES['image']['name']; 
$expbanner=explode('.',$banner);
$bannerexptype=$expbanner[1];
date_default_timezone_set('Australia/Melbourne');
$date = date('m/d/Yh:i:sa', time());
$rand=rand(10000,99999);
$encname=$date.$rand;
$bannername=md5($encname).'.'.$bannerexptype;
$bannerpath="uploads/product_images/".$bannername;
$isUploaded=move_uploaded_file($_FILES["image"]["tmp_name"],$bannerpath);

if($isUploaded)
       echo 'successfully file uploaded';
     else
       echo 'something went wrong'; 

$id_check = "SELECT * FROM product WHERE id = '$_POST[id]'";
$res = mysqli_query($con, $id_check);
if(mysqli_num_rows($res) > 0){
    header('Location: productalreadyexist.php');
    exit();
}

else{
   
    $sql_insert="INSERT INTO `product`(`categories_id`, `name`, `mrp`, `price`, `image`, `short_desc`, `description`, `meta_title`, `meta_desc`, `meta_keyword`, `status`) VALUES ('$_POST[categories_id]','$_POST[name]','$_POST[mrp]', '$_POST[price]','$bannerpath', '$_POST[short_desc]','$_POST[description]','$_POST[meta_title]','$_POST[meta_desc]','$_POST[meta_keyword]',1)";
    $sql_insert_run=mysqli_query($con,$sql_insert);

if( $sql_insert_run ){
header('Location: productadded.php');
exit();

}else{
$msg="Error in inserting";
header('Location:manage_product.php');

}

}
    
?>