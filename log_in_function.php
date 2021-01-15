<?php


    /*** mysql hostname ***/
    $hn = 'localhost';
    /*** mysql username ***/
    $un = 'root';
    // database name
    $db = 'test';
    // password is blanc
    $pw = '1234';

    session_start();

    //connect to the database
    $conn = mysqli_connect($hn, $un, $pw, $db);
    if ($conn->connect_error){
        $error = false;
        echo $error;
        die ($conn->connect_error);
    }

    $succ = "connected."
    echo $succ;

    // get arguments
    
?>