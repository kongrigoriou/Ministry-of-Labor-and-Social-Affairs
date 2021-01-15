<!DOCTYPE html>
<html lang="en" xml:lang="gr">
    <head>
        <!-- Connect css file -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="http://netdna.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./index.css">
        <title>Υπουργείο Εργασίας</title>
        
    </head>

    <body>
        <div class="container">
            <div class="row">
                <!-- navigation bar backround -->
                <div class= "navigation">
                    <div class="nav_rectangle"></div>
    
                    <!-- left portion of the navigation bar -->
                    <div class="left_nav">
                        <ul class="custom_ul">
                                <li class="custom_li"><a class="custom_a" href="contact.php">Επικοινωνία</a></li>
                                <li class="custom_li"><a class="custom_a" href="#ministry">Υπουργείο</a></li>
                                <li class="custom_li"><a class="custom_a" href="profile.php">Νομοθεσία</a></li>
                                <li class="custom_li"><a class="custom_a" href="#apply">Αιτήσεις</a></li>
                        </ul>
                    </div>
    
                    <!-- right portion of the navigation bar -->
                    <div class="right_nav">
                        <ul class="custom_ul">
                            <li class="custom_li"><a href="covid19.php" class="cov custom_a">Κορωνοϊός</a></li>
                            <li class="custom_li"><a class="custom_a" href="test.php">Βοήθεια</a></li>
                            <li class="custom_li"><a class="custom_a" href="log_in.php">Σύνδεση</a></li>
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
            </div>
            
            <!-- Main text of the landing page -->
            <div class="row">
                <h1 class="custom_h1"><b> Υπουργείο Εργασίας <br> και Κοινωνικών Υποθέσεων</b></h1>
            </div>
                
        
                <!-- Search Bar -->
        </div>

        <div class="container">
            <div class="row">
                <div class="inner-addon left-addon search_container">
                    <span class="glyphicon glyphicon-search" ></span>
                    <input type="text" class="form-control" placeholder="Search" />
                </div>
            </div>
        </div>
        
        
    </body>

</html>