<!DOCTYPE html>
<html>
<head>
    <title>test</title>
</head>

<body>

<?php

    session_start();

    /*** mysql hostname ***/
    $hn = 'localhost';
    /*** mysql username ***/
    $un = 'root';
    // database name
    $db = 'test';
    // password is blanc
    $pw = '1234';

    //connect to the database
    $conn = new mysqli('localhost', 'root', '', 'test');
    if ($conn->connect_error){
        $error = false;
        echo $error;
        die ($conn->connect_error);
    }

    $succ = "connected.";
    echo $succ;

    // $mysqli = new mysqli("localhost", "root", "1234", "test");
    $result = $conn->query("SELECT * FROM users");

    $rows = $result->num_rows;
    echo $rows;
    // $res = mysql_query($result);
    // while($row = mysql_fetch_array($res)) {
    //     echo $row['name']; 
    // }
?>

<p>gggggggggggggg</p>

</body>

</html>