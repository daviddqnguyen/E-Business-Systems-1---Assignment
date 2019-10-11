<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="scripts/simplecartjs/simpleCart.js"></script>
    <script src="scripts/simplecartjs-config.js"></script>
    <title>Get Fit, Get Healthy - Workout01</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
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
        <div class="logout-box">
            <button type="button" onclick="window.location='scripts/logout.php'">Logout</button>
        </div>
    </div>
    <div class="container-1">
        <div class="page-wrapper">
            <h1>Build the Body You Want!</h1>
        </div>
        <div class="box-2">
            <h2> Welcome to your first workout! </h2>
            <h2>Meet Big Jim - your new Personal Trainer.</h2>
        </div>	
        <div class="box-3">
            <img class="product_image" src="images/muscleman_jim.jpg" alt="muscle image" />
        </div>  
        <div class="box-4">
            <h2> Jim - wants you to try the following exercises for today...</h2>
        </div>
        <div class="jim-training-box">
            <p>+ Rowing Machine - 15 minutes (see diagram for correct usage)</p>
            <p>+ Biceps Machine - 3 minutes</p>
            <p>+ Cross Trainer - 20 minutes (see diagram for correct usage)</p>
            <p>+ Push ups - 30</p>
        </div>
        <div class="box-6">
            <p align:center> Well Done for today!</p>
        </div>      
        <div class="box-7">
            <div class="box-8">
                <img class="marginauto" src="images/rowing.jpg" alt="rowing machineimage" width=400 height = 320/>
            </div>
            <div class="box-9">
                <img class="marginauto" src="images/Xtrainer.jpg" alt="Xtrainer image" />
            </div>
            
            <div class = "box-10">
                <p>How to use the Cross Trainer machine:</p>
                <img class="marginauto" src="images/Xtrainer04.jpg" alt="Xtrainer guide" >
                <img class="marginauto" src="images/Xtrainer03.jpg" alt="Xtrainer guide" >
                <p>                      </p>
                <p>How to do the Push Ups correctly:</p>
                <img class="marginauto" src="images/basicpushup.jpg" alt="Push ups" >  
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
       
