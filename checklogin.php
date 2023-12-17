<?php

session_start();

$gPassword = false;
if(!empty($_POST['password'])) $gPassword = hash('sha256', $_POST['password']);

$dPassword = false;
$gUsername = false;

if(!empty($_POST['username'])) $gUsername = $_POST['username'];
if(($gUsername === false) || ($gPassword === false)){
    $_SESSION['message'] = 'Please provide your username and password';
    header('Location: /login.php');
    exit;
}

$dsn = 'mysql:dbname=finalz;host=localhost';
$user = "root";
$password = "";

try{

    $dbh = new PDO($dsn, $user, $password);
    
} catch(\PDOException $e1){
    die("Error connecting to DBMS. Exiting ...");
}



$query = "select username, password from credentials where username = '{$gUsername}' limit 1" ;
$row = $dbh->query($query, PDO::FETCH_OBJ)->fetch();
if(isset($row->password))  {
    $dPassword = $row->password;


}else{

    $_SESSION['message'] = 'Wrong credentials, please try again.';
    header('Location: /login.php');
    exit;
}


if($gPassword === $dPassword){
    
    $_SESSION['username'] = $gUsername;
    header("Location: /dashboard.php");
    exit;


}


