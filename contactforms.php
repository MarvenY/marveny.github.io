<?php

    session_start();
    if(!isset($_SESSION['username'])){
        header('Location: /login.php');
        exit;
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
    include("header.php");
?>

<?php
    
    $dsn = 'mysql:dbname=finalz;host=localhost';
    $user = 'root';
    $password = '';

    try {
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        die('Connection failed: ' . $e->getMessage());
    }


    $query = "SELECT name, email, telephone, gender, country, purpose, subject, comment FROM contact";
    $results = $dbh->prepare($query);
    $results->execute();
    $contactForms = $results->fetchAll(PDO::FETCH_ASSOC);


    echo '<table class = "table-container">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Gender</th>
                <th>Country</th>
                <th>Purpose</th>
                <th>Subject</th>
                <th>Comment</th>
            </tr>';

    foreach ($contactForms as $form) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($form['name']) . '</td>';
        echo '<td>' . htmlspecialchars($form['email']) . '</td>';
        echo '<td>' . htmlspecialchars($form['telephone']) . '</td>';
        echo '<td>' . htmlspecialchars($form['gender']) . '</td>';
        echo '<td>' . htmlspecialchars($form['country']) . '</td>';
        echo '<td>' . htmlspecialchars($form['purpose']) . '</td>';
        echo '<td>' . htmlspecialchars($form['subject']) . '</td>';
        echo '<td>' . htmlspecialchars($form['comment']) . '</td>';
        echo '</tr>';
    }

    echo '</table>';
    include 'footer.php';
?>


</div>

</body>
</html> 