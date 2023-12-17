<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>
<body>
<div class="form">
<h1> Login Form</h1>
<?php
    if(isset($_SESSION['message'])){
        echo( $_SESSION['message']);
        unset($_SESSION['message']);
    }
    
?>

<form action="checklogin.php" method="post">
    <label> Username: <input type="text" name = "username" /> </label> 
    <br>
    <label> Password: <input type="password" name = "password" /> </label> 
    <br>
    <input type="submit" value="submit" /> 
    <input type="reset" value="reset" />
</form>

<h1> <a href="signup.php">New Here? Sign up here </a></h1>
</div>


<?php
    include 'footer.php';
?>
</body>
</html>