<?php
if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}

include("header.php");
$dsn = 'mysql:dbname=finalz;host=localhost';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);

    if (isset($_POST['news_id'])) {
        $news_id = $_POST['news_id'];

        $query = "SELECT title, description FROM news WHERE id = :news_id";
        $statement = $dbh->prepare($query);
        $statement->bindParam(':news_id', $news_id, PDO::PARAM_INT);
        $result = $statement->execute();

        if ($result) {
            $row = $statement->fetch(PDO::FETCH_ASSOC);

            echo '<form action="update_news.php" method="post" class="news-form" enctype="multipart/form-data">';
            echo '<label for="title">Title:</label>';
            echo '<br>';
            echo '<textarea name="title" class="large-textarea" required>' . $row['title'] . '</textarea>';
            echo '<br>';
            echo '<label for="description">Description:</label>';
            echo '<br>';
            echo '<textarea name="description" class="large-textarea" required>' . $row['description'] . '</textarea>';
            echo '<br>';
            echo '<label for="image">Image:</label>';
            echo '<input type="file" name="image" accept="image/*">';
            echo '<br>';
            echo '<input type="hidden" name="news_id" value="' . $news_id . '">';
            echo '<input type="submit" value="Update News">';
            echo '</form>';
        } else {
            echo "Error fetching news details.";
        }
    } else {
        echo "No news ID selected.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

include("footer.php");
?>
