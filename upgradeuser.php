<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us - FoodFitFast</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include('login.php'); ?>
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
            <button type="button">Login</button>
        </div>
        <div class="signup-box">
            <button type="button">Sign Up</button> 
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
        <div class="logout-box">
            <button type="button" onclick="window.location='scripts/logout.php'">Logout</button>
        </div>
    </div>
        <div class="box-7">
            <h2>Why use FFF?</h2>
        </div>
        <div class="box-8">
            <table>
                <tr>
                    <td><img src="images/shopping-cart-icon.png" alt="Integrated Solution" width="250" height="250"></td>
                    <td>We offer an integrated solution with technology, programs, products and professional advice.
                        The services we provide are a "one-stop-shop" for all you health and wellbeing needs.</td>
                </tr>
                <tr>
                    <td><img src="images/customization-icon.png" alt="Customised Solution" width="250" height="250"></td>
                    <td>We offer a customised solution, tailored to individual needs and lifestyles. This allows our 
                        product to be accessible to all.</td>
                </tr>
                <tr>
                    <td><img src="images/money-icon.png" alt="Value for money" width="250" height="250"></td>
                    <td>With our <b>PREMIUM</b> subscription, gain access to hundreds of professional content to help yourself
                        reach your fitness goals, including exclusive videos, podcasts, and health tracking data.</td>
                </tr>
            </table>
        </div>
<button><a href="cart.php" text-align="center"><h1><b>UPGRADE NOW!</b></h1></a></button>
<div class="footer">
    <footer>
        <p>Website developed by: <b>Kold Koffee</b></p>
        <p><a href="contact-us.php">Contact Us</a></p>
        <p>&copy; 2019 FoodFitFast</p>
    </footer>
</div>
</body>
</html>
