<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="About us">
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
        <div class="logout-box">
            <button type="button" onclick="window.location='scripts/logout.php'">Logout</button>
        </div>
    </div>
    <div class="about-us-container">
        <div class="about-box-1">
            <h2>Who We Are</h2>
            <p>"We at FoodFitFast strive to provide the best tools and techniques
                to help people achieve their weight, health and fitness goals"
            </p>
        </div>

        <img id="beachRunners" src="images/beachRunners.jpeg" alt="Food Delivery">

        <div class="about-box-2">
            <h2>Our purpose</h2>
            <p>Founded in 2019, FoodFitFast is our ambition to improve the eating 
                and lifestyle practices of Australians nationwide. 
                It is our commitment to provide a service that is easily accessible 
                and comprehensive, which produces maximum rewards for our clients.
            </p>
            <p>Here at FoodFitFast, we offer a range of fitness, health and eating programs 
                specifically tailored to each client’s individual goals and lifestyle. 
                We are committed to providing our clients with the finest tools and techniques 
                to help them achieve their weight, health and fitness goals. 
                Our program is specifically crafted to be inclusive for all individuals 
                regardless of their budget and current health condition.
            </p>
        </div>

        <div class="about-box-1">
            <h2>How it works</h2>
            <p>The FFF program offers highly customisable, dynamic, and personalised meal plans. 
                These are created for each client based on their individual health and wellness goals, 
                whether it be for weight loss, muscle gain, or simply maintaining a balanced diet. 
                Customisations include options for special diets such as paleo, vegan, vegetarian, 
                pescatarian, high protein etc. Calorie intake levels can be adjusted as you progress 
                through the program.
            </p>
            <p>This tool goes beyond simply recommending meals by connecting you with local food 
                merchants that provide fresh, tasty, and nutritious meals. We have included detailed 
                and up to date dietary information on snacks, meals, and drinks from various restaurants 
                in your local area. Our clients are provided with the option to purchase these items 
                through our partnered third-party delivery services.
            </p>

            <img id="deliveryFoodBox" src="images/deliveryFoodBox.jpeg" alt="Food Delivery">

            <p>Fitness plans are another beneficial service we provide for those wishing to incorporate 
                exercise in their weekly routine. These can be adjusted to suit every fitness level from 
                very beginner to advanced. We provide a range of exercises at varying intensities for you 
                to choose from depending on your own personal circumstances including; cardio, strength 
                building, balance building, endurance, flexibility, and mixed training.
            </p>
            <p>Our calendar feature helps you set personal goals to make meal and fitness tracking even 
                easier. It can be used to set daily, weekly and monthly targets as well as providing a 
                visual representation of your progress. By having a schedule to reference throughout the 
                program, we hope our clients will feel motivated and inspired to reach their full potential.
            </p>
        </div>

        <div class="about-box-2">
            <h2>Why use FFF?</h2>
            <p>1. We offer an integrated solution with technology, programs, products and professional advice.
                The services we provide are a "one-stop-shop" for all you health and wellbeing needs.
            </p>
            <p>2. We offer a customised solution, tailored to individual needs and lifestyles. This allows our 
                product to be accessible to all.
            </p>
            <p>3. Our different subscription levels cater for members on all budgets.
            </p>
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
