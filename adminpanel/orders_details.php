<?php
require('top.inc.php');
isAdmin();
if(isset($_GET['trx_id'])){
	$trx_id = $_GET['trx_id'];
	
}

$sql="SELECT *  FROM orders o,product p WHERE o.product_id=p.id AND o.trx_id=$trx_id ";
$sql2="SELECT * FROM orders o, register r WHERE o.user_id=r.uid AND o.trx_id=$trx_id GROUP BY o.trx_id";
$res=mysqli_query($con,$sql);
$res2=mysqli_query($con,$sql2);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row" >
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Orders Details</h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table " id="usertable">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>Order ID</th>
							   <th>Product Name</th>
							   <th>Quantity</th>
							   <th>Price</th>
							   <th>Status</th>
							   <th>Created On</th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i ?></td>
							   <td><?php echo $row['trx_id']?></td>
							   <td><?php echo $row['name']?></td>
							   <td><?php echo $row['qty']?></td>
							   <td><?php echo $row['price']?></td>
							   <td><?php echo $row['p_status']?></td>
							   <td><?php echo $row['order_time']?></td>
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


<div class="content pb-0">
	<div class="orders">
	   <div class="row" >
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Customer Details</h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table " id="usertable">
						 <thead>
							<tr>
							   <th>Customer Name</th>
							   <th>Phone Number</th>
							   <th>Address</th>
							   <th>City</th>
							   <th>State</th>
							   <th>Pincode</th>
							   <th>Gender</th>
							   <th>Email</th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							while($row2=mysqli_fetch_assoc($res2)){?>
							<tr>
							   <td><?php echo $row2['name']?></td>
							   <td><?php echo $row2['phonenumber']?></td>
							   <td><?php echo $row2['address']?></td>
							   <td><?php echo $row2['city']?></td>
							   <td><?php echo $row2['state']?></td>
							   <td><?php echo $row2['pincode']?></td>
							   <td><?php echo $row2['gender']?></td>
							   <td><?php echo $row2['email']?></td>
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