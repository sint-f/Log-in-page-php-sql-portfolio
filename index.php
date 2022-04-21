
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Backstage</title>
</head>
<body>
    <div class="container"> 

        <div class="login_wrapper">
            <h1>Login</h1>

            <?php
                if(isset($_GET['error']))
                {
                    $error = $_GET['error'];

                    if($error == 'wrong_credentails')
                    {
                        ?>
                            <div class="message">
                                <h3>wrong username/password</h3>
                                <p>Please try again</p>
                            </div>
                        <?php
                    }
                };
            ?>

            <p>Login to your page</p>

            <form action="Login_handler.php" method="POST" class="login_form">
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" placeholder="Enter your email here..."><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" placeholder="Enter your password here..."><br><br>
                <input type="submit" value="Login">
            </form> 
            <a href="./register.php">register</a>
        </div>
    </div>
    <div class="color-bg"></div>
</body>
</html>