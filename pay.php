<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
</head>

<body>
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

    <main>
        <header>
            <h2><em>Payment Options:</em></h2>
        </header>
        
        <img src="images/MastercardLogo_125x60.png" alt="MastercardLogo" title="Mastercard" class="mastercardLogo" />

        <div id="formContainer">
            <form action='success.php' method='POST'>
                <label for="cardNumber">Card Number:
                    <input type="number" id="cardNum" name="cardNum"><br>
                </label>

                <label for="expiryYear">Expiration Date:
                    <select name="expMonth" id="expMonth">
                        <option value="0">Select Month</option>
                        <option value=01>January</option>
                        <option value=02>February</option>
                        <option value=03>March</option>
                        <option value=04>April</option>
                        <option value=05>May</option>
                        <option value=06>June</option>
                        <option value=07>July</option>
                        <option value=08>August</option>
                        <option value=09>September</option>
                        <option value=10>October</option>
                        <option value=11>November</option>
                        <option value=12>December</option>
                    </select>
                
                    <select name="expYear" id="expYear">
                        <option value="0">Select Year</option>
                        <option value=2021>2021</option>
                        <option value=2022>2022</option>
                        <option value=2023>2023</option>
                        <option value=2024>2024</option>
                        <option value=2025>2025</option>
                        <option value=2026>2026</option>
                        <option value=2027>2027</option>
                        <option value=2028>2028</option>
                        <option value=2029>2029</option>
                        <option value=2030>2030</option>
                        <option value=2031>2031</option>
                    </select> <br>
                </label>

 
                <label for="securityCode">Security Code:
                    <input type="number" id="securityCode" name="securityCode"> <br>
                </label>

                <p>(3-4 digit code on the back of your card)</p>

                <input type='submit' id='detailsBtn' value='Submit'>

                <input type='hidden' id='h' name='h' value='' />
            </form>
        </div>
    </main>
    <footer>  
        <p>Created by Kian Wilson</p>
    </footer>

    <script src="js/payment.js"></script>
</body>
</html>