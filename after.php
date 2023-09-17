<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>After Deactivation</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar example</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

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
<style>
   
    .body-section{
        margin: 0;
        padding: 0;
       /* font-family: 'Poppins', sans-serif;*/
       font-family: 'Georgia';
       background-color:rgb(166, 188, 224);
        align-items: center;
        justify-content: center;
        box-sizing: border-box;
    }

    *{
        box-sizing: border-box;
    }

    .container2{
        display: flex;
        width: 100%;
        height: 100%;
        padding: 40px 60px;
    }

    .About{
        margin:25vh;
        margin-top:15vh;
        flex: 50%;
        color: #fff;
        display: table;
        padding: 40px 40px;
        font-size: 20px;
        background-color:  #01142c;
        /*background-color: #0d1425;*/
        border-radius: 20px;
    }
    @media screen and (max-width: 600px) {
        .container2{
            
            display: table;
           height:87vh;
        }
        .About{
            width: 100%;
            margin: 0;
            margin-top: 20vh;
        }
    }
    h2{
        margin:10vh;
        margin-left: 20%;
        color: white;
        font-family: 'Georgia';
    }

    a{
        color: white;
    }
</style>
<body>

 <!-- Body main wrapper start -->
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
                                <nav class="main__menu__nav hidden-xs hidden-sm" >
                                    <ul class="main__menu" >
                                        <li class="drop"><a href="homepage.php" style="color:white">Home</a></li>
                                        <li class="drop" ><a href="aboutpage.html" style="color:white">About us</a>
                                           
                                              
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
                                    <nav id="mobile_dropdown"style="color:white" >
                                        <ul style="color:white">
                                            <li><a href="homepage.html" style="color:white">Home</a></li>
                                           
                                            <li><a href="#" style="color:white">pages</a>
                                                <ul>
                                                   
                                                    <li><a href="cart.php" style="color:white">Cart page</a></li>
                                                    <li><a href="cart.php" style="color:white">checkout</a></li>
                                                    <li><a href="contactus.html" style="color:white">contact</a></li>
                                                    <li><a href="index.php" style="color:white">product</a></li>
                                              
                                                    <li><a href="wishlist.php" style="color:white">wishlist</a></li>
                                                </ul>
                                            </li>
                                           
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
                                        <a href="login.html" style="color:white"><i class="icon-user icons" style="color:white"></i></a>
                                    </div>
                                    <div class="htc__shopping__cart">
                                        <a class="cart__menu" href="#" style="color:white"><i class="icon-handbag icons" style="color:white"></i></a>
                                       
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
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="index.php" method="get">
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







    <div class="body-section">
    <div class="container2">
        <div class="About">
                <h2>
                    Account deleted successfully...!
                </h2> 
        </div>
    </div>
</div>
</body>
</html>


