<?php

ob_start();

$link = new mysqli("localhost" , "root", "","faceheaven");
if($link ==false){
    die("ERROR : Could not connect1 ".$link->connection_error);

}
else{
    //echo "<br> Connection is established sucessfully ".$link->host_info;

}

$product_id = $_POST['product_id'];
$new_quantity = $_POST['quantity'];

if($new_quantity <= 1 )
{
    $new_quantity = 1;
}else{
    $new_quantity--;
}

// Update the quantity in the database
$sql = "UPDATE wishlist SET qty = $new_quantity WHERE p_id = $product_id";
$result = mysqli_query($link, $sql);

if ($result) {
    header('location:wishlist.php');
  // Quantity updated successfully
} else {
    echo 'something went wrong!';
  // Error updating quantity
}


$link->close();
?>

