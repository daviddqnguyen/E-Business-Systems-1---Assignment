<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Products">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="scripts/simplecartjs/simpleCart.js"></script>
    <script src="scripts/simplecartjs-config.js"></script>
    <title>Get Fit, Get Healthy - Product01</title>
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
    <div class="product-container">
        <div class="product-box-1">
            <h2>Build and maintain the body you want for life</h2> 
        </div>
        <img id="peopleExercise" src="images/peopleExercise.jpeg" alt="Muscle Training">

        <div class="product-box-1">
            <h2>Our premium subscription packages</h2>
            <p>For additional fitness training, we offer premium subscription packages 
                for every fitness level. Whether you're an absolute beginner or a 
                fitness fanatic, we have something for everyone. 
                Subscribe now to unlock the key to your new body.
            </p>
        </div>
        
        <div class="product-box-2">
            <h2>Achieve your goals with the FFF program</h2>
            <p>Fitness plans are service we provide for those wishing to incorporate 
                exercise in their weekly routine. These can be adjusted to suit every fitness level from 
                very beginner to advanced. We provide a range of exercises at varying intensities for you 
                to choose from depending on your own personal circumstances including; cardio, strength 
                building, balance building, endurance, flexibility, and mixed training.
            </p>
        </div>

        <img id="pushUpsWithWeights" src="images/pushUpsWithWeights.jpeg" alt="Arm Training">

        <div class="product-box-1">
            <h2>Here is what our customers are saying</h2>
            <p>From on the go uni students, to busy stay at home mums, our varied range of 
                customers are all saying the same thing...
            </p>
        </div>

        <div class="reviews">
            <table>
                <tr>
                    <th content="star">★★★★★</br>
                        <b>Jennie Picket</b></br>
                        38
                    </th>
                    <td>I'm a busy mother of 2. FFF takes the hassle out of having to come up
                        with healthy and delicious meals for my family. Now I can prepare FFF's recommended meals 
                        myself or order in from one of many local restaurants. The convenience of their pre-planed 
                        meals has helped me save time which I can now spend with my kids.
                    </td>
                </tr>
                <tr>
                    <th content="star">★★★★★</br>
                        <b>Grant Simmons</b></br>
                        32
                    </th>
                    <td>With FFF I was able to lose 15kg and gain a new found confidence in my
                        ability to achieve what I set my mind to. For me, FFF has become a valuable tool I 
                        recommend for anyone struggling to lose weight.
                    </td>
                </tr>
                <tr>
                    <th content="star">★★★★✰</br>
                        Tom King</br>
                        25
                    </th>
                    <td >One of the greatest challenges I faced while trying to gain muscle 
                        mass was finding the correct balance between diet and exercie. With FFF's premium 
                        services and professional advice I was able to find that balance and achieve favourable 
                        results. 
                    </td>
                </tr>
            </table>

            <div class="product-box-1">
                <h2>Still need more info?</h2>
                <p>Click <a href="order.php">here</a> to view our exciting menu range for building your body</p>
                <p>Click <a href="workout_page_01.php">here</a> to see a sample Workout plan </p>
            </div>

        </div>
    </div>
        <div class="product-img-box">
        </div>
        <div class="simpleCart_shelfItem">
            <h2 class="simpleCart_name">FFF program</h2>
            <p>
                <span class="item_price">$100.00</span><br />
                <input type="text" value="1" class="item_quantity"/><br />
                <p><button><a class="item_add" href="javascript:;">Add to Cart</style></a></button></p>
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
       
