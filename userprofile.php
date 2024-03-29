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
            <button type="button" onclick="window.location='logout.php'">Logout</button>
        </div>
    </div>
<div class="page-wrapper">
    <h1>Welcome Back Dave!</h1>
</div>
<div class="box-6">
    <table>
        <tr>
            <td><img src="images/userpic.jpg" alt="Profile photo" width="200" height="250"></td>
            <td><h2>Dave Smith</h2><p></p><h3>Goals: Build Muscle</h3><p></p><h4>Current weight: 70kg</h4></td>
            <td><h2>         .          Your stats:</h2></td>
            <td><img src="images/userstats.png" alt="statistics" align="center" width="400" height="250"></td>
        </tr>
    </table>
</div>
<button onclick="window.location.href = 'usersettings.php';">Change Settings</button>
<button onclick="window.location.href = 'upgradeuser.php';">Upgrade to PREMIUM!</button>
<h2>This week's schedule:</h2>
<table table-time="this week" border="1">
        <tr>
            <th colspan="2">Monday</th>
            <th colspan="2">Tuesday</th>
            <th colspan="2">Wednesday</th>
            <th colspan="2">Thursday</th>
            <th colspan="2">Friday</th>
            <th colspan="2">Saturday</th>
            <th colspan="2">Sunday</th>
        </tr>

        <tr>
            <td table-info="header">Workout</td>
            <td>Cardio</td>
            <td table-info="header">Workout</td>
            <td>Rest day</td>
            <td table-info="header">Workout</td>
            <td>Legs</td>
            <td table-info="header">Workout</td>
            <td>Abs</td>
            <td table-info="header">Workout</td>
            <td>Rest day</td>
            <td table-info="header">Workout</td>
            <td>Cardio</td>
            <td table-info="header">Workout</td>
            <td><a href="workout_page_01.php">Arms</a></td>
        </tr>

        <tr>
            <td table-info="header">Calories</td>
            <td>2700</td>
            <td table-info="header">Calories</td>
            <td>2500</td>
            <td table-info="header">Calories</td>
            <td>2800</td>
            <td table-info="header">Calories</td>
            <td>2800</td>
            <td table-info="header">Calories</td>
            <td>2500</td>
            <td table-info="header">Calories</td>
            <td>2700</td>
            <td table-info="header">Calories</td>
            <td>2800</td>
        </tr>

        <tr>
            <td table-info="header">Breakfast</td>
            <td>Oats</td>
            <td table-info="header">Breakfast</td>
            <td>Yoghurt</td>
            <td table-info="header">Breakfast</td>
            <td>Bacon & Eggs</td>
            <td table-info="header">Breakfast</td>
            <td>French Toast</td>
            <td table-info="header">Breakfast</td>
            <td>Fruit Salad</td>
            <td table-info="header">Breakfast</td>
            <td>Green Smoothie</td>
            <td table-info="header">Breakfast</td>
            <td>Oats</td>
        </tr>

        <tr>
            <td table-info="header">Lunch</td>
            <td>Quiche</td>
            <td table-info="header">Lunch</td>
            <td>Hamburger</td>
            <td table-info="header">Lunch</td>
            <td>Pumpkin Soup</td>
            <td table-info="header">Lunch</td>
            <td>Chicken Wrap</td>
            <td table-info="header">Lunch</td>
            <td>Pulled Pork Roll</td>
            <td table-info="header">Lunch</td>
            <td>Chicken Pesto Pasta</td>
            <td table-info="header">Lunch</td>
            <td>Fish & Chips</td>
        </tr>
        
        <tr>
            <td table-info="header">Dinner</td>
            <td>Tandoori Chicken</td>
            <td table-info="header">Dinner</td>
            <td>Tomato Soup</td>
            <td table-info="header">Dinner</td>
            <td>Spaghetti Bolognese</td>
            <td table-info="header">Dinner</td>
            <td>Roast Lamb</td>
            <td table-info="header">Dinner</td>
            <td>Teriyaki Salmon Poke Bowl</td>
            <td table-info="header">Dinner</td>
            <td>Vegetarian Lasagna</td>
            <td table-info="header">Dinner</td>
            <td>Chicken Stir Fry</td>
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
       