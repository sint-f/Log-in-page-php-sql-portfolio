<?php
    if(isset($_POST['email']) && isset($_POST['password'])) 
    {
        require 'db_connection.php';

        $email = $_POST['email'];
        $password = $_POST['password'];

        $hashed_password = sha1($password);

        $prepared = $conn->prepare ("SELECT * FROM users WHERE email=:email AND password=:password");

        $prepared->execute([
            'email'=> $email,
            'password'=> sha1($password)
        ]);

        echo sha1($password);

        $results = $prepared->fetchALL(PDO::FETCH_ASSOC);

        if(empty($result))
        {
            header( "Location: /backstage?error=wrong_credentails" );
        }
        else
        {
        }
    }
    else
    {
        header( "Location: https://google.com" );
    }
?>

