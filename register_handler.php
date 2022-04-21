<?php
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) 
    {
        require 'db_connection.php';

        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = sha1($_POST['password']);

        $stmt = $conn->prepare("INSERT INTO users (name, email, password)
        VALUES (:name, :email, :password)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        $stmt->execute();

        header ("Location: /backstage/index.php?register=succes");
    }
    else
    {
        header( "Location: /backstage" );
    }
?>
