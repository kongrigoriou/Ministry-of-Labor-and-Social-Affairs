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

//error array
$errors = array();

//if the register button is clicked
if(isset($_POST['register'])){

    //get values from the register form
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $telnum = $_POST['telnum'];
    $date = $_POST['date'];
    $emailid = $_POST['emailid'];
    $reason = $_POST['reason'];

    echo $reason;
    echo $date;
}
?>