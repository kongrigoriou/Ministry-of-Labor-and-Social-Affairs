<?php include('employers_function.php'); ?> 

<!DOCTYPE html>
<html lang="en" xml:lang="gr">
<!-- initialize php session -->
<?php

    //start the session
    session_start();

?>

    <head>
        <!-- Connect css file -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="employers.css">
        <title>Υπουργείο Εργασίας - Προφίλ</title>
    </head>


    <body>
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
                <h3 style = "text-align: center;margin-top: 5%;">Διαχείρηση εργαζομένων</h3>
                <h4 style = "margin: 5%;">Αριθμός εργαζομένων: <?php printf("%d", $num); ?> </h4>
                <?php
                    while($row = mysqli_fetch_array($result)){
                        //get his info
                        $u_afm = $row['AFM'];
                        $temp_res = $conn->query("SELECT * FROM users WHERE AFM = '$u_afm'");
                        $temp = mysqli_fetch_array($temp_res);
                        $out = $temp['NAME'];
                        $out1 = $temp['SURNAME'];
                        $out2 = $temp['AFM'];
                        echo "<h4 style = \"margin-left: 5%; margin: 3%;\"> $out $out1 &emsp; $out2</h4>";
                    }
                ?>

                <a style = "margin: 5%;" href="covid19_form.php">Υποβάλλετε αίτηση για εργαζόμενο.</a>
            </div>
            
        </div>
