<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Profile</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
 

   

</head>
<style>
   
   a{
    color: white;
    }    
    
    
.box{
height: 180vh;
}


    .body-section{
        margin: 0;
        padding: 0;
       /* font-family: 'Poppins', sans-serif;*/
       font-family: 'Georgia';
       background-color:rgb(166, 188, 224);
        align-items: center;
        justify-content: center;
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

    .h3{
        font-size: 1.5em;
        font-family: 'Georgia';
        color:white;
    }
    .About .ul .li{
        list-style: none;
    }

    .About .ul{
        margin-top: 20px;
    }

    .button{
        color:black;
        padding: 10px 50px;
        font-size: 0.9em;
    }

    .button:hover{
        color: white;
       
        background: #2196f3;
        box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 80px #2196f3;
    }

    @media screen and (max-width: 1068px) {
        .container2
{
            display: table;
        }

        

        .About{
            width: 100%;
            margin: 0;
            margin-top: 20px;
        }

        .About .h1{
            font-size: 2em;
          
            
        }
    }
</style>
<body>


<?php

        ob_start();

        $link = new mysqli("localhost" , "root", "","faceheaven");
        if($link ==false){
            die("ERROR : Could not connect1 ".$link->connection_error);

        }
        session_start();
      //  echo "WELCOME ".$_SESSION['session_email'];
      $email=$_SESSION['session_email'];
        $sql = "SELECT * FROM register WHERE email='$email'";
        //'$_POST[email]'
       
        $numrow=mysqli_num_rows( $link->query($sql));
        if($numrow==1){
            //echo "<br>valid user";
       //     session_start();
        $_SESSION['session_email']=$email;
        //$_POST['email'];
       /* {
           header('location:editProfile.php');
            exit();
        }*/
        }
        else{
           
        }

    
    ?>

<nav>

 <!-- Body main wrapper start -->
 <div class="wrapper" style="background-color: #01142c;color:white">
    <!-- Start Header Style -->
    <header id="htc__header" class="htc__header__area header--one">
        <!-- Start Mainmenu Area -->
        <div id="sticky-header-with-topbar" class="mainmenu__wrap">
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
                                        <li><a href="homepage.php" style="color:white">Home</a></li>
                                       
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
                                    <a href="pro.php" style="color:white"><i class="icon-user icons" style="color:white"></i></a>
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
                                <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
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

    <div class="box">

<div class="body-section">

<div class="container2">
       
       <div class="About">
       <img src="appbar/images/p.jpg" alt="">
           <ul class="ul">
           
               <!--
               <a class = "pic" href = "#">Add pic</a>
               <input type="file" onchange="readURL(this)" accept="Image/*">
               -->
              
       <h1 class="h1">Your Profile</h1>
               <button type="button" class="button" onclick="window.location.href='editProfile.php'">(Edit Profile)</button>
           </ul>
           <hr>
           <ul class="ul">
               <h3 class="h3">Name:</h3>
               <li class="li">
                   <?php
                       $sql = "SELECT name FROM register WHERE email='$email'";
                       $result = $link->query($sql);
                       if($result->num_rows > 0)
                       {
                           while($row = $result->fetch_assoc())
                           {
                               echo $row["name"];
                           }
                       }
                   ?>
               </li>
           </ul>
           <hr>
           <ul class="ul">
               <h3 class="h3">Email:</h3>
               <li class="li">
               <?php
                       $sql = "SELECT email FROM register WHERE email='$email'";
                       $result = $link->query($sql);
                       if($result->num_rows > 0)
                       {
                           while($row = $result->fetch_assoc())
                           {
                               echo $row["email"];
                           }
                       }
                   ?>
               </li>
           </ul>
           <hr>
           <ul class="ul">
               <h3 class="h3">Phone No:</h3>
               <li class="li">
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
               </li>
           </ul>
           <hr>
           <ul class="ul">
               <h3 class="h3">Address:</h3>
               <li class="li">
               <?php
                       $sql = "SELECT address,pincode FROM register WHERE email='$email'";
                       $result = $link->query($sql);
                       if($result->num_rows > 0)
                       {
                           while($row = $result->fetch_assoc())
                           {
                               echo $row["address"];
                           }
                       }
                   ?>
               </li>
           </ul>
           <hr>
           <ul class="ul">
               <h3 class="h3">City:</h3>
               <li class="li">
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
               </li>
           </ul>
           <hr>
           <ul class="ul">
               <h3 class="h3">State:</h3>
               <li class="li">
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
               </li>
           </ul>
           <hr>
           <ul class="ul">
               <h3 class="h3">Pin Code:</h3>
               <li class="li">
                <?php
                       $sql = "SELECT pincode FROM register WHERE email='$email'";
                       $result = $link->query($sql);
                       if($result->num_rows > 0)
                       {
                           while($row = $result->fetch_assoc())
                           {
                               echo $row["pincode"];
                           }
                       }
                   ?>
               </li>
           </ul>
           <hr>
           <ul class="ul">
               <h3 class="h3">Gender:</h3>
               <li class="li">
               <?php
                    $sql = "SELECT gender FROM register WHERE email='$email'";
                    $result = $link->query($sql);
                    if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {
                            echo $row["gender"];
                        }
                    }
                ?>
               </li>
           </ul>
       </div>
   </div>

</div>
</div>
    
<?php
    $link->close();
    ?>
</body>
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
                    <li><a href="#">TERMS OF USE</a></li>
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
</html>