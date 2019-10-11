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