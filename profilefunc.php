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

        //covid-forms
        $covform = $conn->query("SELECT * FROM covid_forms WHERE EMPLOYEE_AFM = '$afm'");
        if($covform->num_rows != 0){
            $row156 = mysqli_fetch_array($covform);
            $covtype = $row156['TYPE'];
            // $covready = mysqli_fetch_array($covtype); 
        }
    }
    
    
    $row2 = mysqli_fetch_array($comp);

?>