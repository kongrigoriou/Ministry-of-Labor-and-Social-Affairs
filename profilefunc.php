<?php

    session_start(); 

    
    $conn = mysqli_connect("localhost","root","1234","eam3");

    if ($conn->connect_error){
        $error = false;
        echo $error;
        die ($conn->connect_error);
    }

    $afm = $_SESSION['AFM'];
    $name = $conn->query("SELECT * FROM users WHERE AFM = '$afm'");
    $row = mysqli_fetch_array($name);

    $comp = $conn->query("SELECT * FROM company WHERE EMPLOYER_AFM = '$afm'");

    if($comp->num_rows == 0){
        $temp = $conn->query("SELECT * FROM employee WHERE AFM = '$afm'");
        $row3000 = mysqli_fetch_array($temp);
        $compafm = $row3000['COMPANY_AFM'];
        $comp = $conn->query("SELECT * FROM company WHERE AFM = '$compafm'");
    }
    
    
    $row2 = mysqli_fetch_array($comp);

    $compafm = $row2['AFM'];

    $emp = $conn->query("SELECT * FROM employee WHERE COMPANY_AFM = '$compafm'");

    // while($row3 = mysqli_fetch_array($emp));{

    // }

?>