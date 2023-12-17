<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
</head>
<body>


<div class="form">
    <h1> Sign up Form</h1>
<form action="signinto.php" method="post">
    <label> Username: <input type="text" name = "username" /></label> 
    <br>
    <label> Password: <input type="password" name = "password" /></label> 
    <br>
    <label> Email: <input type="email" name="email" /></label>
    <br>
    <input type="submit" value="submit" /> 
    <input type="reset" value="reset" />
</form>

<h1> <a href="login.php">Already Have an account ? Login Here</a></h1>
</div>


<?php
    include 'footer.php';
?>
</body>
</html>