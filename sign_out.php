<?php
ob_start();
session_start();

//update session variables to its original values
$_SESSION['logged_in'] = '0';
$_SESSION['user_name'] = 'None';
$_SESSION['username'] = 'None';
$_SESSION['password'] = 1;
$_SESSION['AFM'] = -1;
$_SESSION['STATUS'] = 'None';
$_SESSION['name'] = 'None';

//redirect to home
header('Location: index.php');

?>