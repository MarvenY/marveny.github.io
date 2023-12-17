<?php
$dsn = 'mysql:dbname=finalz;host=localhost';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);

    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $news_id = $_POST['news_id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

       
        $query = "UPDATE news SET title = :title, description = :description WHERE id = :news_id";
        $statement = $dbh->prepare($query);
        $statement->bindParam(':title', $title, PDO::PARAM_STR);
        $statement->bindParam(':description', $description, PDO::PARAM_STR);
        $statement->bindParam(':news_id', $news_id, PDO::PARAM_INT);
        $result = $statement->execute();

        if ($result) {
            echo "News Update Successful !";
            
        } else {
            echo "Error updating news.";
        }
    } else {
        echo "Invalid request.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


?>
