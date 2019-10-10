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
                <title>Login form</title>
            </head>
            <body>  
                <form action="' . $_SERVER['PHP_SELF'] . '"method="POST">
                Username: <input type="text"
                name="username" />
                <br />

                Password: <input type="password"
                name="password" />
                <br />

                <input type="submit" value="Login" />
                </form>
            </body>
        </html>
        ';
        exit;
    } 
?>