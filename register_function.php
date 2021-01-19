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

$succ = "connected.";
echo $succ;

//get values from the register form
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$username = $_POST['surname'];
$afm = $_POST['AFM'];
$ama = $_POST['AMA'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$work = $_POST['radio'];
$company_afm = $_POST['company_AFM'];


//test print
echo $work;

?>