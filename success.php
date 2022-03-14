<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Page</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
</head>

<body>

    <body>
        <?php
            // Checks if $h has been set
            $h = isset($_POST["h"]) ? $_POST["h"] : "";
            if($h == 1){
             // Connects the database
             $con = mysqli_connect("localhost","root","","creditcard");
             if(!$con){
             die("Failed");
             }
 
         
             // Gets the expiry month and year
             $expMonth = $_POST["expMonth"];
             $expYear = $_POST["expYear"];
 
            // Puts expiry date in correct format
             $expiryDate = new dateTime();
             $expiryDate->setDate((int)$expYear, (int) $expMonth, 1);
             $expiryDate = $expiryDate->format('Y-m-d');
             // Gets the Card Number and Security Code
             $cardNum = $_POST["cardNum"];
             $hashedCardNum = md5($cardNum);
             $secCode = $_POST["securityCode"];
 
             // Inserts Record
             $sql = "INSERT INTO card (ccnum, expdate, seccode) VALUES ('".$hashedCardNum."', '".$expiryDate."', '".$secCode."')";
 
             // Perform Query
             $con->query($sql);
                 
             // Close the connection
             $con->close();   
             
             // Takes the last four digits of the card num and sets $fourDigits as those digits
             $fourDigits = substr($cardNum, 12);      
            }
            
            if($h == -1){
                header('Location: pay.php');
            } 
        ?>

        <header id="pageBanner">
            <figure>
                <img src="images/logo_250x180.png" alt="Logo - depicts different types of people reading books" title="Bookshop Logo" class="logo" />
            </figure>
            <h1>Kian's Bookshop</h1>
        </header>

        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>

        <header>
            <h2><em>Successful Payment!</em></h2>
        </header>

        <div id="successContainer">
            <p>Debit/Credit Card</p>
            <img src="images/MastercardLogo_125x60.png" alt="MastercardLogo" title="Mastercard" class="mastercardLogo" />
            <p id="cardNumber">
                <?php 
                    echo ("Your credit card number ends in **** **** **** ". $fourDigits);
                ?>
            </p>
        </div>
        <footer>
            <p>Created by Kian Wilson</p>
        </footer>
        <main>
    </body>

</html>