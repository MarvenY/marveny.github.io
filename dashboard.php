<?php

    session_start();
    if(!isset($_SESSION['username'])){
        header('Location: /login.php');
        exit;
    }

    print "You loggin in successfuly";
   
?>



<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Admin Dashboard</title>
</head>
<html>
<body>
<?php
    include("header.php");
?>


<?php
    include 'footer.php';
?>

</body>
</html>