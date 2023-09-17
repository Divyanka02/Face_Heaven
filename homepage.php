<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
   <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="homepagejs/css/bootstrap.min.css">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="homepagejs/css/owl.carousel.min.css">
    <link rel="stylesheet" href="homepagejs/css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="homepagejs/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="homepagejs/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="homepagejs/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="homepagejs/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="homepagejs/css/custom.css">


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
   
  
<style>
  
    *{
        padding:0;
        margin:0;
        font-family:monospace;
        box-sizing:border-box;
    }
/*navbar*/
a{
        color: white;
    }
/*navbar end*/

/*image section*/
    .bigimage{
      width:100%;
      height:50vh;
      position:relative;
      background-image: url("appbar/images/images (51).jpeg");
      background-size: cover;
      
    }
    .overylay{
      width:100%;
      height:100%;
      font-size:20px;
      color:black;
      display:flex;
      justify-content:center;
      flex-direction:column;
      background-color: rgba(0,0,0,0.5);
      text-align: center;
    }
    
    .t{
      padding:50px;
      padding-left:42%;
      font-size: 40px;
      color: black;
      margin-left: 10px;
    

    }
    .t1{
      padding-left:42%;
      color:black;
      font-size: 20px;
      margin-left: 10px;


    }
      .heading
    {
      text-align:center;
      padding: 0.5rem 0;
      padding-bottom: 0.5rem;
      font-size:3rem;
      color:var(--black);
      font-family: Georgia, 'Times New Roman', Times, serif;
      
    }
    .heading span{
      background:#01142c;
      color: white;
      display:inline-block;
      padding:.5rem 3rem;
      clip-path: polygon(100% 0, 93% 50%, 100% 99%, 0% 100%, 7% 50%,0% 0%);
      font-family:Georgia, 'Times New Roman', Times, serif

    }
/*image section end*/


/*catagories section*/
    .btn{
      border: .2rem solid rgb(202, 189, 189);
      margin-top:1rem;
      display:inline-block;
      padding:.5rem 2rem;
      font-size:1.4rem;
      text-align: center;
      border-radius:.3rem;
      color:black;
      cursor:pointer;
      font-family:'Times New Roman', Times, serif;
      
    }
    .btn:hover{
      background:green;
      color:white;
    }
    
    .box img{
      width:46.5vh;
      height:30vh;
      padding-left: 20px;
      padding-right: 20px;
      padding-top: 20px;
      padding-bottom: 20px;
    }
    .catogries .box-container{
      
       padding-left: 70px;
       padding-right: 50px;
       display:grid;
       grid-template-columns: repeat(auto-fit, minmax(10rem, 1fr));
       gap:1.5rem;
       
    }
    .catogries .box-container .box{

      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
     
      text-align:center;
      background:rgb(224, 216, 216);
      outline:var(--outline);
      outline-offset:-1rem;
      box-shadow: var(--box shadow);
     
    }
    .catogries .box-container .box:hover{
      background-color: rgb(165, 159, 159);
    }
    
    .catogries .box-container .box h3{
       font-size:2rem;
       line-height: 1.7;
       color:#01142c;
       padding-top:-5rem;

    }
    .catogries .box-container .box p{
       font-size:1.5rem;
       line-height: 1.7;
       color:#01142c;
       padding:1rem o;
      }
      .catogries .box-container .box .btn{
     
        text-align:center;
        text-decoration: none;
        margin-bottom: 50px;
        
      }
/*catogries end*/

/*slider section*/

    .swiper-slide img{
      width:100%;
      height:100%;
    }
    .swiper{
      width:100%;
      height:100vh;
    }
    .box .swiper .swiper-button-prev, .swiper .swiper-button-next{
      color:#01142c;
      width:5%;
    }
    .swiper .swiper-pagonation-bullet-active{
      background:grey;
      margin-top: 20%;
    }
 /*slider section end*/

/* simplified start*/
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}


.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}
.imghover:hover{
  transform: scale(0.8);
}

.head
    {
      text-align:center;
      padding: 0.5rem 0;
      padding-bottom: 0.5rem;
      font-size:3rem;
      color:var(--black);
      font-family: Georgia, 'Times New Roman', Times, serif;
      
    }
    .head span{
      background:#01142c;
      color: white;
      display:inline-block;
      padding:.5rem 3rem;
      clip-path: polygon(100% 0, 93% 50%, 100% 99%, 0% 100%, 7% 50%,0% 0%);
      font-family: Georgia, 'Times New Roman', Times, serif;
    }
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
   
   
  }
}
/*simplidied end*/
/*product start*/
.column{
  float: left;
  width: 33.3%;
  background: #fff;
}
.photo{
    padding-left: 100px;
    margin: 8px;
    color:white;
}
.photo img{
  border-radius: 50%;
  padding-left:4px;
}

/*product end*/
/*footer start*/


.Container{
    max-width:1170px;
    margin:auto;
}
.footer{
    background:#01142c;
    padding: 70px 0;

}
.footer-row{
    display:flex;
    flex-wrap: wrap;
    padding-bottom: 10px;
}
.footer-col{
    width: 25%;
    padding: 0 15px;
}
.footer-col h4{
    font-size: 18px;
    color:#fff;
    margin-bottom: 35px;
    font-weight: 500;
    position: relative;
}
.footer-col h4:before{
    content: "";
    position: absolute;
    left: 0;
    bottom: -10px;
    background: #ffc500;
    height:2px;
    box-sizing: border-box;
    width:50px;
}
.footer-col ul{
    list-style: none;
}
.footer-col ul li a{
    font-size:16px;
    text-decoration: none;
    color:#bbbbbb;
    display:block;
    transition:all .3s ease;
}
.footer-col ul li a:hover{
    color:#fff;
    padding-left:6px;

}
.footer-col .social-link a{
    display:inline-block;
    height:40px;
    width:40px;
    background: rgba(255,255,255,.2);
    margin:0 10px 10 0px;
    text-align: center;
    line-height:40px;
    border-radius:50%;
    color:#fff;
    transition: all .5s ease;

}
.footer-col .social-link a:hover{
    color:#24262b;
    background:#fff;

}
.footer-row2{
    color:#fff;
    padding-top: 20px;
    padding-bottom: -2px;
    font-family: Georgia, 'Times New Roman', Times, serif;
}
@media(max-width:767px){
    .footer-col{
        width:50%;
        margin-bottom:30px;

    }
    
}
@media(max-width:567px){
    .footer-col{
        width:50%;
    }
    
}


/*footer end*/

/*media */
    @media only screen and (max-width:600px){

     /*image start*/
    
    .t{
      padding:50px;
      padding-left:20%;
      font-size: 25px;
      color: black;
      margin-left: 10px;
    

    }
    .t1{
      padding-left:20%;
      color:black;
      font-size: 15px;
      margin-left: 10px;
      padding-top:-5px;


    }
    /*imageend*/
    
/*catagories start*/
.btn{
  font-family:'Times New Roman', Times, serif;
}
.box img{
      width: 25vh;
      height:30vh;
      padding-left: 20px;
      padding-right: 20px;
      padding-top: 20px;
      padding-bottom: 20px;
      
    }
    
    .catogries .box-container{
      
       padding-left: 70px;
       padding-right: 50px;
       display:grid;
       grid-template-columns: repeat(auto-fit, minmax(10rem, 1fr));
       gap:1.5rem;
       
    }
    .catogries .box-container .box{

      text-align:center;
      background:rgb(224, 216, 216);
      outline:var(--outline);
      outline-offset:-1rem;
      box-shadow: var(--box shadow);
    
     
    }
    .catogries .box-container .box:hover{
      background-color: rgb(165, 159, 159);
    }
    
    .catogries .box-container .box h3{
       font-size:15px;
       line-height: 1.7;
       color:#01142c;
       padding-top:1rem;

    }
    .catogries .box-container .box p{
       font-size:1rem;
       line-height: 1.7;
       color:#01142c;
       padding:1rem o;

      
    }
/*catagories end*/
/*slider section*/
.swiper-slide img{
      width:100%;
      height:100%;
    }
    .swiper{
      width:85%;
      height:70vh;
    }
    .box .swiper .swiper-button-prev, .swiper .swiper-button-next{
      color:#01142c;
      width:10%;
    }
    .swiper .swiper-pagonation-bullet-active{
      background:grey;
    }
/*slider end*/

/*product images*/
.column{
  float: left;
  width: 33.3%;
  background: #fff;
}
.photo{
    padding-left:15px;
    padding-right: 20px;
    margin: 8px;
    color:white;
}
.photo img{
  border-radius: 50%;
  padding-left:20px;
}

/*product img end*/
    }
    
</style>
</head>
<body>
<!--navbarsection starts-->
   
<div class="wrapper" >
  <!-- Start Header Style -->
  <header id="htc__header" class="htc__header__area header--one"style="background-color: #01142c;color:white">
      <!-- Start Mainmenu Area -->
      <div id="sticky-header-with-topbar" class="mainmenu__wrap">
          <div class="container">
              <div class="row">
                  <div class="menumenu__container clearfix">
                      <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5"> 
                          <div class="logo">
                               <a href="homepage.php"><img src="appbar/images/navlogo.png" alt="logo images" height="80vh"></a>
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
                                          <li><a href="cart.php">Checkout</a></li>
                                          <li><a href="contactus.html">Contact</a></li>
                                          <li><a href="index.php">Product</a></li>
                                           <li><a href="wishlist.html">Wishlist</a></li>
                                      </ul>
                                  </li>
                                 
                          </nav>

                          <div class="mobile-menu clearfix visible-xs visible-sm">
                              <nav id="mobile_dropdown">
                                  <ul>
                                      <li><a href="homepage.php" style="color:white">Home</a></li>
                                     
                                      <li><a href="#" style="color:white">Pages</a>
                                          <ul>
                                             
                                              <li><a href="cart.php" style="color:white">Cart page</a></li>
                                              <li><a href="cart.php" style="color:white">Checkout</a></li>
                                              <li><a href="contactus.html" style="color:white">Contact</a></li>
                                              <li><a href="index.php" style="color:white">Product</a></li>
                                        
                                              <li><a href="wishlist.html" style="color:white">Wishlist</a></li>
                                          </ul>
                                      </li>
                                    
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
                              <div class="htc__shopping__cart">
                                  <a class="cart__menu" href="cart.php" style="color:white"><i class="icon-handbag icons" style="color:white"></i></a>
                                 
                              </div>
                              
                          </div>
                      </div>
                  </div>
              </div>
              <div class="mobile-menu-area"></div>
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
                          <form autocomplete="on" action="profile.php" method="post">
                              <input type="text" id="search" placeholder="search catogories">
                              
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
      

  <!-- End Offset Wrapper -->
   <!-- Start Slider Area -->
   <div class="slider__container slider--one bg__cat--3" style="background-color: rgb(220, 243, 243);color:white">
      <div class="slide__container slider__activation__wrap owl-carousel">
          <!-- Start Single Slide -->
          <div class="single__slide animation__style01 slider__fixed--height">
              <div class="container">
                  <div class="row align-items__center">
                      <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                          <div class="slide">
                              <div class="slider__inner">
                                  <h2>FACE HEAVEN</h2>
                                  <h1>Became your better</h1>
                                  <div class="cr__btn">
                                      <a href="quizPage2.html" target="_blank">Know your skin type</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                          <div class="slide__thumb">
                              <img src="appbar/images/img1.jpg" alt="slider images">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- End Single Slide -->
          <!-- Start Single Slide -->
          <div class="single__slide animation__style01 slider__fixed--height">
              <div class="container">
                  <div class="row align-items__center">
                      <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                          <div class="slide">
                              <div class="slider__inner">
                                  <h2>FACE HEAVEN</h2>
                                  <h1>FEEL CONFIDANT</h1>
                                  <div class="cr__btn">
                                      <a href="index.php">Shop Now</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                          <div class="slide__thumb">
                              <img src="appbar/images/img1.jpg" alt="slider images">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- End Single Slide -->
      </div>
  </div>
  <!-- Start Slider Area -->
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
  
<!--navbar complete-->


<!--imagesection starts-->
    <section class="image">
      <div class="bigimage">
        <div class="overlay">
          <h1 class="t" style="font-family:Georgia, 'Times New Roman', Times, serif;">Make yourself more beautiful and confident</h1>
          <p class="t1" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Filters are great but, great skin is better.
            Choose product according to your skin and make it glowing. Fall in love with taking care of yourself.
          </p>
        </div>

      </div>
    </section>
<!--image section close-->

<!--catogries starts-->
 <section class="catogries" id="categories">
  <h1 class="heading"> Our<span>Categories</span> </h1>
  <div class="box-container">
    <div class="box">
    <img src="appbar/images/facecream.png" >
    <h3 style="font-family:Georgia, 'Times New Roman', Times, serif">Face Cream</h3>
  

    <a  href="index.php" class="btn">Shop Now</a><center></center>
  </div>

  <div class="box">
    <img src="appbar/images/facewash.png">
    <h3 style="font-family: Georgia, 'Times New Roman', Times, serif;">Face Wash</h3>
    

    <a href="index.php" class="btn">Shop Now</a><center></center>
    
  </div>

  <div class="box">
    <img src="appbar/images/toner.png">
    <h3 style="font-family:Georgia, 'Times New Roman', Times, serif">Toner</h3>
   

    <a href="index.php" class="btn">Shop Now</a><center></center>
    
  </div>

  <div class="box">
    <img src="appbar/images/moisturiser.png">
    <h3 style="font-family:Georgia, 'Times New Roman', Times, serif;">Moisturizer</h3>
  
    <a href="index.php" class="btn">Shop Now</a><center></center>
  </div>

  </div>

</section>
<!--catogries complete-->

<!--slider section-->
<section class="slider">
  <div class="box">
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img src="appbar/images/images (63).jpeg" alt="" ></div>
        <div class="swiper-slide"><img src="appbar/images/images.jpg" alt=""></div>
        <div class="swiper-slide"><img src="appbar/images/images (62).jpeg" alt=""></div>
        
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>
    
      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    
      
    </div>

  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
const swiper = new Swiper('.swiper', {
  autoplay:{
    delay:2000,
    disableOnInteration:false,
  },
  // Optional parameters
  
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable:true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});
</script>
<!--slider end-->

<!--simplified section-->
<section class="simplified">
<h2 class="head">Skincare <span>Simplified</span></h2>
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="appbar/images/images (46).jpeg" alt="Jane" style="width:100%; height:44vh" class="imghover">
        <div class="container">
          <p class="title" style="font-family: Georgia, 'Times New Roman', Times, serif; color:#01142c; font-size: 20px;">Natural and purely healthy for everyone</p>
          <p><li style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Enviroment Friendly
             <li style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Biodegradable Packaging</li>
             <li style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Turly Sustainable</li>
            </p>
          
        </div>
      </div>
    </div>
    
  
    <div class="column">
      <div class="card">
        <img src="appbar/images/images (60).jpeg" alt="Mike" style="width:100%; height:44vh" class="imghover">
        <div class="container">
          <p class="title" style="font-family:Georgia, 'Times New Roman', Times, serif; color:#01142c; font-size: 20px;">Are you washing your face the right way</p>
          <p><li style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Skin-Friendly</li>
             <li style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" >Healthier For You</li>
             <li style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Zero Side-effect</li>
            </p>
         
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <img src="appbar/images/images (59).jpeg" alt="John" style="width:100%; height:44vh" class="imghover">
        <div class="container">
          <p class="title" style="font-family:Georgia, 'Times New Roman', Times, serif; color:#01142c; font-size: 20px;">The Importance of moisturizing</p>
          <p><li style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Increase Self Confidence</li>
             <li style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">Gain Skin Radiance</li>
             <li style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Prevent premature aging</li>
            </p>
          
        </div>
      </div>
    </div>
  </div>
 </section>

<!--simlified section end -->
<!--our product start-->
<section class="products">
<h2 class="head">Our<span>Products</span></h2>
<div class="row">
  <div class="column">
    <div class="photo">
      <img src="appbar/images/nature.jpg" alt="Jane" style="width:50%; height:30vh">
    </div>
   </div>
 <div class="column">
    <div class="photo">
      <img src="appbar/images/clean.jpg" alt="Jane" style="width:50%; height:30vh">
    </div>
  </div>
  <div class="column">
    <div class="photo">
        <img src="appbar/images/ecof.png" alt="Jane" style="width:50%; height:30vh">
    </div>
  </div>
  </div>
</section>
<!--our product end-->
<!--footer section-->
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
  
<!--footer sectoon end-->

</body>

</html>
	