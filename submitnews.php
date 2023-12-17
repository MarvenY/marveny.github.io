<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location: /login.php');
    exit;
}

$dsn = 'mysql:dbname=finalz;host=localhost';
$user = 'root';
$password = '';



try {
    $dbh = new PDO($dsn, $user, $password);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $title = $_POST['title'];
        $description = $_POST['description'];

        
        $img = $_FILES['img']['name']; 
        $img_tmp = $_FILES['img']['tmp_name']; 

   
        $upload_path = 'C:\OSPanel\domains\Final\library\img'; 
        move_uploaded_file($img_tmp, $upload_path . $img);

        
        $query = "INSERT INTO news (title, description, img) VALUES (:title, :description, :img)";
        $statement = $dbh->prepare($query);
        $statement->bindParam(':title', $title);
        $statement->bindParam(':description', $description);
        $statement->bindParam(':img', $img);
        $statement->execute();

        $_SESSION['message'] = "News was uploaded successfully !";
        header("Location: /addnews.php");
        exit;
    } else {
        echo "Invalid request method.";
        header("Location: /addnews.php");
        exit;
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>
