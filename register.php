
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
            <h1>Register</h1>

            <p>Register a new account</p>

            <form action="register_handler.php" method="POST" class="login_form">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" placeholder="Enter your name here..."><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" placeholder="Enter your email here..."><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" placeholder="Enter your password here..."><br><br>
                <input type="submit" value="Create account">
            </form> 
            <a href="./index.php">go back to login</a>
        </div>
    </div>
    <div class="color-bg"></div>
</body>
</html>