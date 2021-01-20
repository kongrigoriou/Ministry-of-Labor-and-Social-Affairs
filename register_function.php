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
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $afm = $_POST['AFM'];
    $ama = $_POST['AMA'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $work = $_POST['radio'];
    $company_afm = $_POST['company_AFM'];

    //AFM must be unique
    $result = $conn->query("SELECT * FROM users WHERE AFM = '$afm'");
    if($result->num_rows != 0){
        array_push($errors, "Λανθασμένο ΑΦΜ Χρήστη.");
    }

    //AMA must be unique
    $result = $conn->query("SELECT * FROM users WHERE AMA = '$ama'");
    if($result->num_rows != 0){
        array_push($errors, "Λανθασμένο AMA Χρήστη.");
    }

    //username must be unique
    $result = $conn->query("SELECT * FROM credentials WHERE USERNAME = '$username'");
    if($result->num_rows != 0){
        array_push($errors, "To Όνομα Χρήστη υπάρχει ήδη.");
    }

    // email must be unique
    $result = $conn->query("SELECT * FROM users WHERE EMAIL = '$email'");
    if($result->num_rows != 0){
        array_push($errors, "To email υπάρχει ήδη.");
    }

    //if its an employee check the integrity of the company afm
    if($work == 'employee'){
        $result = $conn->query("SELECT * FROM company WHERE AFM = '$company_afm'");
        if($result->num_rows == 0){
            array_push($errors, "Δεν βρέθηκε εταιρία με αυτό το ΑΦΜ.");
        }
    }

    //if there were to errors
    //save the user to the database
    if(count($errors) == 0){
        //add user to the user table
        // $sql = "INSERT INTO users (AFM, NAME, SURNAME, AMA, GENDER, EMAIL) VALUES ('$afm', '$name', '$surname', '$ama', '$gender', '$email')";
        $result = $conn->query("INSERT INTO users (AFM, NAME, SURNAME, AMA, SEX, EMAIL) VALUES ('$afm', '$name', '$surname', '$ama', '$gender', '$email')");
        echo $result;

        //if he is an employee
        //update the session variables to keep the new user logged in
        if($work == 'employee'){
            $_SESSION['logged_in'] = '1';
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['AFM'] = $afm;
            $_SESSION['STATUS'] = $work;
            $_SESSION['name'] = $name;
            
            //redirect user to the index.php
            header('Location: index.php');
        }
    }
}


?>