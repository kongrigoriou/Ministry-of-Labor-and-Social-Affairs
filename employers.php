<!-- initialize php session -->
<?php

    //start the session
    session_start();
    //initialize the global variables
    if(!isset($_SESSION['logged_in'])){
        $_SESSION['logged_in'] = '0';
        $_SESSION['wrong_input'] = '0';
        $_SESSION['user_name'] = 'None';
        $_SESSION['username'] = 'None';
        $_SESSION['password'] = 1;
        $_SESSION['AFM'] = -1;
    }

?>

<!DOCTYPE html>
<html lang="en" xml:lang="gr">
    <head>
        <!-- Connect css file -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="employers.css">
        <title>Υπουργείο Εργασίας - Προφίλ</title>
    </head>


    <body>
        <?php
            require './profilefunc.php';
            
        ?>
        <!-- Navigation Bar Background -->
        <div class= "navigation">
            <div class="nav_rectangle"></div>

            <!-- left portion of the navigation bar -->
            <div class="left_nav">
                <ul class="custom_ul">
                        <li class="custom_li"><a class="custom_a" href="#contact">Επικοινωνία</a></li>
                        <li class="custom_li"><a class="custom_a" href="#ministry">Υπουργείο</a></li>
                        <li class="custom_li"><a class="custom_a" href="#law">Νομοθεσία</a></li>
                        <li class="custom_li"><a class="custom_a" href="#apply">Αιτήσεις</a></li>
                </ul>
            </div>

            <!-- right portion of the navigation bar -->
            <div class="right_nav">
                <ul class="custom_ul">
                    <li class="custom_li"><a href="#covid" class="cov custom_a">Κορωνοϊός</a></li>
                    <li class="custom_li"><a class="custom_a" href="#help">Βοήθεια</a></li>
                    <li class="custom_li"><a class="custom_a" href="#login"><b>Προφιλ</b></a></li>
                </ul>
            </div>

            <!-- ministry button -->
            <div class="ministry_logo">
                <!-- it redirects to the starting page -->
                <a href="./index.php">
                    <img src="Assets/Navigation/gd_logo.png" class="center_rel">
                </a>
            </div>

            <!-- stay home icon -->
            <div class="stay_home">
                <img src="Assets/Navigation/menoume_svg.svg" class="sth">
            </div>

            <!-- language icon -->
            <div class="language">
                <a href="./index_en.php">
                    <img src="Assets/Navigation/us_flag.png" class="flag">
                </a>
            </div>
        </div>
        
        <div class = "square"></div>

        <div class = "container horizontal-center flex-center">
            <div class = "rec">
                <h3 style = "text-align: center; margin-top: 5%;">Διαχείρηση εργαζομένων</h3>
                <h4 style = "margin: 5%;">Αριθμός εργαζομένων:</h1>
                
            </div>
        </div>
