<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="scripts/simplecartjs/simpleCart.js"></script>
    <script src="scripts/simplecartjs-config.js"></script>
    <title>Login - FoodFitFast</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    session_start();

    if (isset($_POST['username'])) {

        if ( $_POST['username'] == 'inte' && $_POST['password'] == '2047')  {
            $_SESSION['logged_in'] = 'true';
        } else {
            echo '
            <i>Incorrect login details.
            please try again</i><br />';
        }
    }

    if (! (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true' ) ) {
        echo '
        <html>
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
                <script src="scripts/simplecartjs/simpleCart.js"></script>
                <script src="scripts/simplecartjs-config.js"></script>
                <title>Login - FoodFitFast</title>
                <link rel="stylesheet" type="text/css" href="style.css">
                <title>Login form</title>
            </head>
            <body>
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
                        <button type="button" onclick="window.location=\'login.php\'">Login</button>
                    </div>
                    <div class="signup-box"> 
                        <button type="button" onclick="window.location=\'sign_up.php\'">Sign Up</button> 
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
                        <button type="button" onclick="window.location=\'logout.php\'">Logout</button>
                    </div>
                </div>  
                <div class="page-wrapper">
                <div class="form-wrapper">
                    <div class="form-card">
                        <h2 class="form-title">Login</h2>
                        <form action="' . $_SERVER['PHP_SELF'] . '"method="POST">
                            <div class="form-row-center">
                                <div class="form-col-1">
                                    <div class="input-group-li">
                                        <label class="form-label-style">Username</label>
                                        <input class="form-input-style" type="text" name="username" required>
                                    </div>
                                    <div class="input-group-li">
                                        <label class="form-label-style">Password</label>
                                        <input class="form-input-style" type="password" name="password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row-center">
                                <div class="form-col-1">
                                    <div class="form-button">
                                        <a href="userprofile.php"><button class="form-button-style" type="submit">Login</button></a>
                                    </div>
                                    <div class="form-button">
                                        <button class="form-button-style" type="button">Forgot Password</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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
        ';
        exit;
    } 
?>
</body>
</html>