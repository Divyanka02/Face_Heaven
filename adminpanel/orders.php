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

$sql="SELECT *, r.name AS cusname FROM orders o,product p,register r WHERE o.product_id=p.id AND o.user_id=r.uid GROUP BY o.trx_id ORDER BY o.order_time DESC";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row" >
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Orders </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table " id="usertable">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>Order ID</th>
							   <th>User Name</th>
							   <th>Address</th>
							   <th>City</th>
							   <th>Status</th>
							   <th>Created On</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i ?></td>
							   <td><?php echo $row['trx_id']?></td>
							   <td><?php echo $row['cusname']?></td>
							   <td><?php echo $row['address']?></td>
							   <td><?php echo $row['city']?></td>
							   <td><?php echo $row['p_status']?></td>
							   <td><?php echo $row['order_time']?></td>
							   <td>
								<?php
								echo "<span class='badge badge-success'><a href='orders_details.php?trx_id=".$row['trx_id']."'>View Details</a></span>";
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