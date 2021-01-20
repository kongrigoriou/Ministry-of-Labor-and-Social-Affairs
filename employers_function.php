<?php
ob_start();
session_start();

/*** mysql hostname ***/
$hn = 'localhost';
/*** mysql username ***/
$un = 'root';
// database name
$db = 'eam3';
// password is blanc
$pw = '1234';

//connect to the database
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error){
    $error = false;
    echo $error;
    die ($conn->connect_error);
}

//find employer company from session variables
$emp_afm = $_SESSION['AFM'];

$comp = $conn->query("SELECT * FROM company WHERE EMPLOYER_AFM = '$emp_afm'");
$row = mysqli_fetch_array($comp);

//get the company afm
$comp_afm = $row['AFM'];
//search for company workers
$result = $conn->query("SELECT * FROM employee WHERE COMPANY_AFM = '$comp_afm'");
$num = $result->num_rows;