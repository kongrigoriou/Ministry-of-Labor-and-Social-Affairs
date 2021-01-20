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
        <link rel="stylesheet" href="profile.css">
        <link rel="stylesheet" href="index.css">
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
                        <li class="custom_li"><a class="custom_a" href="contact.php">Επικοινωνία</a></li>
                        <li class="custom_li"><a class="custom_a" href="#ministry">Υπουργείο</a></li>
                        <li class="custom_li"><a class="custom_a" href="#law">Νομοθεσία</a></li>
                        <li class="custom_li"><a class="custom_a" href="#apply">Αιτήσεις</a></li>
                </ul>
            </div>

            <!-- right portion of the navigation bar -->
            <div class="right_nav">
                <ul class="custom_ul">
                    <li class="custom_li"><a href="covid19.php" class="cov custom_a">Κορωνοϊός</a></li>
                    <li class="custom_li"><a class="custom_a" href="#help">Βοήθεια</a></li>
                    <li class="custom_li"><a class="custom_a" href="#login"><span style = "color: red;">Αποσύνδεση</span></a></li>
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

        <?php
            if ($_SESSION["STATUS"] == 'employer'){
        ?>
            <!-- Design -->
            <div class="Design">
                <div class="bg_rec"></div>

                <!-- User Interface -->
                <div class="profile">
                    <a href="./settings.php">
                        <div class="edit_text">Επεξεργασία</div>
                    </a>
                    <div class="pic" >
                        <div class="overlay"></div>

                        <label for="hidden">
                            <img src="Assets/User/edit_picture.png" class="edit_pic">
                        </label>

                        <input id="hidden" type="file" accept="image/*"/>
                
                    </div>

                    <div class="basic_info">
                        <ul style="list-style: none;">

                            <li class="_name"> <?php printf("%s %s", $row['NAME'], $row['SURNAME']);?> </li>
                            <li class="_misc">Εργοδότης</li>
                            <li class="_misc"><?php printf("%s", $row2['NAME']);?></li>
                        </ul>
                    </div>
                </div>
                <div class="info_rec_l">
                    <div class="info_title_l">
                        Προσωπικά Στοιχεία
                    </div>
                    <p class = "info" style = "margin-top:12%"><b>Όνομα:</b> <?php printf("%s", $row['NAME']);?></p>
                    <p class = "info"><b>Επίθετο:</b> <?php printf("%s", $row['SURNAME']);?></p>
                    <p class = "info"><b>ΑΦΜ:</b> <?php printf("%s", $afm);?></p>
                    <p class = "info"><b>AMA:</b> <?php printf("%s", $row['AMA']);?></p>
                    <p class = "info"><b>E-mail:</b> <?php printf("%s", $row['EMAIL']);?></p>


                </div>
                <div class="info_rec_r">
                    <div class="info_title_r">
                        Στοιχεία Επιχείρησης
                    </div>
                    <p class = "info" style = "margin-top:12%"><b>Όνομα Επιχείρησης:</b> <?php printf("%s", $row2['NAME']);?></p>
                    <p class = "info"><b>ΑΦΜ Επιχείρησης:</b> <?php printf("%s", $row2['AFM']);?></p>
                    <a href="employers.php" class = "info">Διαχείριση εργαζομένων</a>
                </div>
                <div class="side_rec">
                    <div class="side_title">
                        Ιστορικό Αιτήσεων
                    </div>
                    <ul class="side_ul">
                        <li class="side_li">14/12/1969 - Έλα</li>
                        <li class="side_li">13/12/1969 - Πάνο</li>
                        <li class="side_li">12/12/1969 - Άι</li>
                        <li class="side_li">11/12/1969 - Και</li>
                        <li class="side_li">10/12/1969 - Γαμις</li>
                        <li class="side_li">09/12/1969 - Ρε</li>
                        <li class="side_li">08/12/1969 - Μανγκα</li>
                    </ul>
                </div>
            </div>
        <?php
            }
        ?>
        
        <?php
            if ($_SESSION["STATUS"] == 'employee'){
        ?>
                        <!-- Design -->
                        <div class="Design">
                <div class="bg_rec"></div>

                <!-- User Interface -->
                <div class="profile">
                    <a href="./settings.php">
                        <div class="edit_text">Επεξεργασία</div>
                    </a>
                    <div class="pic" >
                        <div class="overlay"></div>

                        <label for="hidden">
                            <img src="Assets/User/edit_picture.png" class="edit_pic">
                        </label>

                        <input id="hidden" type="file" accept="image/*"/>
                
                    </div>

                    <div class="basic_info">
                        <ul style="list-style: none;">

                            <li class="_name"> <?php printf("%s %s", $row['NAME'], $row['SURNAME']);?> </li>
                            <li class="_misc">Εργαζόμενος</li>
                            <li class="_misc"><?php printf("%s", $row2['NAME']);?></li>
                        </ul>
                    </div>
                </div>
                <div class="info_rec_l">
                    <div class="info_title_l">
                        Προσωπικά Στοιχεία
                    </div>
                    <p class = "info" style = "margin-top:12%"><b>Όνομα:</b> <?php printf("%s", $row['NAME']);?></p>
                    <p class = "info"><b>Επίθετο:</b> <?php printf("%s", $row['SURNAME']);?></p>
                    <p class = "info"><b>ΑΦΜ:</b> <?php printf("%s", $afm);?></p>
                    <p class = "info"><b>AMA:</b> <?php printf("%s", $row['AMA']);?></p>
                    <p class = "info"><b>E-mail:</b> <?php printf("%s", $row['EMAIL']);?></p>


                </div>
                <div class="info_rec_r">
                    <div class="info_title_r">
                        Στοιχεία Εργασίας:
                    </div>
                    <p class = "info" style = "margin-top:12%"><b>Όνομα Επιχείρησης:</b> <?php printf("%s", $row2['NAME']);?></p>
                    <p class = "info"><b>Κατάσταση Εργασίας:</b><?php

                        if($covform->num_rows != 0){
                            if($covtype == 'suspend' ){
                                printf(" Σε αναστολή");    
                            }elseif($covtype == 'remote'){
                                printf(" Τηλεργασία");
                            }
                        }else{
                            printf("Δια ζώσης");
                        }
                        
                    
                    ?></p>
                </div>
                <div class="side_rec">
                    <div class="side_title">
                        Ιστορικό Αιτήσεων
                    </div>
                    <ul class="side_ul">
                        <li class="side_li">14/12/1969 - Έλα</li>
                        <li class="side_li">13/12/1969 - Πάνο</li>
                        <li class="side_li">12/12/1969 - Άι</li>
                        <li class="side_li">11/12/1969 - Και</li>
                        <li class="side_li">10/12/1969 - Γαμις</li>
                        <li class="side_li">09/12/1969 - Ρε</li>
                        <li class="side_li">08/12/1969 - Μανγκα</li>
                    </ul>
                </div>
            </div>
        <?php
            }
        ?>
        

    </body>
</html>