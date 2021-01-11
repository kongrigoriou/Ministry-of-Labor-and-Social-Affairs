<!DOCTYPE html>

<html>
    <head>
        <title>
            php
        </title>
    </head>

<body>
    
    <?php

    /*** mysql hostname ***/
    $hostname = 'localhost';

    /*** mysql username ***/
    $username = 'username';

    /*** mysql password ***/
    $password = 'password';

    try {
        $dbh = new PDO("mysql:host=$hostname;dbname=mysql", $username, $password);
        /*** echo a message saying we have connected ***/
        echo 'Connected to database';
        }
    catch(PDOException $e)
        {
        echo $e->getMessage();
        }
    ?>

</body>
</html>