<?php

    session_start();
    if(!isset($_SESSION['username'])){
        header('Location: /login.php');
        exit;
    }
    include("header.php");
    $dsn = 'mysql:dbname=finalz;host=localhost';
    $user = 'root';
    $password = '';

    try {
        $dbh = new PDO($dsn, $user, $password);

        
        $query = "SELECT DISTINCT id FROM news";
        $result = $dbh->query($query, PDO::FETCH_ASSOC);

        if ($result) {
            echo '<form action="edit_news.php" method="post">';
            echo '<label for="news_id">Select News ID:</label>';
            echo '<select name="news_id" id="news_id">';

            foreach ($result as $row) {
                echo '<option value="' . $row['id'] . '">' . $row['id'] . '</option>';
            }

            echo '</select>';
            echo '<input type="submit" value="Load News">';
            echo '</form>';
        } else {
            echo "Error fetching news IDs.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
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
    
?>

<?php
    include 'footer.php';
?>

</body>
</html>