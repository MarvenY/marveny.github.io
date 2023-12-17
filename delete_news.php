

<?php
    session_start();
    include("header.php");


    $dsn = 'mysql:dbname=finalz;host=localhost';
    $user = 'root';
    $password = '';

    try {
        
        $dbh = new PDO($dsn, $user, $password);
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $newsId = $_POST['news_id'];
    
            
            $query = "DELETE FROM news WHERE id = :id";
            $result = $dbh->prepare($query);
            $result->bindParam(':id', $newsId);
    
            if ($result->execute()) {
                $_SESSION['message'] = "News item deleted successfully!";
                $query = "UPDATE your_table_name SET id = id - 1";
                $dbh->exec($query);
                
            } else {
                $_SESSION['message'] = "Error deleting news item.";
            }
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }


    
    header("Location: /remove.php");
    exit;
?>
