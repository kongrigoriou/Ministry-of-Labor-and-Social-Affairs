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
    $name = $_POST['company_name'];
    $doy = $_POST['doy'];
    $employer_afm = $_POST['employer_AFM'];
    $company_afm = $_POST['company_AFM'];

    //company must be unique
    $result = $conn->query("SELECT * FROM company WHERE AFM = '$company_afm'");
    if($result->num_rows != 0){
        array_push($errors, "Λανθασμένο ΑΦΜ Εταιρίας.");
    }

    //company name must be unique
    $result = $conn->query("SELECT * FROM company WHERE NAME = '$name'");
    if($result->num_rows != 0){
        array_push($errors, "Υπάρχει ήδη εταιρία με την συγκεκριμένη επωνυμία.");
    }

    //employer afm must exist
    $result = $conn->query("SELECT * FROM employer WHERE AFM = '$employer_afm'");
    if($result->num_rows != 1){
        array_push($errors, "Λανθασμένο ΑΦΜ Εργοδότη.");
    }

    //if there were to errors
    //save the company to the database
    if(count($errors) == 0){
        //add company to the company table
        $result = $conn->query("INSERT INTO company (AFM, NAME, DOY, EMPLOYER_AFM) VALUES ('$company_afm', '$name', '$doy', '$employer_afm')");
        echo $result;        

        //redirect user to the index.php
        header('Location: index.php');

    }
}


?>