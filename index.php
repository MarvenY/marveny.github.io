<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Home Page</title>
</head>
<body>

    <div class="grid-container">

        <div class="item2">
        <header class="header">
            Live News
        </header>



            <br>


            <a href="details.php" >Rising Concerns: Experts Warn of Dwindling Biodiversity Amidst Climate Crisis</a>
            <p>
                "Learn about the alarming global decline in biodiversity and its implications for ecosystems worldwide. Experts emphasize the urgent need
                for conservation efforts and sustainable practices to mitigate the environmental consequences. Discover how various organizations and 
                initiatives are working to address this critical issue."
            </p>
       
            <a href="details.php">Rising Concerns: Experts Warn of Dwindling Biodiversity Amidst Climate Crisis</a>
            <p>
                "Learn about the alarming global decline in biodiversity and its implications for ecosystems worldwide. Experts emphasize the urgent need
                for conservation efforts and sustainable practices to mitigate the environmental consequences. Discover how various organizations and 
                initiatives are working to address this critical issue."
            </p>
            
            <a href="details.php">Rising Concerns: Experts Warn of Dwindling Biodiversity Amidst Climate Crisis</a>
            <p>
                "Learn about the alarming global decline in biodiversity and its implications for ecosystems worldwide. Experts emphasize the urgent need
                for conservation efforts and sustainable practices to mitigate the environmental consequences. Discover how various organizations and 
                initiatives are working to address this critical issue."
            </p>
          
            <a href="details.php">Rising Concerns: Experts Warn of Dwindling Biodiversity Amidst Climate Crisis</a>
            <p>
                "Learn about the alarming global decline in biodiversity and its implications for ecosystems worldwide. Experts emphasize the urgent need
                for conservation efforts and sustainable practices to mitigate the environmental consequences. Discover how various organizations and 
                initiatives are working to address this critical issue."
            </p>
          
            <a href="details.php">Rising Concerns: Experts Warn of Dwindling Biodiversity Amidst Climate Crisis</a>
            <p>
                "Learn about the alarming global decline in biodiversity and its implications for ecosystems worldwide. Experts emphasize the urgent need
                for conservation efforts and sustainable practices to mitigate the environmental consequences. Discover how various organizations and 
                initiatives are working to address this critical issue."
            </p>
       

        </div>

        <div class="item3">
            <?php
            $dsn = 'mysql:dbname=finalz;host=localhost';
            $user = 'root';
            $password = '';

            try {
                $dbh = new PDO($dsn, $user, $password);

                $query = "SELECT id, title, description FROM news";
                $result = $dbh->query($query, PDO::FETCH_ASSOC);

                foreach ($result as $row) {
                    echo '<a href="details.php"><strong>' . $row['title'] . '</strong></a>';
                    echo '<p>' . $row['description'] . '</p>';
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            ?>



        </div>
      </div>
    
 
<?php
    include 'footer.php';
?>

</body>