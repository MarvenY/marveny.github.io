<?php
    session_start();
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'] ;
    
        
        unset($_SESSION['message']);
    }

    $dsn = 'mysql:dbname=finalz;host=localhost';
    $user = 'root';
    $password = '';



    try {
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        die('Connection failed: ' . $e->getMessage());
    }
    function deleted($id, $dbh){
        $query= "DELETE FROM news where id = {$id}";
        $prepare = $dbh->prepare($query);
        $prepare->execute();

       
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        deleted($_POST['id'],$dbh );
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>News Index</title>
</head>
<body>
<?php
    include("header.php");
?>

<?php

$dsn = 'mysql:dbname=finalz;host=localhost';
$user = 'root';
$password = '';

try {
    
    $dbh = new PDO($dsn, $user, $password);


    $query = "SELECT id, title, description FROM news";
    $result = $dbh->query($query,PDO::FETCH_ASSOC);
    $rowcount = $result->rowCount();
    if ($rowcount == 0){
        $dbh->exec("ALTER TABLE news AUTO_INCREMENT = 0");
    }
    elseif($rowcount > 0 ){
        $queryReindex = "SET @new_id := 0; UPDATE news SET id = @new_id := @new_id + 1";
        $dbh->exec($queryReindex);
    }

    if ($result) {
        echo '<table class="table-container">';
        echo '<tr><th>ID</th><th>Title</th><th>Description</th><th>Action</th></tr>';
        foreach ($result as $row) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['title'] . '</td>';
            echo '<td>' . $row['description'] . '</td>';
            echo '<td><form action="delete_news.php" method="post">
                  <input type="hidden" name="news_id" value="' . $row['id'] . '">
                  <input type="submit" value="Delete"></form></td>';
            echo '</tr>';
        }
        echo '</table>';
        
    } else {
        echo "Error fetching news data.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    }

    include 'footer.php';
    
    
?>

</body>
</html>
