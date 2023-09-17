<?php
    session_start();
    ob_start();

    include_once("db.php");

    // $sql = "SELECT * FROM customer_order WHERE customeremail='divyankajaiswalz2002@gmail.com'";

    // $numrow=mysqli_num_rows( $link->query($sql));
    // if($numrow==1){
    //     session_start();
    //     $_SESSION['session_customeremail']='divyankajaiswalz2002@gmail.com';
    // }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <title>Payment</title>
 
    
</head>
<style>
   
    body{
        margin: 0;
        padding: 0;
       /* font-family: 'Poppins', sans-serif;*/
       font-family: 'Georgia';
       background-color:#01cc65;
        align-items: center;
        justify-content: center;
    }
    .box{
        height:100vh;
    }

    *{
        box-sizing: border-box;
    }

    .container{
        display: flex;
        width: 100%;
        height: 100%;
        padding: 40px 60px;
    }

    .Inner{
       margin:50px;
       height: 60vh;
        flex: 50%;
        color:#01cc65;
        padding: 30px 30px;
        font-size: 20px;
        background-color: white;
        /*background-color: #0d1425;*/
       
    }

    label{
        margin:20px;
        
    }

    input{
        margin:20px;
       
    }
    #cod{
        accent-color: #01cc65;
    }
    #op{
        accent-color: #01cc65;
    }
    .Inner h1{
        text-transform: uppercase;
        letter-spacing: 3px;
        font-size: 2em;
        font-weight: 500;
    }

    hr{
        background-color:#01cc65;
        padding:1px;
    }

    @media screen and (max-width: 1068px) {
        .Inner{
            width: 100%;
            margin: 0;
            margin-top: 20px;
            height: 80vh;
        }
        .Inner h1{
            font-size: 1.5em;   
        }
    }

    .btn{
        padding: 10px 60px;
        background:#01cc65;
        color: white;
        border: 0;
        outline: none;
        cursor: pointer;
        font-size: 22px;
       /* font-width: 500;*/
        border-radius: 30px;

    }

    .btn:hover{
        background:#0a7e44;
        box-shadow:0 5px 5px rgba(0,0,0,0.2);
    }
    .popup{
        width:400px;
        background: #01773c;
        border-radius: 6px;
        position: absolute;
        top: 0;
        left: 50%;
        transform: translate(-50%,-50%) scale(0.1);
        text-align:center;
        padding: 0 30px 30px;
        color: #333;
        visibility: hidden;
        transition: transform 0.4s,top 0.4s;
    }

    .open-popup{
        visibility: visible;
        top: 50%;
        transform: translate(-50%,-50%) scale(1);
    }


    .popup .t{
        width: 100px;
        margin-top: -10%;
        border-radius: 50%;
        box-shadow:0 5px 5px rgba(0,0,0,0.2);
    }

    .popup h2{
        font-size: 38px;
       /* font-width: 500;*/
        margin: 30px 0 10px;
        color: white;

    }

    .popup button{
        width: 100%;
        margin-top: 30px;
        padding: 10px 0;
        background: white;
        color:#01cc65;
        border: 0;
        outline:none;
        font-size: 18px;
        border-radius: 4px;
        cursor: pointer;
        box-shadow:0 5px 5px rgba(0,0,0,0.2);
    }

    .popup button:hover{
        background: #01cc65;
        color:white;
    }
    .popup p{
        font-size: 20px;
        color: white;
    }

    .btn2{
        padding: 10px 60px;
        background:#01cc65;
        color: white;
        border: 0;
        outline: none;
        cursor: pointer;
        font-size: 22px;
       /* font-width: 500; */
        border-radius: 30px;

    }

    .btn2:hover{
        background:#0a7e44;
        box-shadow:0 5px 5px rgba(0,0,0,0.2);
    }
    .popup2{
        width:400px;
        background: #01773c;
        border-radius: 6px;
        position: absolute;
        top: 0;
        left: 50%;
        transform: translate(-50%,-50%) scale(0.1);
        text-align:left;
        padding: 0 30px 30px;
        color: #333;
        visibility: hidden;
        transition: transform 0.4s,top 0.4s;
    }

    .open-popup2{
        visibility: visible;
        top: 50%;
        transform: translate(-50%,-50%) scale(1);
    }

    .popup3{
        width:400px;
        background: #01773c;
        border-radius: 6px;
        position: absolute;
        top: 0;
        left: 50%;
        transform: translate(-50%,-50%) scale(0.1);
        text-align:left;
        padding: 0 30px 30px;
        color: #333;
        visibility: hidden;
        transition: transform 0.4s,top 0.4s;
    }

    .open-popup3{
        visibility: visible;
        top: 50%;
        transform: translate(-50%,-50%) scale(1);
    }


    .popup3 img{
        width: 100px;
        margin-top: -10%;
        margin-left:33%;
        border-radius: 50%;
        box-shadow:0 5px 5px rgba(0,0,0,0.2);
    }

    .popup2 h2{
        font-size: 38px;
       /* font-width: 500;*/
        margin: 30px 0 10px;
        color: white;

    }

    .popup3 h2{
        font-size: 38px;
      /*  font-width: 500;*/
        margin: 30px 0 10px;
        color: white;

    }


    .popup2 button{
        width: 100%;
        margin-top: 30px;
        padding: 10px 0;
        background: white;
        color:#01cc65;
        border: 0;
        outline:none;
        font-size: 18px;
        border-radius: 4px;
        cursor: pointer;
        box-shadow:0 5px 5px rgba(0,0,0,0.2);
    }

    .popup3 .button{
        width: 100%;
        margin-top: 30px;
        
        padding: 10px 0;
        background: white;
        color:#01cc65;
        border: 0;
        outline:none;
        font-size: 18px;
        border-radius: 4px;
        cursor: pointer;
        box-shadow:0 5px 5px rgba(0,0,0,0.2);
        margin-left: -5px;
    }

    .popup2 button:hover{
        background: #01cc65;
        color:white;
    }
    .popup2 p{
        font-size: 20px;
        color: white;
    }

    .popup3 .button:hover{
        background: #01cc65;
        color:white;
    }
    .popup3 p{
        font-size: 20px;
        color: white;
    }

    .ss{
        font-size: 20px;
        color: white;
    }

</style>
<body>



<div class="box">
    <div class="container">
       <div class="Inner">
        <div class="radioBtn">
            <h1>Please select your payment mode:</h1>
            <hr>
            <input type="radio" name="pay" id="cod" checked="checked" onclick="openPopup2()" value="1"/>
            <label for="cod">Cash On Delivery (COD)</label><br>
            <input type="radio" name="pay" id="op" onclick="openPopup()" value="0">
            <label for="op">Online Payment</label>
            <br>
            <br>
            <div class="OnlinePayment">
                
                <div class="popup" id="popup">
                  
                    
                    <p>This service is currently not available...</p>
                    <p>Please go for Cash On Delivery</p>
                    <!--<img src="qr.png" alt="Given QR">-->
                    <button type="button" onclick="closePopup()">OK</button>
                </div>

                <div class="thankPopUp">
        
                    <div class="popup2" id="popup2">
                       <br>
                      <p>Dear
                      <?php
                            echo ("{$_GET['name']}");
                        // $sql = "SELECT customername from customer_order WHERE customeremail='divyankajaiswalz2002@gmail.com'";
                        // $result = $link->query($sql);
                        // if($result->num_rows > 0){
                        //     while($row = $result->fetch_assoc())
                        //     {
                        //         echo $row["customername"];
                        //     }
                        // }
                        ?>
                      , </p>
                      <p>  Your order details are: </p>
                      
                      <p>     
                        <?php
                            echo ("{$_SESSION['session_email']}"."<br />");
                            // $sql = "SELECT customeremail from customer_order WHERE customeremail='divyankajaiswalz2002@gmail.com'";
                            // $result = $link->query($sql);
                            // if($result->num_rows > 0){
                            //     while($row = $result->fetch_assoc())
                            //     {
                            //         echo "    ".$row["customeremail"];
                            //     }
                            // }
                        ?>
                    </p>
                   

                       <p>Your Total bill amount :     
                        <?php
                            echo ("{$_GET['total']}"."<br />");
                            // $sql = "SELECT billamount from customer_order WHERE customeremail='divyankajaiswalz2002@gmail.com'";
                            // $result = $link->query($sql);
                            // if($result->num_rows > 0){
                            //     while($row = $result->fetch_assoc())
                            //     {
                            //         echo $row["billamount"]."/-";
                            //     }
                            // }
                        ?>
                    </p>
                       <script>
                           /*
                           let cartValue = 500;
                           let taxRate = 2;
                           taxDue = cartValue * (taxRate / 100);
                           finalPrice = cartValue + taxDue + 100;
                           document.body.style.color="white";
                           document.write("<span style=\"color:white\">" +finalPrice+ " /- (Including GST)<\span>");
                           */
                        </script>
                       <button type="button" onclick="openPopup3()">CONTINUE</button>
                    </div>
            
                    <div class="popup3" id="popup3">
                        <img src="tickk.jpg">
                        <h2>Thank you!</h2>
                        <p>Your details has been successfully submitted. Thanks!</p>
                        <form action="payment_success.php" method="get">
                            <?php
                                echo '
                                        <input type="hidden" name="custom" value="'.$_SESSION["uid"].'"/>
                                        <input type="hidden" name="name" value="'.$_GET["name"].'"/>
                                        <input type="hidden" name="address" value="'.$_GET["address"].'"/>
                                        <input type="hidden" name="phonenumber" value="'.$_GET["phonenumber"].'"/>
                                        <input type="hidden" name="total" id="total" value="'.$_GET['total'].'"/>'
                            ?>
                            <input class="button" type="submit" value="OK" onclick="closePopup2()">
                        </form>
                        <!--<button type="button" onclick="closePopup2() && sending_confirmation()">OK</button>-->
                    </div>
            
                </div>
                 

                <script>
                    let popup = document.getElementById("popup2");
                    let popupp = document.getElementById("popup3");
                    function openPopup2(){
                        popup.classList.add("open-popup2");
                    }
            
                    function openPopup3(){
                        popup.classList.remove("open-popup2");
                        popupp.classList.add("open-popup3");
                    }
            
                    function closePopup2(){
                        popupp.classList.remove("open-popup3");
                    }
                </script>

                <script>
                    let popuppp = document.getElementById("popup");
            
                    function openPopup(){
                        popuppp.classList.add("open-popup");
                    }
            
                    function closePopup(){
                        popuppp.classList.remove("open-popup");
                    }
                </script>

            </div>
        </div>
       </div>
    </div>
    
    </div>  
</body>

</html>