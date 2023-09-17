<?php
require('top.inc.php');
isAdmin();
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='delete'){
		$email=get_safe_value($con,$_GET['email']);
		$delete_sql="delete from register where email='$email'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select * from customer_order";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Recent Order</h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table " id="usertable">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>Order Number</th>
							   <th>Name</th>
							   <th>Mobile no.</th>
							   <th>Email</th>
							   <th>Address</th>
							   <th>Bill Amount</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i ?></td>
							   <td><?php echo $row['ordernumber']?></td>
							   <td><?php echo $row['customername']?></td>
							   <td><?php echo $row['customerphonenumber']?></td>
							   <td><?php echo $row['customeremail']?></td>
							   <td><?php echo $row['customeraddress']?></td>
							   <td><?php echo $row['billamount']?></td>
							  
							   <td>
								<?php
								echo "";
								$i=$i+1;
								?>
							   </td>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<footer>
	<?php
require('footer.inc.php');
?>
</footer>
<!--
echo "<span class='badge badge-delete'><a href='?type=delete&email=".$row['ordernumber']."'>Delete</a></span>";
								$i=$i+1;-->