<?php
    session_start();
    
$dsn = 'mysql:dbname=finalz;host=localhost';
$user = 'root';
$password = '';

try {
    
    $dbh = new PDO($dsn, $user, $password);
    
} catch (PDOException $e) {
    echo "failed";
    die('Connection failed: ' . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $purpose = $_POST['purpose'];
    $subject = $_POST['subject'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO contact (name, email, telephone, gender, country, purpose, subject, comment)
    VALUES (:name, :email, :telephone, :gender, :country, :purpose, :subject, :comment)";
    $results = $dbh->prepare($query);
    
    $results->bindParam(':name', $name);
    $results->bindParam(':email', $email);
    $results->bindParam(':telephone', $telephone);
    $results->bindParam(':gender', $gender);
    $results->bindParam(':country', $country);
    $results->bindParam(':purpose', $purpose);
    $results->bindParam(':subject', $subject);
    $results->bindParam(':comment', $comment);
    
 
    try {
    
        if ($results->execute()) {
            echo "Form data has been successfully submitted!";
        } else {
            echo "Error submitting form data.";
            print_r($results->errorInfo());  
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
}

?>
