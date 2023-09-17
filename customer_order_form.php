<?php
require "config/constants.php";
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}

$email=$_SESSION['session_email'];
$link = new mysqli("localhost" , "root", "","faceheaven");
if($link ==false){
    die("ERROR : Could not connect1 ".$link->connection_error);

}
?>

<html>
    <head>
        <title>Face Heaven - Customer Details</title>
       
            <style>   
                input[name="email"] {
                   background-color: lightgreen;
                    border: 1px solid black;
                }
                input[type="text"] {
                 border: 1px solid black;
                 border-radius: 10px;
                    padding: 10px;
                    margin: 10px;
                }

            </style>


<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>

		<link rel="shortcut icon" type="image/x-icon" href="appbar/images/favicon.ico">


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



    <style>
   
   a{
    color: white;
    } 
    .body-section{
        margin: 0;
        padding: 0;
       /* font-family: 'Poppins', sans-serif;*/
       font-family: 'Georgia';
       background-color:rgb(166, 188, 224);
        align-items: center;
        justify-content: center;
        margin: 5% 15%;
    }

    *{
        box-sizing: border-box;
    }

    .container2{
        width: 100%;
        height: 120%;
        padding: 40px 60px;
    }
    .h3{
        font-family: 'Georgia';
        color:white;
        font-size:1.5em;
    }
   

    .About img{
        border-radius: 50%;
        border: 2px solid #fff;
        height: 100px;
        width: 100px;
        margin-left: 30px;
    }

    .About{
        margin-top: 30px;
        margin-left: 30px;
        flex: 50%;
        color: #fff;
        display: table;
        padding: 40px 40px;
        font-size: 20px;
        background-color:  #01142c;
        /*background-color: #0d1425;*/
        border-radius: 20px;
    }

    .About .h1{
        text-transform: uppercase;
        letter-spacing: 3px;
        font-size: 50px;
        font-weight: 500;
        font-family: 'Georgia';
        color:white;
    }

    .About .ul .li{
        list-style: none;
        color:black;
    }

    .About .ul{
        margin-top: 20px;
    }

    .button{
        color:black;
        padding: 10px 50px;
        font-size: 0.9em;
        position: relative;
        float: right;
    }

    .button:hover{
        color: white;
       
        background: #2196f3;
        box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 80px #2196f3;
    }

    .input{
        color: black;
    }
    @media screen and (max-width: 600px) {
        .container2{
            display: table;
            padding: 40px 0;
        }

        

        .About{
           
            width:100%;
            margin-top: 20px;
            margin-left:0;
        }

        .About .h1{
            font-size: 2em;
            font-family: 'Georgia';
            
        }
    }
</style>



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
                                                   
                                                    <li><a href="cart.html" style="color:white">Cart page</a></li>
                                                    <li><a href="checkout.html" style="color:white">checkout</a></li>
                                                    <li><a href="contact.html" style="color:white">contact</a></li>
                                                    <li><a href="product-grid.html" style="color:white">product</a></li>
                                              
                                                    <li><a href="wishlist.php" style="color:white">wishlist</a></li>
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
                                        <a <?php if(isset($_SESSION["uid"])){ echo "href='pro.php'"; }else{ echo "href='login_new.html'";} ?> style="color:white"><i class="icon-user icons" style="color:white"></i></a>
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
<script src="homepagejs/js/bootstrap.min.js"></script>
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

                <!-- <form>
                    <label for="C_name">Customer Name:</label>
                    <input type="text"  name="Customer Name" placeholder="Enter Name"><hr>
                    <label for="C_PhoneNo.">Customer Phone No.:</label>
                    <input type="text" name="Customer Phone No."placeholder="Enter Phone No."><hr>
                    <label for="C_Email">Customer E-mail:</label>
                    <input type="text" name="email" placeholder="Enter Email"><hr>
                    <label for="C_Address">Customer Address:</label>
                    <input type="text"name="Customer Address"placeholder="Enter Address"><hr>
                    <label for="C_BillAmount">Customer Bill Amount:</label>
                    <input type="text" name="C_Bill_Amount"><hr>
                    <label for="O_Date">Order_Date:</label>
                    <input type="text"name="Order_Date"><hr>
                    <input type="button" value="Check Out ">
                </form> -->

                <div class="box" style="margin-top: -7%;">

<div class="body-section" style="border-radius: 25px;background: #a6bce0;">
<form method = "GET" action = payment.php>

    <div class="container2">
       
        <div class="Customer Order Details">
            
            <ul>
                <h1 class="h1">Customer Order Details</h1>
               <!-- <button type="button" class="button" onclick="window.location.href='change.php'">(Submit)</button> -->
              
            </ul>
            <hr>
            <ul>
                <h3 class="h3">Name:</h3>

                          
                <li><input class="input" type="text" name="name" pattern="[a-zA-Z .]{3,25}" value=
                <?php 
                        echo$_SESSION['name'];
                ?>
                >
            </li>
            </ul>
                    
                            
            <hr>
            <ul>
                <h3 class="h3">Email:</h3>
                <li>
                    <?php
                        //session_start();
                        echo$_SESSION['session_email'];
                    ?>
                </li>
            </ul>
            <hr>
            <ul>
                <h3 class="h3">Phone No:</h3>
                <li><input class="input" type="number" style="border: 1px solid black;border-radius: 10px;padding: 10px;margin: 10px;" name="phonenumber" id="phonenumber" onkeypress="if(this.value.length==10) return false" value=
                <?php
                        $sql = "SELECT phonenumber FROM register WHERE email='$email'";
                        $result = $link->query($sql);
                        
                        if($result->num_rows > 0)
                        {
                            while($row = $result->fetch_assoc())
                            {
                                echo $row["phonenumber"];
                            }
                        }
                ?>
                >
            </li>
            </ul>
            <hr>
            <ul>
                <h3 class="h3">Address:</h3>
                <li><input class="input" type="text" name="address" value=
                <?php
                        $sql = "SELECT address FROM register WHERE email='$email'";
                        $result = $link->query($sql);
                        if($result->num_rows > 0)
                        {
                            while($row = $result->fetch_assoc())
                            {
                                echo $row["address"];
                            }
                        }
                ?>
                >
            </li>
            </ul>
            <!-- <hr>
            <ul>
                <h3 class="h3">City:</h3>
                <li><input class="input" type="text" name="city" value=
                <?php
                        $sql = "SELECT city FROM register WHERE email='$email'";
                        $result = $link->query($sql);
                        if($result->num_rows > 0)
                        {
                            while($row = $result->fetch_assoc())
                            {
                                echo $row["city"];
                            }
                        }
                ?>
                >
            </li>
            </ul>
            <hr>
            <ul>
                <h3 class="h3">State:</h3>
                <li><input class="input" type="text" name="state" value=
                <?php
                        $sql = "SELECT state FROM register WHERE email='$email'";
                        $result = $link->query($sql);
                        if($result->num_rows > 0)
                        {
                            while($row = $result->fetch_assoc())
                            {
                                echo $row["state"];
                            }
                        }
                ?>
                >
            </li>
            </ul> -->
            <hr>
            <ul>
                <h3 class="h3">Order Total:</h3>
                <li>
                <?php
                    echo '
                        <input type="hidden" name="total" id="total" value="'.$_GET['total'].'"/>
                        <input type="hidden" name="custom" value="'.$_SESSION["uid"].'"/>'
                        
                    ;
                ?>
                ₹<?php 
                        echo $_GET['total'];
                ?>
            </li>
            </ul>
            <hr>
            
            <input class="button" type = "submit" style="background: #01142c;color: white;border-radius: 20px;"  onsubmit="return formValidation()">
        </div>
    </div>
    </form>

</div>
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

                