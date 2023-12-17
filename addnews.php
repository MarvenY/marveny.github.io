<?php
session_start();
    if(!isset($_SESSION['username'])){
        header('Location: /login.php');
        exit;
        
    }
    if(isset($_SESSION['message'])){

        echo( $_SESSION['message']);
        unset($_SESSION['message']);
    }
    include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>Add News</title>
</head>
<body>
    <div class="form">
        <h1>Add News</h1>
        <form action="submitnews.php" method="post" enctype="multipart/form-data">
            <label>Title:</label>
            <br>
            <textarea name="title" rows="2" cols="50" required></textarea>
            <br>
            <label>Description:</label>
            <br>
            <textarea name="description" rows="4" cols="50" required></textarea>
            <br>
            <label>Upload Photo:</label>
            <br>
            <input type="file" name="img">
            <br>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
    </div>
    <?php
        include("footer.php");
    ?>
</body>
</html>
