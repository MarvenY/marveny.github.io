<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $username = $_POST['username'];
    $password = hash("sha256",$_POST['password']); 
    $email = $_POST['email'];

    
    $dsn = 'mysql:dbname=finalz;host=localhost';
    $user = 'root';
    $passwords = '';

    try {
        
        $dbh = new PDO($dsn, $user, $passwords);

        
        $query = "INSERT INTO credentials (username, password, email) VALUES (:username, :password, :email)";
        $result = $dbh->prepare($query);
        $result->bindParam(':username', $username);
        $result->bindParam(':password', $password);
        $result->bindParam(':email', $email);

        if ($result->execute()) {
            echo "Registration successful!"; 
        } else {
            echo "Error registering user.";
            print_r($result->errorInfo()); 
        }
    } catch (PDOException $e) {
        echo "Error connecting to DB, exiting... " ;
    }
    header("Location: /login.php");
    exit;
}
?>