<!DOCTYPE html>

<html>
    <head>
        <title>
            php
        </title>
    </head>

<body>
    
    <!-- connection to the database -->
    <?php

    /*** mysql hostname ***/
    $hostname = 'localhost';

    /*** mysql username ***/
    $username = 'root';

    try {
        $dbh = new PDO("mysql:host=$hostname;dbname=mysql", $username);
        /*** echo a message saying we have connected ***/
        echo 'Connected to database';
        }
    catch(PDOException $e)
        {
        echo $e->getMessage();
        }
    ?>

    <!-- test querie -->
    

</body>
</html>