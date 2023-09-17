<?php
require('connection.inc.php');
require('functions.inc.php');
$msg='';
	$email=get_safe_value($con,$_POST['email']);
	$password=get_safe_value($con,$_POST['password']);
	$sql="select * from delivery_man where email='$email' and password='$password'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);
	if($count>0){
		$row=mysqli_fetch_assoc($res);
		if($row['status']=='0'){
			$msg="Account deactivated";	
		}else{
			$_SESSION['ADMIN_LOGIN']='yes';
			$_SESSION['ADMIN_EMAIL']=$email;
			$_SESSION['ADMIN_ID']=$row['id'];
			$_SESSION['ADMIN_ROLE']=$row['role'];
			header('location:users.php');
			die();
		}
	}else{
        header('location:deliverymanlogin.html');
			
	}
	

?>
