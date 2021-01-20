<?php
    // ob_start();
    // session_start();

    // /*** mysql hostname ***/
    // $hn = 'localhost';
    // /*** mysql username ***/
    // $un = 'root';
    // // database name
    // $db = 'eam3';
    // // password is blanc
    // $pw = '1234';

    // connect to the database

    if(!isset($_SESSION)) 
    { 
        session_start(); 
        
    } 
    
    $conn = mysqli_connect("localhost","root","1234","eam3");

    if ($conn->connect_error){
        $error = false;
        echo $error;
        die ($conn->connect_error);
    }

    $afm = $_SESSION['AFM'];
    $name = $conn->query("SELECT NAME FROM users WHERE AFM = '$afm'");
    // $_SESSION['NAME'] = $name;

    $row = $name->fetch_array(MYSQLI_NUM);
    echo "<li class = '_name'";
    echo $_SESSION['NAME'];
    echo "</li>";
?>