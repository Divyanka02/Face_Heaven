<?php
$link = new mysqli("localhost" , "root", "","faceheaven");
if($link ==false){
    die("ERROR : Could not connect1 ".$link->connection_error);

}
else{
    echo "<br> -".$link->host_info;

}
$errors = array();
        $email = mysqli_real_escape_string($link, $_POST['email']);
        $check_email = "SELECT * FROM register WHERE email='$email'";
        $run_sql = mysqli_query($link, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE register SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($link, $insert_code);
            if($run_query){
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: Face Heaven";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a passwrod reset otp to your email - $email";
                
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: code.html');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Face Heaven | Forgot-Password </title>
      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
      <link rel="apple-touch-icon" href="apple-touch-icon.png">
      
  
      <!-- All css files are included here. -->
      <!-- Bootstrap fremwork main css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Owl Carousel min css -->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <!-- This core.css file contents all plugings css file. -->
      <link rel="stylesheet" href="css/core.css">
      <!-- Theme shortcodes/elements style -->
      <link rel="stylesheet" href="css/shortcode/shortcodes.css">
      <!-- Theme main style -->
      <link rel="stylesheet" href="style.css">
      <!-- Responsive css -->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- User style -->
      <link rel="stylesheet" href="css/custom.css">
  
  
      <!-- Modernizr JS -->
      <script src="js/vendor/modernizr-3.5.0.min.js"></script>
   
</head>
<style>
    body{
        background-color: #01142c;
    }
        .section1{
        margin-top: 160px;
        margin-left: 180px;
        width: 70%;
        height: 53vh;
       background-color: rgb(166, 188, 224);
       display: flex;
    }
    .section1::before{
    content: " ";
   background-image: url(bg.jpg);
   background-position: center;
   background-size: 100%;
   background-repeat: no-repeat;
    position: absolute;
    top: 0px;
    left: 0px;
    height: 100%;
    width: 100%;
    z-index: -1;
    opacity: 0.3;

}
    .section1 .container1{
        width: 500px;
        height: 400px;
        
        background-image: url(logo.png);
        background-position: center;
        background-size: 100%;
        background-repeat: no-repeat;
       object-fit: cover;
        flex: 50%;
    }
    .section1 .container2{
        flex: 50%;
        padding: 50px;
      
    }
    .section1 .container2 h1{
        margin-top: 1px;
        text-align: left;
        font-size: 40px;
        font-weight: bolder;
    }
    
    input[type="email"]{
        border: 0;
        margin-right: 30px;
        margin-top: 30px;
        margin-bottom: 50px;
        padding: 10px;
        font-size: 18px;
        font-weight: 500;
    }
    .section1 .container2 .btn{

        margin-top: 20px;
        font-size: 16px;
        font-weight: 500;
        padding: 10px;
        background-color: rgb(255, 255, 255);
        color: black;
      
    }
    .section1 .container2 .btn:hover{
        background-color: rgb(0, 0, 0);
        color: white;
        border: 2;
    }
   

@media (max-width: 600px) {
    .section1{
        margin-left: 50px;
        width: 70%;
        height: 58vh;
    }
    .section1 .container1{
        width: 500px;
        height: 345px;
       
        flex: 0%;
    }
    .section1 .container2{
        flex: 100%;
        padding: 20px;
      
    }
    .section1 .container2 h1{
      
        font-size: 35px;
       margin-top: 0;
    }
    
    .section1 .container2 p{
       
      
        font-size: 15px;
        margin-bottom: 50px;
    }
    input[type="email"],
    input[type="password"]{
        
        margin-top: 35px;
        margin-right: 60px;
       
        font-size: 15px;
      
    }
  
  
}
</style>
<body>
      <!-- Body main wrapper start -->
      <nav>
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
                                             <a href="register.html"><img src="navlogo.png" alt="logo images" height="80vh"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                                        <nav class="main__menu__nav hidden-xs hidden-sm" >
                                            <ul class="main__menu" >
                                                <li class="drop"><a href="#" style="color:white">Home</a></li>
                                                <li class="drop" ><a href="#" style="color:white">About us</a>
                                                   
                                                      
                                                </li>
                                                <li class="drop"><a href="#" style="color:white">Product</a>
                                                   
                                                </li>
                                               
                                                <li class="drop"><a href="#" style="color:white">Pages</a>
                                                    <ul class="dropdown" style="color: black">
                                                        
                                                        <li><a href="#">Cart page</a></li>
                                                        <li><a href="#">checkout</a></li>
                                                        <li><a href="contactus.html">contact</a></li>
                                                        <li><a href="#">product</a></li>
                                                  
                                                        <li><a href="#">wishlist</a></li>
                                                    </ul>
                                                </li>
                                                <!--<li><a href="contactus.html" style="color:white">contact</a></li>-->
                                            </ul>
                                        </nav>
        
                                        <div class="mobile-menu clearfix visible-xs visible-sm" style="color:white">
                                            <nav id="mobile_dropdown"style="color:white" >
                                                <ul style="color:white">
                                                    <li><a href="demonavbar.html" style="color:white">Home</a></li>
                                                    
                                                    <li><a href="#" style="color:white">pages</a>
                                                        <ul>
                                                           
                                                            <li><a href="#" style="color:white">Cart page</a></li>
                                                            <li><a href="#" style="color:white">checkout</a></li>
                                                            <li><a href="contactus.html" style="color:white">contact</a></li>
                                                            <li><a href="#" style="color:white">product</a></li>
                                                      
                                                            <li><a href="#" style="color:white">wishlist</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="contactus.html" style="color:white">contact</a></li>
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
                                                <a href="#" style="color:white"><i class="icon-user icons" style="color:white"></i></a>
                                            </div>
                                            <div class="htc__shopping__cart">
                                                <a class="cart__menu" href="cart.php" style="color:white"><i class="icon-handbag icons" style="color:white"></i></a>
                                               
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
                                        <form action="#" method="get">
                                            <input placeholder="Search here... " type="text">
                                            <button type="submit"></button>
                                        </form>
                                        
                                        <div class="search__close__btn">
                                            <span class="search__close__btn_icon"></i><i class="zmdi zmdi-close"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Search Popap -->
                </nav>
      
        
              <!-- jquery latest version -->
        <script src="js/vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap framework js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- All js plugins included in this file. -->
        <script src="js/plugins.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <!-- Waypoints.min.js. -->
        <script src="js/waypoints.min.js"></script>
        <!-- Main js file that contents all jQuery plugins activation. -->
        <script src="js/main.js"></script>
    
    

        


  
      <div class="section1" id="aboutus">
        <div class="container1">

        </div>
        <div class="container2">
            <form action="forgotpassword.html" method="post">
                <h1>FORGOT PASSWORD</h1>
                <input type="email" name="email" placeholder="Enter your email" required>
                <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                
                <br>
                <input type="submit" value="CONTINUE" class="btn">
                
            </form>
        </div>
    </div>
     
</body>
</html>