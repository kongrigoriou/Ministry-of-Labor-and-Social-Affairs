<!DOCTYPE html>
<html>
<head>
    <title>test</title>
</head>

<body>

<?php

    // session_start();

    // /*** mysql hostname ***/
    // $hn = 'localhost';
    // /*** mysql username ***/
    // $un = 'root';
    // // database name
    // $db = 'test';
    // // password is blanc
    // $pw = '1234';

    // //connect to the database
    // $conn = mysqli_connect('localhost', 'root', '1234', 'mysql');
    // if ($conn->connect_error){
    //     $error = false;
    //     echo $error;
    //     die ($conn->connect_error);
    // }

    // $succ = "connected."
    // echo $succ;

    $mysqli = new mysqli("localhost", "root", "1234", "test");
    $result = $mysqli->query("SELECT * FROM users");
    
?>

<p>gggggggggggggg</p>

</body>

</html>