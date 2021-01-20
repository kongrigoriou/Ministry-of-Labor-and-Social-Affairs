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

//get values from the login form
$username = $_POST['username'];
$password = $_POST['password'];

//search tha database for the same username, password combination
$result = $conn->query("SELECT * FROM credentials WHERE USERNAME = '$username' and PASSWORD = '$password'");

// format results
$row = mysqli_fetch_array($result);
if($row['USERNAME'] == $username && $row['PASSWORD'] == $password){
    echo "Login sucess. Welcome ".$row['USERNAME'];

    // update global variables
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['logged_in'] = '1';
    $_SESSION['wrong_input'] = '0';
    $_SESSION['AFM'] = $row['AFM'];

    $afm = $_SESSION['AFM'];

    $empstatus = $conn->query("SELECT * FROM employee WHERE AFM = '$afm'");

    if($empstatus->num_rows){
        $_SESSION['STATUS'] = 'employee';
    }else{
        $_SESSION['STATUS'] = 'employer';
    }

    //redirect to home page
    header('Location: index.php');

}else {
    echo "Login failed";
    //redirect to log-in page
    //update global variable
    $_SESSION['wrong_input'] = '1';
    $_SESSION['username'] = 'None';
    $_SESSION['password'] = 'None';
    $_SESSION['logged_in'] = '0';
    header('Location: log_in.php');
}

?>