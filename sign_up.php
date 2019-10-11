<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="scripts/simplecartjs/simpleCart.js"></script>
    <script src="scripts/simplecartjs-config.js"></script>
    <title>About Us - FoodFitFast</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
    <div class="page-wrapper">
        <div class="form-wrapper">
            <div class="form-card">
                <h2 class="form-title">Registration Form</h2>
                <form>
                    <div class="form-row-1">
                        <div class="form-col-2">
                            <div class="input-group">
                                <label class="form-label-style">First name</label>
                                <input class="form-input-style" type="text" name="first_name" required>
                            </div>
                        </div>
                        <div class="form-col-2">
                            <div class="input-group">
                                <label class="form-label-style">Last name</label>
                                <input class="form-input-style" type="text" name="last_name" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row-1">
                        <div class="form-col-2">
                            <div class ="input-group">
                                <label class="form-label-style">Birthday (dd/mm/yy)</label>
                                <input class="form-input-style" type="text" name="birthday" required>
                            </div>
                        </div>
                        <div class="form-col-2">
                            <div class="input-group">
                                <label class="form-label-style">Gender</label>
                                <div class="radio-container">
                                    <label class="form-radio-label-style">Male
                                        <input type="radio" checked="checked" name="gender">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="form-radio-label-style">Female
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row-1">
                        <div class="form-col-2">
                            <div class="input-group">
                                <label class="form-label-style">Email</label>
                                <input class="form-input-style" type="email" name="email" required>
                            </div>
                        </div>
                        <div class="form-col-2">
                            <lable class="form-label-style">State</lable>
                            <select class="form-select-style-state" name="state">
                                <option disabled="disabled" selected="selected">Choose option</option>
                                <option>VIC</option>
                                <option>NSW</option>
                                <option>QLD</option>
                                <option>NT</option>
                                <option>WA</option>
                                <option>SA</option>
                                <option>TAS</option>
                                <option>ACT</option>
                            </select>
                            <div class="form-select-dropdown"></div>
                        </div>
                    </div>
                    <div class="form-row-1">
                            <div class="form-col-2">
                                <div class="input-group">
                                    <label class="form-label-style">Height (cm)</label>
                                    <input class="form-input-style" type="text" name="height">
                                </div>
                            </div>
                            <div class="form-col-2">
                                    <div class="input-group">
                                        <label class="form-label-style">Starting Weight (kg)</label>
                                        <input class="form-input-style" type="text" name="start_weight">
                                    </div>
                            </div>
                    </div>
                    <div class="form-row-1">
                            <div class="form-col-2">
                                <div class="input-group">
                                    <label class="form-label-style">Password</label>
                                    <input class="form-input-style" type="text" name="password" required>
                                </div>
                            </div>
                            <div class="form-col-2">
                                <div class="input-group">
                                    <label class="form-label-style">Confirm password</label>
                                    <input class="form-input-style" type="text" name="confirm_password" required>
                                </div>
                            </div>
                    </div>
                    <div class="input-group">
                        <lable class="form-label-style">Goal</lable>
                        <div class="form-select">
                            <select class="form-select-style" name="goal">
                                <option disabled="disabled" selected="selected">Choose option</option>
                                <option>Lose weight</option>
                                <option>Maintain weight</option>
                                <option>Gain muscle mass</option>
                                <option>Save time</option>
                            </select>
                            <div class="form-select-dropdown"></div>
                        </div>
                    </div>
                    <div class="form-button">
                        <button class="form-button-style" type="submit">Submit</button>
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
