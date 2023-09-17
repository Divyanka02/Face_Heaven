<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db.php";
if(isset($_POST["category"])){
	$category_query = "SELECT * FROM categories";
	$run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));
	echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4>Product Categories</h4></a></li>
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$cid = $row["id"];
			$cat_name = $row["categories"];
			echo "
					<li><a href='#' class='category' cid='$cid'>$cat_name</a></li>
			";
		}
		echo "</div>";
	}
}
// if(isset($_POST["brand"])){
// 	$brand_query = "SELECT * FROM brands";
// 	$run_query = mysqli_query($con,$brand_query);
// 	echo "
// 		<div class='nav nav-pills nav-stacked'>
// 			<li class='active'><a href='#'><h4>Brands</h4></a></li>
// 	";
// 	if(mysqli_num_rows($run_query) > 0){
// 		while($row = mysqli_fetch_array($run_query)){
// 			$bid = $row["brand_id"];
// 			$brand_name = $row["brand_title"];
// 			echo "
// 					<li><a href='#' class='selectBrand' bid='$bid'>$brand_name</a></li>
// 			";
// 		}
// 		echo "</div>";
// 	}
// }
if(isset($_POST["page"])){
	$sql = "SELECT * FROM products";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	$pageno = ceil($count/9);
	for($i=1;$i<=$pageno;$i++){
		echo "
			<li><a href='#' page='$i' id='page'>$i</a></li>
		";
	}
}
if(isset($_POST["getProduct"])){
	$limit = 90;
	if(isset($_POST["setPage"])){
		$pageno = $_POST["pageNumber"];
		$start = ($pageno * $limit) - $limit;
	}else{
		$start = 0;
	}
	$product_query = "SELECT * FROM product LIMIT $start,$limit";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['id'];
			$pro_cat   = $row['categories_id'];
			$pro_brand = $row['name'];
			$pro_title = $row['name'];
			$pro_price = $row['price'];
			$pro_mrp = $row['mrp'];
			$pro_image = $row['image'];
			echo "
				<div class='col-md-4'>
							<div class='panel panel-info categorychange'>
							<div class='panel-heading'>
							<a href='product_details.php?pid=$pro_id' style='font-size: 20px;color: #01142c;font-weight: bold;'>$pro_title</a>
							
							</div>
								<div class='panel-body ht__cat__thumb text-center'>
									<img src='adminpanel/$pro_image' style='width:220px; height:250px;'/>
								</div>
								<div class='fr__hover__info'>
									<ul class='product__action'>
										<li><a href='#' id='wishproduct' pid='$pro_id'><i class='icon-heart icons'></i></a></li>

										<li><a href='cart.php'><i class='icon-handbag icons'></i></a></li>

									</ul>
								</div>
								<div class='panel-heading' style='font-size: 17px; text-align: center;'>".CURRENCY."$pro_price.00 &nbsp &nbsp   <del> ".CURRENCY."$pro_mrp.00 </del> </div>
								<div class='panel-heading' style='text-align: center;'>
								
								<button pid='$pro_id' style='background-color: #01142c;width: 50%;font-size: 18px; padding: 2%;border-color: #180728;' id='product' class='btn btn-danger btn-xs'>Add To Cart</button>
									
								</div>
							</div>
						</div>	
			";
		}
	}
}

//<a href='product_details.php/?get_selected_product' id='selectProduct' method='post' pid='$pro_id' style='font-size: 20px;color: #01142c;font-weight: bold;'>$pro_title</a>
// <button pid='$pro_id' id='selectProduct' style='background-color: #46b35c;width: 40%;font-size: 18px; padding: 2%;border-color: #134a19;' id='product' class='btn btn-danger btn-xs'>View Details</button>


if(isset($_POST["get_seleted_Category"]) || isset($_POST["selectBrand"]) || isset($_POST["search"])){
	if(isset($_POST["get_seleted_Category"])){
		$id = $_POST["cat_id"];
		$sql = "SELECT * FROM product WHERE categories_id = '$id'";
	}else if(isset($_POST["selectBrand"])){
		$id = $_POST["brand_id"];
		//$sql = "SELECT * FROM product WHERE product_brand = '$id'";
		switch ($id)
		{
			case 'pricedsc' :
				$sql = "SELECT * FROM product ORDER BY price DESC";
				break;
			case 'priceasc' :
				$sql = "SELECT * FROM product ORDER BY price ASC";
				break;
			case 'alasc' :
				$sql = "SELECT * FROM product ORDER BY name ASC";
				break;
			case 'aldsc' :
				$sql = "SELECT * FROM product ORDER BY name DESC";
				break;
			default:
				$sql = "SELECT * FROM product";
				break;
		}
		
	}else {
		$keyword = $_POST["keyword"];
		$sql = "SELECT * FROM product WHERE name LIKE '%$keyword%'";
	}
	
	$run_query = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($run_query)){
			$pro_id    = $row['id'];
			$pro_cat   = $row['categories_id'];
			$pro_brand = $row['name'];
			$pro_title = $row['name'];
			$pro_price = $row['price'];
			$pro_mrp = $row['mrp'];
			$pro_image = $row['image'];
			echo "
			<div class='col-md-4'>
							<div class='panel panel-info categorychange'>
							<div class='panel-heading'>
							<a href='product_details.php?pid=$pro_id' style='font-size: 20px;color: #01142c;font-weight: bold;'>$pro_title</a>
							
							</div>
								<div class='panel-body ht__cat__thumb text-center'>
									<img src='adminpanel/$pro_image' style='width:220px; height:250px;'/>
								</div>
								<div class='fr__hover__info'>
									<ul class='product__action'>
										<li><a href='#' id='wishproduct' pid='$pro_id'><i class='icon-heart icons'></i></a></li>

										<li><a href='cart.php'><i class='icon-handbag icons'></i></a></li>

									</ul>
								</div>
								<div class='panel-heading' style='font-size: 17px; text-align: center;'>".CURRENCY."$pro_price.00 &nbsp &nbsp   <del> ".CURRENCY."$pro_mrp.00 </del> </div>
								<div class='panel-heading' style='text-align: center;'>
								
								<button pid='$pro_id' style='background-color: #01142c;width: 50%;font-size: 18px; padding: 2%;border-color: #180728;' id='product' class='btn btn-danger btn-xs'>Add To Cart</button>
									
								</div>
							</div>
						</div>	
			";
		}
	}

	if(isset($_POST["get_selected_product"])){
		$id = $_POST["pid"];
		$sql = "SELECT * FROM products WHERE product_id = '$id'";
		
		$run_query = mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($run_query)){
				$pro_id    = $row['product_id'];
				$pro_cat   = $row['product_cat'];
				$pro_brand = $row['product_brand'];
				$pro_title = $row['product_title'];
				$pro_price = $row['product_price'];
				$pro_image = $row['product_image'];
				echo "
					<div class='col-md-4'>
								<div class='panel panel-info'>
									<div class='panel-heading'>$pro_title</div>
									<div class='panel-body'>
										<img src='adminpanel/$pro_image' style='width:220px; height:250px;'/>
									</div>
									<div class='panel-heading'>₹$pro_price.00/-
										<button pid='$pro_id' style='float:right;' id='product' class='btn btn-danger btn-xs'>Add To Cart</button>
									</div>
								</div>
							</div>	
				";
			}
		}
	


	if(isset($_POST["addToCart"])){
		

		$p_id = $_POST["proId"];
		

		if(isset($_SESSION["uid"])){

		$user_id = $_SESSION["uid"];

		$sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
		if($count > 0){
			echo "
				<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is already added into the cart Continue Shopping..!</b>
				</div>
			";//not in video
		} else {
			$sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','$user_id','1')";
			if(mysqli_query($con,$sql)){
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is Added..!</b>
					</div>
				";
			}
		}
		}else{
			$sql = "SELECT cart_id FROM cart WHERE ip_add = '$ip_add' AND p_id = '$p_id' AND user_id = -1";
			$query = mysqli_query($con,$sql);
			if (mysqli_num_rows($query) > 0) {
				echo "
					<div class='alert alert-warning'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<b>Product is already added into the cart Continue Shopping..!</b>
					</div>";
					exit();
			}
			$sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','-1','1')";
			if (mysqli_query($con,$sql)) {
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Your product has been added to cart!</b>
					</div>
				";
				exit();
			}
			
		}
		
		
		
		
	}




	if(isset($_POST["addToWish"])){
		

		$p_id = $_POST["proId"];
		

		if(isset($_SESSION["uid"])){

		$user_id = $_SESSION["uid"];

		$sql = "SELECT * FROM wishlist WHERE p_id = '$p_id' AND user_id = '$user_id'";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
		if($count > 0){
			echo "
				<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is already added into the wishlist Continue Shopping..!</b>
				</div>
			";//not in video
		} else {
			$sql = "INSERT INTO `wishlist`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','$user_id','1')";
			if(mysqli_query($con,$sql)){
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is Added to the wishlist..!</b>
					</div>
				";
			}
		}
		}else{
			$sql = "SELECT wish_id FROM wishlist WHERE ip_add = '$ip_add' AND p_id = '$p_id' AND user_id = -1";
			$query = mysqli_query($con,$sql);
			if (mysqli_num_rows($query) > 0) {
				echo "
					<div class='alert alert-warning'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<b>Product is already added into the wishlist Continue Shopping..!</b>
					</div>";
					exit();
			}
			$sql = "INSERT INTO `wishlist`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','-1','1')";
			if (mysqli_query($con,$sql)) {
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Your product has been added to wishlist!</b>
					</div>
				";
				exit();
			}
			
		}
		
		
		
		
	}








//Count User cart item
if (isset($_POST["count_item"])) {
	//When user is logged in then we will count number of item in cart by using user session id
	if (isset($_SESSION["uid"])) {
		$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE user_id = $_SESSION[uid]";
	}else{
		//When user is not logged in then we will count number of item in cart by using users unique ip address
		$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE ip_add = '$ip_add' AND user_id < 0";
	}
	
	$query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query);
	echo $row["count_item"];
	exit();
}
//Count User cart item

//Get Cart Item From Database to Dropdown menu
if (isset($_POST["Common"])) {

	if (isset($_SESSION["uid"])) {
		//When user is logged in this query will execute
		$sql = "SELECT a.id,a.name,a.price,a.image,b.cart_id,b.qty FROM product a,cart b WHERE a.id=b.p_id AND b.user_id='$_SESSION[uid]'";
		$sql2 = "SELECT a.id,a.name,a.price,a.image,b.wish_id,b.qty FROM product a,wishlist b WHERE a.id=b.p_id AND b.user_id='$_SESSION[uid]'";
	}else{
		//When user is not logged in this query will execute
		$sql = "SELECT a.id,a.name,a.price,a.image,b.cart_id,b.qty FROM product a,cart b WHERE a.id=b.p_id AND b.ip_add='$ip_add' AND b.user_id < 0";
		$sql2 = "SELECT a.id,a.name,a.price,a.image,b.wish_id,b.qty FROM product a,wishlist b WHERE a.id=b.p_id AND b.ip_add='$ip_add' AND b.user_id < 0";
	}
	$query = mysqli_query($con,$sql);
	$query2 = mysqli_query($con,$sql2);
	if (isset($_POST["getCartItem"])) {
		//display cart item in dropdown menu
		if (mysqli_num_rows($query) > 0) {
			$n=0;
			while ($row=mysqli_fetch_array($query)) {
				$n++;
				$product_id = $row["id"];
				$product_title = $row["name"];
				$product_price = $row["price"];
				$product_image = $row["image"];
				$cart_item_id = $row["cart_id"];
				$qty = $row["qty"];
				echo '
					<div class="row" style="display: flex;align-items: center; border-bottom: 1px solid rgba(0, 0, 0, 0.1); padding: 1%; color: black;">
						<div class="col-md-3">'.$n.'</div>
						<div class="col-md-3"><img class="img-responsive" src="adminpanel/'.$product_image.'" /></div>
						<div class="col-md-3">'.$product_title.'</div>
						<div class="col-md-3">'.CURRENCY.''.$product_price.'</div>
					</div>';
				
			}
			?>
				<a style="float:right;" href="cart.php" class="btn btn-warning">View Cart&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></span></a>
			<?php
			exit();
		}
	}
	if (isset($_POST["checkOutDetails"])) {
		if (mysqli_num_rows($query) > 0) {
			//display user cart item with "Ready to checkout" button if user is not login
			echo "<form method='post' action='login_new.html'>";
				$n=0;
				while ($row=mysqli_fetch_array($query)) {
					$n++;
					$product_id = $row["id"];
					$product_title = $row["name"];
					$product_price = $row["price"];
					$product_image = $row["image"];
					$cart_item_id = $row["cart_id"];
					$qty = $row["qty"];

					echo 
						'<div class="row" style="display: flex;align-items: center; margin: 2%; border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
								<div class="col-md-2">
									<div class="btn-group">
										<a href="#" remove_id="'.$product_id.'" class="btn btn-danger remove"><span class="glyphicon glyphicon-trash"></span></a>
									</div>
								</div>
								<input type="hidden" name="product_id[]" value="'.$product_id.'"/>
								<input type="hidden" name="" value="'.$cart_item_id.'"/>
								<div class="col-md-2"><img class="img-responsive" src="adminpanel/'.$product_image.'"></div>
								<div class="col-md-2">'.$product_title.'</div>
								
								<!-- <button class="plus-btn" id="updateQuantity" pid="'.$product_id.'" data-product-id="'.$product_id.'" type="button">+</button>-->

								<div class="col-md-2" style="display: flex;align-items: center;">
								<form method="post" action="update_quantity_minus.php">
									<input type="hidden" name="product_id" value="'.$product_id.'">
									<input type="hidden" name="quantity" value="'.$qty.'">
									<button type="submit" style="background: #01142c;font-size: 20px;padding: 4px;margin: 10px;color: white;">-</button>
								</form>
								<span>'.$qty.'</span>	
								<form method="post" action="update_quantity.php">
									<input type="hidden" name="product_id" value="'.$product_id.'">
									<input type="hidden" name="quantity" value="'.$qty.'">
									
									<button type="submit" style="background: #01142c;font-size: 20px;padding: 3px;margin: 10px;color: white;">+</button>
								</form>
								</div>

								<script>
									const quantityContainers = document.querySelectorAll(".quantitys");
									quantityContainers.forEach(container => {
									const minusBtn = container.querySelector(".minus-btn");
									const plusBtn = container.querySelector(".plus-btn");
									const input = container.querySelector(".qty");

									// Add event listeners to the minus and plus buttons
									minusBtn.addEventListener("click", () => {
										if (input.value > 1) {
										input.value--;
										}
									});

									plusBtn.addEventListener("click", () => {
										if (input.value < 10) {
										input.value++;
										}

										var productId = $(this).data("product-id");
										var newQuantity = input.value;
										
										// Call the updateQuantity function
										updateQuantity(productId, newQuantity);
									});
									});

									function updateQuantity(productId, quantity) {
										event.preventDefault();
										$.ajax({
											url: "update_quantity.php",
											method: "POST",
											data: {
											product_id: productId,
											quantity: quantity
											},
											success: function() {
												
											// Handle success
											},
											error: function() {
												
											// Handle error
											}
										});
									}

								</script>

								
								<div class="col-md-2"><input type="text" class="form-control price" value="'.$product_price.'" readonly="readonly"></div>
								<div class="col-md-2"><input type="text" class="form-control total" value="'.$product_price*$qty.'" readonly="readonly"></div>
							</div>';
				}
				
				echo '<div class="row" style="display: flex;align-items: center; padding: 5%;">
							<div class="col-md-4">
								<b class="delivery_charges" style="font-size:16px;">Delivery Charges: ₹100</b>
							</div>
							<div class="col-md-4">
								<b class="net_total" style="font-size:20px;"> </b>
							</div>
							<div class="col-md-4">
								<b class="final_total" style="font-size:20px;"> </b>
							</div>
					';
				if (!isset($_SESSION["uid"])) {
					echo '<input type="submit" style="float:right;background-color: #01142c; border: darkslateblue;" name="login_user_with_product" class="btn btn-info btn-lg" value="Ready to Checkout" >
							</form>';
					
				}else if(isset($_SESSION["uid"])){
					//Paypal checkout form
					//<form action="payment_success.php" method="get">
					//<form action="payment.php" method="get">
					echo '
						</form>
						<form action="customer_order_form.php" method="get">
							<input type="hidden" name="cmd" value="_cart" for="complete">
							<input type="hidden" name="business" value="shoppingcart@ecommerceastro.com">
							
							<input type="hidden" name="upload" value="1">';
							
							$x=0;
							$order_total=0;
							$sql = "SELECT a.id,a.name,a.price,a.image,b.cart_id,b.qty FROM product a,cart b WHERE a.id=b.p_id AND b.user_id='$_SESSION[uid]'";
							$query = mysqli_query($con,$sql);
							while($row=mysqli_fetch_array($query)){
								$x++;
								$order_total = $order_total + ($row["qty"]*$row["price"]);
								echo  	
									'<input type="hidden" name="item_name_'.$x.'" value="'.$row["name"].'">
								  	 <input type="hidden" name="item_number_'.$x.'" value="'.$x.'">
								     <input type="hidden" name="amount_'.$x.'" value="'.$row["price"].'">
								     <input type="hidden" name="quantity_'.$x.'" value="'.$row["qty"].'">';
								}
								$order_total = $order_total + 100;
							  
							echo   
								'<input type="hidden" name="return" value="http://localhost/project1/payment_success.php"/>
					                <input type="hidden" name="notify_url" value="http://localhost/ecommerce_final/payment_success.php">
									<input type="hidden" name="cancel_return" value="http://localhost/ecommerce-app-h/cancel.php"/>
									<input type="hidden" name="currency_code" value="USD"/>
									<input type="hidden" name="custom" value="'.$_SESSION["uid"].'"/>
									<input type="hidden" name="total" id="total" value="'.$order_total.'"/>
									
									<div class="form-group">
									<label> Payment Method : </label> 
									<div class="radio">
											<label>
												<input type="radio" class="paymethod" name="paymethod" id="deliveryfee" value="Cash on Delivery" checked="true" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne">Cash on Delivery 
											
											</label>
										</div> 
									</div>

										<input style="width:100%;" value="Submit Order" type="submit" name="submit" class="btn btn-success btn-lg">
								</form>';
				}
			}
	}



	if (isset($_POST["wishOutDetails"])) {
		if (mysqli_num_rows($query2) > 0) {
			//display user cart item with "Ready to checkout" button if user is not login
			echo "<form method='post' action='login_new.html'>";
				$n=0;
				while ($row=mysqli_fetch_array($query2)) {
					$n++;
					$product_id = $row["id"];
					$product_title = $row["name"];
					$product_price = $row["price"];
					$product_image = $row["image"];
					$cart_item_id = $row["wish_id"];
					$qty = $row["qty"];

					echo 
						'<div class="row" style="display: flex;align-items: center; margin: 2%; border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
								<div class="col-md-2">
									<div class="btn-group">
										<a href="#" remove_id_wish="'.$product_id.'" class="btn btn-danger remove2"><span class="glyphicon glyphicon-trash"></span></a>
									</div>
								</div>
								<input type="hidden" name="product_id[]" value="'.$product_id.'"/>
								<input type="hidden" name="" value="'.$cart_item_id.'"/>
								<div class="col-md-2"><img class="img-responsive" src="adminpanel/'.$product_image.'"></div>
								<div class="col-md-2">'.$product_title.'</div>


								<div class="col-md-2" style="display: flex;align-items: center;">
								<form method="post" action="update_quantity_minus_wish.php">
									<input type="hidden" name="product_id" value="'.$product_id.'">
									<input type="hidden" name="quantity" value="'.$qty.'">
									<button type="submit" style="background: #01142c;font-size: 20px;padding: 4px;margin: 10px;color: white;">-</button>
								</form>
								<span>'.$qty.'</span>	
								<form method="post" action="update_quantity_wish.php">
									<input type="hidden" name="product_id" value="'.$product_id.'">
									<input type="hidden" name="quantity" value="'.$qty.'">
									
									<button type="submit" style="background: #01142c;font-size: 20px;padding: 3px;margin: 10px;color: white;">+</button>
								</form>
								</div>
								
								<div class="col-md-2"><input type="text" class="form-control price" value="'.$product_price.'" readonly="readonly"></div>
								<div class="col-md-2"><input type="text" class="form-control total" value="'.$product_price*$qty.'" readonly="readonly"></div>
							</div>';
				}
				
				echo '<div class="row" style="display: flex;align-items: center; padding: 5%;">
							<div class="col-md-4">
								<b class="delivery_charges" style="font-size:16px;">Delivery Charges: ₹100</b>
							</div>
							<div class="col-md-4">
								<b class="net_total" style="font-size:20px;"> </b>
							</div>
							<div class="col-md-4">
								<b class="final_total" style="font-size:20px;"> </b>
							</div>
					';
				if (!isset($_SESSION["uid"])) {
					echo '<input type="submit" style="float:right;background-color: #01142c; border: darkslateblue;" name="login_user_with_product" class="btn btn-info btn-lg" value="Ready to Checkout" >
							</form>';
					
				}else if(isset($_SESSION["uid"])){
					//Paypal checkout form
					echo '
						</form>
						<form action="customer_order_form.php" method="get">
							<input type="hidden" name="cmd" value="_cart" for="complete">
							<input type="hidden" name="business" value="shoppingcart@ecommerceastro.com">
							<input type="hidden" name="total" id="total">
							<input type="hidden" name="upload" value="1">';
							
							$x=0;
							$order_total=0;
							$sql = "SELECT a.id,a.name,a.price,a.image,b.cart_id,b.qty FROM product a,cart b WHERE a.id=b.p_id AND b.user_id='$_SESSION[uid]'";
							$query = mysqli_query($con,$sql);
							while($row=mysqli_fetch_array($query)){
								$x++;
								$order_total = $order_total + ($row["qty"]*$row["price"]);
								echo  	
									'<input type="hidden" name="item_name_'.$x.'" value="'.$row["name"].'">
								  	 <input type="hidden" name="item_number_'.$x.'" value="'.$x.'">
								     <input type="hidden" name="amount_'.$x.'" value="'.$row["price"].'">
								     <input type="hidden" name="quantity_'.$x.'" value="'.$row["qty"].'">';
								}
								$order_total = $order_total + 100;
							  
							echo   
								'<input type="hidden" name="return" value="http://localhost/project1/payment_success.php"/>
					                <input type="hidden" name="notify_url" value="http://localhost/ecommerce_final/payment_success.php">
									<input type="hidden" name="cancel_return" value="http://localhost/ecommerce-app-h/cancel.php"/>
									<input type="hidden" name="currency_code" value="USD"/>
									<input type="hidden" name="custom" value="'.$_SESSION["uid"].'"/>
									<input type="hidden" name="total" id="total" value="'.$order_total.'"/>
									
									<div class="form-group">
									<label> Payment Method : </label> 
									<div class="radio">
											<label>
												<input type="radio" class="paymethod" name="paymethod" id="deliveryfee" value="Cash on Delivery" checked="true" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne">Cash on Delivery 
											
											</label>
										</div> 
									</div>

										<input style="width:100%;" value="Submit Order" type="submit" name="submit" class="btn btn-success btn-lg">
								</form>';
				}
			}
	}
	
	
}

//Remove Item From cart
if (isset($_POST["removeItemFromCart"])) {
	$remove_id = $_POST["rid"];
	if (isset($_SESSION["uid"])) {
		$sql = "DELETE FROM cart WHERE p_id = '$remove_id' AND user_id = '$_SESSION[uid]'";
	}else{
		$sql = "DELETE FROM cart WHERE p_id = '$remove_id' AND ip_add = '$ip_add'";
	}
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is removed from cart</b>
				</div>";
		exit();
	}
}


//Update Item From cart
if (isset($_POST["updateCartItem"])) {
	$update_id = $_POST["update_id"];
	$qty = $_POST["qty"];
	if (isset($_SESSION["uid"])) {
		$sql = "UPDATE cart SET qty='$qty' WHERE p_id = '$update_id' AND user_id = '$_SESSION[uid]'";
	}else{
		$sql = "UPDATE cart SET qty='$qty' WHERE p_id = '$update_id' AND ip_add = '$ip_add'";
	}
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is updated</b>
				</div>";
		exit();
	}
}


//Remove Item From cart
if (isset($_POST["removeItemFromWish"])) {
	$remove_id = $_POST["rid"];
	if (isset($_SESSION["uid"])) {
		$sql = "DELETE FROM wishlist WHERE p_id = '$remove_id' AND user_id = '$_SESSION[uid]'";
	}else{
		$sql = "DELETE FROM wishlist WHERE p_id = '$remove_id' AND ip_add = '$ip_add'";
	}
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is removed from wishlist</b>
				</div>";
		exit();
	}
}


//Update Item From cart
if (isset($_POST["updateWishItem"])) {
	$update_id = $_POST["update_id"];
	$qty = $_POST["qty"];
	if (isset($_SESSION["uid"])) {
		$sql = "UPDATE wishlist SET qty='$qty' WHERE p_id = '$update_id' AND user_id = '$_SESSION[uid]'";
	}else{
		$sql = "UPDATE wishlist SET qty='$qty' WHERE p_id = '$update_id' AND ip_add = '$ip_add'";
	}
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is updated</b>
				</div>";
		exit();
	}
}




?>






