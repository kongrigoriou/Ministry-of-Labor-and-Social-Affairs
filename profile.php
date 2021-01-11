<!DOCTYPE html>
<html lang="en" xml:lang="gr">
    <head>
        <!-- Connect css file -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="profile.css">
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
                    <li class="custom_li"><a class="custom_a" href="#login">Σύνδεση</a></li>
                </ul>
            </div>

            <!-- ministry button -->
            <div class="ministry_logo">
                <!-- it redirects to the starting page -->
                <a href="./index.html">
                    <img src="Assets/Navigation/gd_logo.png" class="center_rel">
                </a>
            </div>

            <!-- stay home icon -->
            <div class="stay_home">
                <img src="Assets/Navigation/menoume_svg.svg" class="sth">
            </div>

            <!-- language icon -->
            <div class="language">
                <a href="./index_en.html">
                    <img src="Assets/Navigation/us_flag.png" class="flag">
                </a>
            </div>
        </div>
        
        <!-- Design -->
        <div class="Design">
            <div class="bg_rec"></div>

            <!-- User Interface -->
            <div class="profile">
                <div class="pic">
                    <div class="overlay"></div>
                </div>

                <div class="basic_info">
                    <ul style="list-style: none;">
                        <li class="_name">Γιάννης Κοτρώνης </li>
                        <li class="_misc">Σκωτία</li>
                        <li class="_misc">13/12/1969</li>
                    </ul>
                </div>
            </div>
            <div class="info_rec_l">
                <div class="info_title_l">
                    Προσωπικά Στοιχεία
                </div>
            </div>
            <div class="info_rec_r">
                <div class="info_title_r">
                    Στοιχεία Εργαζομένου
                </div>
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
    </body>
</html>