<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="scripts/simplecartjs/simpleCart.js"></script>
    <script src="scripts/simplecartjs-config.js"></script>
    <title>Get Fit, Get Healthy - FoodFitFast</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <?php include('scripts/login.php'); ?>
    <div class="topnav">
        <div class="topnav-box-1">
            <a href="index.php"><img id="ffflogo" src="images/FFF-logo-resized.jpg" alt="FoodFitFastLogo"></a>
        </div>
        <div class="topnav-box-2">
            <a href="index.php"><img src="images/home.png" alt="Home" style="width:96px;height:96px;border:0;"></a></button>
        </div>
        <div class="topnav-box-3">
            <a href="about-us.php"><img src="images/about.png" alt="About" style="width:96px;height:96px;border:0;"></a>
        </div>
        <div class="subnav">
            <a href="workout_page_01.php"><img src="images/workout.png" alt="Profile" style="width:96px;height:96px;border:0;"></a> 
                <div class="subnav-content-1">
                    <button class="subnavbtn"><a href="product_page_01.php">Product</a></button>
                    <div class="subnav-content-2">
                        <button class="subnavbtn"><a href="services.php">Service</a></button>
                    </div>
                </div>
        </div>  
        <div class="topnav-box-4">
            <a href="order.php"><img src="images/order.png" alt="Order" style="width:96px;height:96px;border:0;"></a>  
        </div>
        <div class="topnav-box-5">
            <a href="calendar.php"><img src="images/calendar.png" alt="Calendar" style="width:96px;height:96px;border:0;"></a> 
        </div>
        <div class="topnav-box-6">
            <a href="userprofile.php"><img src="images/profile.png" alt="Profile" style="width:96px;height:96px;border:0;"></a>
        </div>
        <div class="login-box">
            <button type="button" onclick="window.location='login.php'">Login</button>
        </div>
        <div class="signup-box"> 
            <button type="button" onclick="window.location='sign_up.php'">Sign Up</button> 
        </div>
        <div class="search-box">
            <form action="/action_page.php">
                <input type="text"  placeholder="Search..." name="search">
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="cart-box">
            <button type="button"><a href="cart.php">View Cart (<span class="simpleCart_quantity"></span> items)</a></button> 
        </div>
    </div>
    <div class="container-1">
        <div class="page-wrapper">
            <h1 style=text-align:center>Order Menu</style></h1>
            <h2>Your goals: Build muscle</h2>
        </div>
        <table class="topnav-box-6">
            <tr>
                <td>
                    <div class="box-6">
                        <img src="images/Googlemapsimage.JPG" alt="Map" width="500" height="500"></td>
                    </div>
                <td>
                    <div class="box-6">
                    <table>
                        <th table-info="header" colspan="5"><h2>Your recommended muscle-building meals for today</h2></th>
                        <tr>
                            <div class="box-11">
                                <td><img src="images/roastchicken.jpg" alt="chicken" width="150" height="150"></td>
                                <td><h3>Roasted Chicken<br>1000 calories</h3></td>
                                <td><h2>$12.99</h2></td>
                                <td><h2>Chicken Kings Swanston St<br>(20 minutes away)</h2></td>
                                <td><button type="button" onclick="window.location='https://www.ubereats.com/en-AU/'">Purchase</button></td>
                            </div>
                        </tr>
                        <tr>
                            <td><img src="images/pasta.jpg" alt="pasta" width="150" height="150"></td>
                            <td><h3>Rigatoni Pasta Supremo<br>800 calories</h3></td>
                            <td><h2>$10.99</h2></td>
                            <td><h2>Blasta From The Pasta La Trobe St <br>(15 minutes away)</h2></td>
                            <td><button type="button" onclick="window.location='https://www.ubereats.com/en-AU/'">Purchase</button></td>
                        </tr>
                        <tr>
                            <td><img src="images/tunamornay.jpg" alt="tuna" width="150" height="150"></td>
                            <td><h3>Tuna Mornay<br>1200 calories</h3></td>
                            <td><h2>$16.99</h2></td>
                            <td><h2>Big Fat Fish Bourke St<br>(25 minutes away)</h2></td>
                            <td><button type="button" onclick="window.location='https://www.ubereats.com/en-AU/'">Purchase</button></td>
                        </tr>
                    </table>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="footer">
        <footer>
            <p>Website developed by: <b>Kold Koffee</b></p>
            <p><a href="contact-us.php">Contact Us</a></p>
            <p>&copy; 2019 FoodFitFast</p>
        </footer>
    </div>
</body>
</html>
