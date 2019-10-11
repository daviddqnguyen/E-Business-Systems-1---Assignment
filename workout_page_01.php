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
    <div class="workout-container">
        <div class="workout-box-1">
            <h2>Build the Body You Want!</h2>
        </div>

        <img id="workoutGroup" src="images/workoutGroup.jpeg" alt="Food Delivery">

        <div class="workout-box-special">
            <img id="warmupStretch" src="images/warmupStretch.jpeg" alt="Food Delivery">
            <h2> Welcome to your first workout! </h2>
            <p>Here are your exercises for today. </br>
                Ensure you adequately stretch before 
                beginning your workout to prevent injuries.
            </p>
            
            <table>
                <tr>
                    <td><b>Main Goal</b></td>
                    <td>Lose body fat</td>
                </tr>
                <tr>
                    <td><b>Equipment Required</b></td>
                    <td>Boxing gloves</td>
                </tr>
                <tr>
                    <td><b>Training level</b></td>
                    <td>Intermediate</td>
                </tr>
                <tr>
                    <td><b>Workout type</b></td>
                    <td>Mixed</td>
                </tr>
                <tr>
                    <td><b>Workout time</b></td>
                    <td>40 mins</td>
                </tr>
            </table>
        </div>	

        <div class="workout-box-1">
            
            <h2>Workout: Intermediate day 2</h2>
            <p>Take a 3 minute break between reps</p>
            <table>
                <tr>
                    <td>
                        <h2>Rep 1</h2>
                    </td>
                    <td>
                        <h2>Rep 2</h2>
                    </td>
                    <td>
                        <h2>Rep 3</h2> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>⬤ 20m sprint - 5 reps</p>
                        <p>⬤ Wall punches- 5 minutes</p>
                        <p>⬤ Mountain climbers - 40 reps</p>
                        <p>⬤ Push ups - 30</p>
                    </td>
                    <td>
                        <p>⬤ 20m sprint - 5 reps</p>
                        <p>⬤ Wall punches- 5 minutes</p>
                        <p>⬤ Calf raises - 40 reps</p>
                        <p>⬤ Sit ups - 30</p>
                    </td>
                    <td>
                        <p>⬤ Wall punches- 5 minutes</p>
                        <p>⬤ Jumping jacks - 5 minutes</p>
                        <p>⬤ Squats - 40 reps</p>
                        <p>⬤ Plank - 3 minutes</p>
                    </td>
                </tr>
            </table>
        </div>
 
        <div class="workout-box-2">
            <p align:center> Well Done, click <a href="motivate_page_01.html">here</a> for some inspiration!</p>
        </div>
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
       
