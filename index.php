<?php
require "config/constants.php";
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Face Heaven - Products</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style></style>

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
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>

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
                                     <a href="homepage.php"><img src="appbar/images/navlogo.png" alt="logo images"></a>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                                <nav class="main__menu__nav hidden-xs hidden-sm">
                                    <ul class="main__menu">
                                        <li class="drop"><a href="homepage.php" style="color:white">Home</a></li>
                                        <li class="drop"><a href="aboutpage.html" style="color:white">About us</a>
                                           
                                              
                                        </li>
                                        <li class="drop"><a href="index.php" style="color:white">Product</a>
                                           
                                        </li>
                                       
                                        <li class="drop"><a href="#" style="color:white">Pages</a>
                                            <ul class="dropdown">
                                                <li><a href="cart.php">Cart page</a></li>
                                                <li><a href="cart.php">checkout</a></li>
                                                <li><a href="contactus.html">contact</a></li>
                                                <li><a href="index.php">product</a></li>
                                                <li><a href="wishlist.php">wishlist</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>

                                <div class="mobile-menu clearfix visible-xs visible-sm" style="color:white">
                                    <nav id="mobile_dropdown" style="color: white; display: block;">
                                        <ul style="color:white">
                                            <li><a href="homepage.php" style="color:white">Home</a></li>
                                            <li><a href="blog.html" style="color:white">blog</a></li>
                                            <li><a href="#" style="color:white">pages</a>
                                                <ul>
                                                   
                                                    <li><a href="cart.php" style="color:white">Cart page</a></li>
                                                    <li><a href="cart.php" style="color:white">checkout</a></li>
                                                    <li><a href="contactus.html" style="color:white">contact</a></li>
                                                    <li><a href="index.php" style="color:white">product</a></li>
                                              
                                                    <li><a href="wishlist.html" style="color:white">wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contactus.php" style="color:white">contact</a></li>
                                        </ul>
                                    </nav>
                                </div>  
                            </div>
                            <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                                <div class="header__right">
                                    <div class="header__search search search__open">
                                        <a href="#" style="color:white"><i class="icon-magnifier icons" style="color:white"></i></a>
                                    </div>
									<div class="header__account">
                                        <a href="wishlist.php" style="color:white"><i class="icon-heart icons" style="color:white"></i></a>
                                    </div>
                                    <div class="header__account">
                                        <a href="login_new.html" style="color:white"><i class="icon-user icons" style="color:white"></i></a>
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
                                    <input placeholder="Search here... " type="text" id="search">
                                    <button type="submit" id="search_btn"></button>
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
			<script src="homepagejs/js/vendor/jquery-3.2.1.min.js"></script>
			<!-- Bootstrap framework js -->
			<!-- All js plugins included in this file. -->
			<script src="homepagejs/js/plugins.js"></script>
			<script src="homepagejs/js/slick.min.js"></script>
			<script src="homepagejs/js/owl.carousel.min.js"></script>
			<!-- Waypoints.min.js. -->
			<script src="homepagejs/js/waypoints.min.js"></script>
			<!-- Main js file that contents all jQuery plugins activation. -->
			<script src="homepagejs/js/main.js"></script>


		</div>
	</div>



	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
            <div class="col-md-2 col-xs-12">
				<div id="get_category" style="background-color: #a6bce0;">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				<!-- <div id="get_brand">
				</div> -->
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				<div id="get_brand" style="background-color: #a6bce0;">
				</div>
				<div class="nav nav-pills" style="margin-top: 15%; background: #a6bce0;">
					<li class="active" style="width: 100%"><a href="#"><h4>Sort By</h4></a></li>
					<li style="width: 100%; margin-bottom: 4%"><a href="#" class='selectBrand' bid="pricedsc">Price - High to low</a></li>
					<li style="width: 100%; margin-bottom: 4%"><a href="#" class='selectBrand' bid="priceasc">Price - Low to High</a></li>
					<li style="width: 100%; margin-bottom: 4%"><a href="#" class='selectBrand' bid="alasc">Alphabetical - A to Z</a></li>
					<li style="width: 100%; margin-bottom: 4%"><a href="#" class='selectBrand' bid="aldsc">Alphabetical - Z to A</a></li>
				</div> 
				
			</div>
            
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading" style="font-weight: bold;">Products</div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">Rs.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>
					<div class="panel-footer">&copy; <?php echo date("Y"); ?> Copyright @2023 Face Heaven (M05 MCA)</div>
				</div>
			</div>
			<div class="col-md-1"></div>
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
                            <li><a href="contactus.html">CONTACT US</a></li>
                            <li><a href="Feedback Form.html">FEEDBACK</a></li>
                            <li><a href="index.php">ALL PRODUCT</a></li>
                            <li><a href="FAQ.html">FAQ</a></li>
                        </ul>
                     </div>
    
                     <div class="footer-col">
                        <h4>Legal</h4>
                        <ul>
                            <li><a href="#">PRIVACY NOTICE</a></li>
                            <li><a href="#">ACCESSIBILITY</a></li>
                            <li><a href="#">COOKIE NOTICE</a></li>
                            <li><a href="deliverypanel/deliverymanlogin.html">DELIVERY LOGIN</a></li>
                            <li><a href="adminpanel/adminlogin.html">ADMIN LOGIN</a></li>
                        </ul>
                    </div>
    
                    <div class="footer-col">
                        <h4>Online shop</h4>
                        <ul>
                            <li><a href="index.php">FACE WASH</a></li>
                            <li><a href="index.php">FACE CREAM</a></li>
                            <li><a href="index.php">TONER</a></li>
                            <li><a href="index.php">MOISTURIZER</a></li>
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
















































