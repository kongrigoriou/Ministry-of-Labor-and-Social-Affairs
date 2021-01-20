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
if(isset($_POST['apply'])){

    //get form data
    $name = $_POST['company_name'];
    $employer_afm = $_POST['employer_AFM'];
    $employee_afm = $_POST['employee_AFM'];
    $company_afm = $_POST['company_AFM'];
    $radio = $_POST['radio'];

    //company must exist
    $result = $conn->query("SELECT * FROM company WHERE AFM = '$company_afm'");
    if($result->num_rows != 1){
        array_push($errors, "Λανθασμένο ΑΦΜ Εταιρίας.");
    }

    //employee must exist and work for said company
    $result = $conn->query("SELECT * FROM employee WHERE AFM = '$employee_afm' and COMPANY_AFM = '$company_afm'");
    if($result->num_rows != 1){
        array_push($errors, "Λανθασμένο ΑΦΜ Eργαζoμένου.");
    }

    //employer must work for company
    $result = $conn->query("SELECT * FROM company WHERE AFM = '$company_afm' and EMPLOYER_AFM = '$employer_afm'");
    if($result->num_rows != 1){
        array_push($errors, "Λανθασμένο ΑΦΜ Εργοδότη");
    }

    //insert him to the data base
    $result = $conn->query("INSERT INTO covid_forms (EMPLOYEE_AFM, EMPLOYER_AFM, COMPANY_AFM, TYPE) VALUES ('$employee_afm', '$employer_afm', '$company_afm', '$radio')");
    echo $result;

    //redirect user to profile
    header('Location: profile.php');
}