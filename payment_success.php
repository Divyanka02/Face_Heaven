<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

if($action=='processorder')
{
	processorder();
}

if (isset($_GET["st"])) {

	# code...
	$trx_id = $_GET["tx"];
		$p_st = $_GET["st"];
		$amt = $_GET["amt"];
		$cc = $_GET["cc"];
		$cm_user_id = $_GET["cm"];
		$c_amt = $_COOKIE["ta"];
	if ($p_st != "Completed") {

		

		include_once("db.php");
		$sql = "SELECT p_id,qty FROM cart WHERE user_id = '$cm_user_id'";
		$query = mysqli_query($con,$sql);
		if (mysqli_num_rows($query) > 0) {
			# code...
			while ($row=mysqli_fetch_array($query)) {
			$product_id[] = $row["p_id"];
			$qty[] = $row["qty"];
			}

			for ($i=0; $i < count($product_id); $i++) { 
				$sql = "INSERT INTO orders (user_id,product_id,qty,trx_id,p_status) VALUES ('$cm_user_id','".$product_id[$i]."','".$qty[$i]."','$trx_id','$p_st')";
				mysqli_query($con,$sql);
			}

			$sql = "DELETE FROM cart WHERE user_id = '$cm_user_id'";
			if (mysqli_query($con,$sql)) {
				?>
					<!DOCTYPE html>
					<html>
						<head>
							<meta charset="UTF-8">
							<title>Face Heaven - Order Placed</title>
							<link rel="stylesheet" href="css/bootstrap.min.css"/>
							<script src="js/jquery2.js"></script>
							<script src="js/bootstrap.min.js"></script>
							<script src="main.js"></script>
							<style>
								table tr td {padding:10px;}
							</style>


								
								<!-- All css files are included here. -->
							<!-- Bootstrap fremwork main css -->
							<link rel="stylesheet" href="appbar/css/bootstrap.min.css">
							<!-- Owl Carousel min css -->
							<link rel="stylesheet" href="appbar/css/owl.carousel.min.css">
							<link rel="stylesheet" href="appbar/css/owl.theme.default.min.css">
							<!-- This core.css file contents all plugings css file. -->
							<link rel="stylesheet" href="appbar/css/core.css">
							<!-- Theme shortcodes/elements style -->
							<link rel="stylesheet" href="appbar/css/shortcode/shortcodes.css">
							<!-- Theme main style -->
							<link rel="stylesheet" href="appbar/style.css">
							<!-- Responsive css -->
							<link rel="stylesheet" href="appbar/css/responsive.css">
							<!-- User style -->
							<link rel="stylesheet" href="appbar/css/custom.css">


							<!-- Modernizr JS -->
							<script src="js/vendor/modernizr-3.5.0.min.js"></script>


						</head>
					<body>
						
					
					<div class="wrapper" style="background-color: #01142c;color:white">
								<!-- Start Header Style -->
								<header id="htc__header" class="htc__header__area header--one">
									<!-- Start Mainmenu Area -->
									<div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
										<div class="container">
											<div class="row">
												<div class="menumenu__container clearfix">
													<div class="col-lg-2 col-md-2 col-sm-3 col-xs-5"> 
														<div class="logo">
															<a href="index.php"><img src="appbar/images/navlogo.png" alt="logo images"></a>
														</div>
													</div>
													<div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
														<nav class="main__menu__nav hidden-xs hidden-sm">
															<ul class="main__menu">
																<li class="drop"><a href="index.php" style="color:white">Home</a></li>
																<li class="drop"><a href="#" style="color:white">About us</a>
																
																	
																</li>
																<li class="drop"><a href="index.php" style="color:white">Product</a>
																
																</li>
															
																<li class="drop"><a href="#" style="color:white">Pages</a>
																	<ul class="dropdown">
																		<li><a href="cart.php">Cart page</a></li>
																		<li><a href="cart.php">checkout</a></li>
																		<li><a href="contactus.php">contact</a></li>
																		<li><a href="index.php">product</a></li>
																		<li><a href="wishlist.php">wishlist</a></li>
																	</ul>
																</li>
																<li><a href="contactus.php" style="color:white">contact</a></li>
															</ul>
														</nav>

														<div class="mobile-menu clearfix visible-xs visible-sm" style="color:white">
															<nav id="mobile_dropdown" style="color: white; display: block;">
																<ul style="color:white">
																	<li><a href="demonavbar.html" style="color:white">Home</a></li>
																	<li><a href="blog.html" style="color:white">blog</a></li>
																	<li><a href="#" style="color:white">pages</a>
																		<ul>
																		
																			<li><a href="cart.html" style="color:white">Cart page</a></li>
																			<li><a href="checkout.html" style="color:white">checkout</a></li>
																			<li><a href="contact.html" style="color:white">contact</a></li>
																			<li><a href="product-grid.html" style="color:white">product</a></li>
																	
																			<li><a href="wishlist.html" style="color:white">wishlist</a></li>
																		</ul>
																	</li>
																	<li><a href="contactus.php" style="color:white">contact</a></li>
																</ul>
															</nav>
														</div>  
													</div>
													<div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
														<div class="header__right" style="width: 227%;">
															<div class="header__search search search__open">
																<a href="#" style="color:white"><i class="icon-magnifier icons" style="color:white"></i></a>
															</div>
															<div class="header__account">
																<a href="wishlist.php" style="color:white"><i class="icon-heart icons" style="color:white"></i></a>
															</div>
															<div class="header__account">
																<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white; font-size: 16px;"><i class="icon-user icons" style="color:white"></i>  <?php echo "Hi, ".$_SESSION["name"]; ?></a>
																<ul class="dropdown-menu" style="margin-left: 90%;">
																		<li><a href="cart.php" style="text-decoration:none; color:black;"><span class="glyphicon glyphicon-shopping-cart"> Cart</a></li>
																		<li class="divider"></li>
																		<li><a href="customer_order.php" style="text-decoration:none; color:black;">Orders</a></li>
																		<li class="divider"></li>
																		
																		<li><a href="logout.php" style="text-decoration:none; color:black;">Logout</a></li>
																	</ul>
															</div>
															<div class="htc__shopping__cart" >
																<a class="cart__menu" href="#" data-toggle="dropdown"><i class="icon-handbag icons" style="color:white"></i></a>
																<a href="#"><span class="badge">0</span></a>
																<div class="dropdown-menu" style="width:400px; max-height: 600px; overflow-x: hidden;">
																		<div class="panel panel-success">
																			<div class="panel-heading">
																				<div class="row">
																					<div class="col-md-3">Sl.No</div>
																					<div class="col-md-3">Product Image</div>
																					<div class="col-md-3">Product Name</div>
																					<div class="col-md-3">Price in <?php echo CURRENCY; ?></div>
																				</div>
																			</div>
																			<div class="panel-body">
																				<div id="cart_product">
																				<!--<div class="row">
																					<div class="col-md-3">Sl.No</div>
																					<div class="col-md-3">Product Image</div>
																					<div class="col-md-3">Product Name</div>
																					<div class="col-md-3">Price in $.</div>
																				</div>-->
																				</div>
																			</div>
																			<div class="panel-footer"></div>
																		</div>
																	</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="mobile-menu-area" style="color:white"></div>
										</div>
									</div>
									<!-- End Mainmenu Area -->
								</header>
								<!-- End Header Area -->
								
								<!--<div class="body__overlay"></div>-->
								<!-- Start Offset Wrapper -->
								<div class="offset__wrapper">
									<!-- Start Search Popap -->
									<div class="search__area">
										<div class="container">
											<div class="row">
												<div class="col-md-12">
													<div class="search__inner">
														<form action="#" method="get">
															<input placeholder="Search here... " type="text">
															<button type="submit"></button>
														</form>
														<div class="search__close__btn">
															<span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End Search Popap -->
								
							
								<!-- jquery latest version -->
									<script src="js/vendor/jquery-3.2.1.min.js"></script>
									<!-- Bootstrap framework js -->
									<!-- All js plugins included in this file. -->
									<script src="js/plugins.js"></script>
									<script src="js/slick.min.js"></script>
									<script src="js/owl.carousel.min.js"></script>
									<!-- Waypoints.min.js. -->
									<script src="js/waypoints.min.js"></script>
									<!-- Main js file that contents all jQuery plugins activation. -->
									<script src="js/main.js"></script>


								</div>
							</div>


						<div class="container-fluid">
						
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">
									<div class="panel panel-default">
										<div class="panel-heading"></div>
										<div class="panel-body">
											<h1>Thankyou </h1>
											<hr/>
											<p>Hello <?php echo "<b>".$_SESSION["name"]."</b>"; ?>,Your payment process is 
											successfully completed and your Transaction id is <b><?php echo $trx_id; ?></b><br/>
											you can continue your Shopping <br/></p>
											<a href="index.php" class="btn btn-success btn-lg">Continue Shopping</a>
										</div>
										<div class="panel-footer"></div>
									</div>
								</div>
								<div class="col-md-2"></div>
							</div>
						</div>
					</body>
					</html>

				<?php
			}
		}else{
			header("location:index.php");
		}
		
	}
}


	

	// # code...
	// $trx_id = $_GET["tx"];
	// $p_st = $_GET["st"];
	// $amt = $_GET["amt"];
	// $cc = $_GET["cc"];
	 $cm_user_id = $_GET["custom"];
	 $net_total = $_GET["total"];
	 $name = $_GET["name"];
	 $address = $_GET["address"];
	 $phonenumber = $_GET["phonenumber"];
	 $email = $_SESSION["session_email"];
	// $c_amt = $_COOKIE["ta"];
	$unique_id = time() . mt_rand() . $cm_user_id;

	// print($cm_user_id);
	// print("  ");
	// print($net_total);
	// print("  ");
	// print($unique_id);


	include_once("db.php");
	$sql = "SELECT p_id,qty FROM cart WHERE user_id = '$cm_user_id'";
	$query = mysqli_query($con,$sql);
	if (mysqli_num_rows($query) > 0) {
		# code...
		while ($row=mysqli_fetch_array($query)) {
		$product_id[] = $row["p_id"];
		$qty[] = $row["qty"];
		}

		for ($i=0; $i < count($product_id); $i++) { 
			$sql = "INSERT INTO orders (user_id,product_id,qty,trx_id,p_status,order_total) VALUES ('$cm_user_id','".$product_id[$i]."','".$qty[$i]."','$unique_id','Cash On Delivery','$net_total')";
			mysqli_query($con,$sql);
		}

		$sql = "INSERT INTO customer_order_new (customer_name,customer_email,customer_address,order_id,customer_phone) VALUES ('$name','$email','$address','$unique_id','$phonenumber')";
			mysqli_query($con,$sql);

		$sql = "DELETE FROM cart WHERE user_id = '$cm_user_id'";
		if (mysqli_query($con,$sql)) {
			?>
				<!DOCTYPE html>
				<html>
					<head>
						<meta charset="UTF-8">
						<title>Face Heaven - Order Placed</title>
						<link rel="stylesheet" href="css/bootstrap.min.css"/>
						<script src="js/jquery2.js"></script>
						<script src="js/bootstrap.min.js"></script>
						<script src="main.js"></script>
						<style>
							table tr td {padding:10px;}
						</style>


						
								<!-- All css files are included here. -->
							<!-- Bootstrap fremwork main css -->
							<link rel="stylesheet" href="appbar/css/bootstrap.min.css">
							<!-- Owl Carousel min css -->
							<link rel="stylesheet" href="appbar/css/owl.carousel.min.css">
							<link rel="stylesheet" href="appbar/css/owl.theme.default.min.css">
							<!-- This core.css file contents all plugings css file. -->
							<link rel="stylesheet" href="appbar/css/core.css">
							<!-- Theme shortcodes/elements style -->
							<link rel="stylesheet" href="appbar/css/shortcode/shortcodes.css">
							<!-- Theme main style -->
							<link rel="stylesheet" href="appbar/style.css">
							<!-- Responsive css -->
							<link rel="stylesheet" href="appbar/css/responsive.css">
							<!-- User style -->
							<link rel="stylesheet" href="appbar/css/custom.css">


							<!-- Modernizr JS -->
							<script src="js/vendor/modernizr-3.5.0.min.js"></script>

							
							<link rel="stylesheet" href="footer.css">
							<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
					</head>
				<body>
					
				
				<div class="wrapper" style="background-color: #01142c;color:white">
								<!-- Start Header Style -->
								<header id="htc__header" class="htc__header__area header--one">
									<!-- Start Mainmenu Area -->
									<div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
										<div class="container">
											<div class="row">
												<div class="menumenu__container clearfix">
													<div class="col-lg-2 col-md-2 col-sm-3 col-xs-5"> 
														<div class="logo">
															<a href="index.php"><img src="appbar/images/navlogo.png" alt="logo images"></a>
														</div>
													</div>
													<div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
														<nav class="main__menu__nav hidden-xs hidden-sm">
															<ul class="main__menu">
																<li class="drop"><a href="index.php" style="color:white">Home</a></li>
																<li class="drop"><a href="#" style="color:white">About us</a>
																
																	
																</li>
																<li class="drop"><a href="index.php" style="color:white">Product</a>
																
																</li>
															
																<li class="drop"><a href="#" style="color:white">Pages</a>
																	<ul class="dropdown">
																		<li><a href="cart.php">Cart page</a></li>
																		<li><a href="cart.php">checkout</a></li>
																		<li><a href="contactus.php">contact</a></li>
																		<li><a href="index.php">product</a></li>
																		<li><a href="wishlist.php">wishlist</a></li>
																	</ul>
																</li>
																<li><a href="contactus.php" style="color:white">contact</a></li>
															</ul>
														</nav>

														<div class="mobile-menu clearfix visible-xs visible-sm" style="color:white">
															<nav id="mobile_dropdown" style="color: white; display: block;">
																<ul style="color:white">
																	<li><a href="demonavbar.html" style="color:white">Home</a></li>
																	<li><a href="blog.html" style="color:white">blog</a></li>
																	<li><a href="#" style="color:white">pages</a>
																		<ul>
																		
																			<li><a href="cart.html" style="color:white">Cart page</a></li>
																			<li><a href="checkout.html" style="color:white">checkout</a></li>
																			<li><a href="contact.html" style="color:white">contact</a></li>
																			<li><a href="product-grid.html" style="color:white">product</a></li>
																	
																			<li><a href="wishlist.html" style="color:white">wishlist</a></li>
																		</ul>
																	</li>
																	<li><a href="contactus.php" style="color:white">contact</a></li>
																</ul>
															</nav>
														</div>  
													</div>
													<div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
														<div class="header__right" style="width: 227%;">
															<div class="header__search search search__open">
																<a href="#" style="color:white"><i class="icon-magnifier icons" style="color:white"></i></a>
															</div>
															<div class="header__account">
																<a href="wishlist.php" style="color:white"><i class="icon-heart icons" style="color:white"></i></a>
															</div>
															<div class="header__account">
																<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white; font-size: 16px;"><i class="icon-user icons" style="color:white"></i>  <?php echo "Hi, ".$_SESSION["name"]; ?></a>
																<ul class="dropdown-menu" style="margin-left: 90%;">
																		<li><a href="cart.php" style="text-decoration:none; color:black;"><span class="glyphicon glyphicon-shopping-cart"> Cart</a></li>
																		<li class="divider"></li>
																		<li><a href="customer_order.php" style="text-decoration:none; color:black;">Orders</a></li>
																		<li class="divider"></li>
																		
																		<li><a href="logout.php" style="text-decoration:none; color:black;">Logout</a></li>
																	</ul>
															</div>
															<div class="htc__shopping__cart" >
																<a class="cart__menu" href="#" data-toggle="dropdown"><i class="icon-handbag icons" style="color:white"></i></a>
																<a href="#"><span class="badge">0</span></a>
																<div class="dropdown-menu" style="width:400px; max-height: 600px; overflow-x: hidden;">
																		<div class="panel panel-success">
																			<div class="panel-heading">
																				<div class="row">
																					<div class="col-md-3">Sl.No</div>
																					<div class="col-md-3">Product Image</div>
																					<div class="col-md-3">Product Name</div>
																					<div class="col-md-3">Price in <?php echo CURRENCY; ?></div>
																				</div>
																			</div>
																			<div class="panel-body">
																				<div id="cart_product">
																				<!--<div class="row">
																					<div class="col-md-3">Sl.No</div>
																					<div class="col-md-3">Product Image</div>
																					<div class="col-md-3">Product Name</div>
																					<div class="col-md-3">Price in $.</div>
																				</div>-->
																				</div>
																			</div>
																			<div class="panel-footer"></div>
																		</div>
																	</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="mobile-menu-area" style="color:white"></div>
										</div>
									</div>
									<!-- End Mainmenu Area -->
								</header>
								<!-- End Header Area -->
								
								<!--<div class="body__overlay"></div>-->
								<!-- Start Offset Wrapper -->
								<div class="offset__wrapper">
									<!-- Start Search Popap -->
									<div class="search__area">
										<div class="container">
											<div class="row">
												<div class="col-md-12">
													<div class="search__inner">
														<form action="#" method="get">
															<input placeholder="Search here... " type="text">
															<button type="submit"></button>
														</form>
														<div class="search__close__btn">
															<span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End Search Popap -->
								
							
								<!-- jquery latest version -->
									<script src="js/vendor/jquery-3.2.1.min.js"></script>
									<!-- Bootstrap framework js -->
									<!-- All js plugins included in this file. -->
									<script src="js/plugins.js"></script>
									<script src="js/slick.min.js"></script>
									<script src="js/owl.carousel.min.js"></script>
									<!-- Waypoints.min.js. -->
									<script src="js/waypoints.min.js"></script>
									<!-- Main js file that contents all jQuery plugins activation. -->
									<script src="js/main.js"></script>


								</div>
							</div>



					<div class="container-fluid">
					
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-8">
								<div class="panel panel-default">
									<div class="panel-heading"></div>
									<div class="panel-body">
										<h1 style="color: black;">Thank You for placing your order! </h1>
										<hr/>
										<p style="color: black;font-size: 20px;margin-bottom: 10%;margin-inline: 28px;">Hello <?php echo "<b>".$_SESSION["name"]."</b>"; ?>,Your order has been processed 
										successfully and your ORDER ID is <b><?php echo $unique_id; ?></b>.<br/>
										You can continue your Shopping.<br/></p>
										<a href="index.php" class="btn btn-success btn-lg">Continue Shopping</a>
									</div>
									<div class="panel-footer"></div>
								</div>
							</div>
							<div class="col-md-2"></div>
						</div>
					</div>


					<footer>
						<div class="footer">
							<div class="Container">
								<div class="footer-row">
									<div class="footer-col">
										<h4>Company</h4>
										<ul>
											<li><a href="aboutpage.html">ABOUT US</a></li>
											<li><a href="contactus.php">CONTACT US</a></li>
											<li><a href="Feedback Form.html">FEEDBACK</a></li>
											<li><a href="product.php">ALL PRODUCT</a></li>
											<li><a href="FAQ.html">FAQ</a></li>
										</ul>
									</div>

									<div class="footer-col">
										<h4>Legal</h4>
										<ul>
											<li><a href="#">PRIVACY NOTICE</a></li>
										<li><a href="#">TERMS OF USE</a></li>
										<li><a href="#">COOKIE NOTICE</a></li>
										<li><a href="deliverypanel/deliverymanlogin.html">DELIVERY LOGIN</a></li>
										<li><a href="adminpanel/adminlogin.html">ADMIN LOGIN</a></li>
										</ul>
									</div>

									<div class="footer-col">
										<h4>Online shop</h4>
										<ul>
											<li><a href="product.php">FACE WASH</a></li>
											<li><a href="product.php">FACE CREAM</a></li>
											<li><a href="product.php">TONER</a></li>
											<li><a href="product.php">MOISTURIZER</a></li>
										</ul>
									</div>

									<div class="footer-col">
										<h4>Follow us</h4>
									<div class="social-link">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-instagram"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-linkedin"></i></a>
									</div>
									</div>
									


								</div>
							
							</div>
							<hr>
							<div class="footer-row2">
							<p><center>Copyright @2023 Face Heaven (M05 MCA)</center></p>
							

							</div>
						</div>

					</footer>
				</body>
				</html>

			<?php
		}
	}else{
		header("location:index.php");
	}
	


?>

















































