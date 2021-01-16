<!DOCTYPE html>
<html>
<head>
    <!-- Connect css file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="leave.css">


    <!-- page title -->
    <title>Αδεια</title>
</head>
<body>
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

    <div class = "bg_rec"></div>

    <!-- MultiStep Form -->
<div class="container-fluid">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2 pos">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3 myriad">
                <h2><strong>Άδεια Ειδικού Σκοπού</strong></h2>
                <p>Συμπληρώστε όλα τα πεδία για να συνεχίσετε</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar" class="myriad">
                                <li class="active myriad" id="account"><strong>Προσωπικά Στοιχεία</strong></li>
                                <li id="personal"><strong>Αιτιολόγηση Άδειας</strong></li>
                                <li id="payment"><strong>Στοιχεία Άδειας</strong></li>
                                <li id="confirm"><strong>Ολοκλήρωση</strong></li>
                            </ul> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title myriad">Προσωπικά Στοιχεία</h2> <input type="text" name="fname" placeholder="Όνομα" required/> <input type="text" name="lname" placeholder="Επίθετο" required/> <input type="text" name="phno" placeholder="Πατρώνυμο" required/> <input type="text" name="phno_2" placeholder="ΑΜΑ" required/>
                                </div> <input type="button" name="next" class="next action-button myriad" value="Επόμενο" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Αιτιολόγηση Άδειας</h2>
                                    <h3 class="fs-subtitle">Παρακαλώ επιλέξτε τις επιλογές που σας αντιπροσωπεύουν.</h2>

                                    <input type="checkbox" id="cat1" name="cat1" value="" style="float: left;" required>
                                    <label for="cat1">Γονέας παιδιών εγγεγραμένα σε βρεφικούς, βρεφονηπιακούς και παιδικούς σταθμούς.</label>

                                    <input type="checkbox" id="cat2" name="cat2" value="" required>
                                    <label for="cat2">Γονέας παιδιών που φοιτούν σε σχολικές μονάδες υποχρεωτικής εκπαίδευσης.</label>

                                    <input type="checkbox" id="cat3" name="cat3" value="" required>
                                    <label for="cat3">Γονέας παιδιών που φοιτούν σε ειδικά σχολεία ή σχολικές μονάδες ειδικής αγωγής.</label>

                                    <input type="checkbox" id="cat4" name="cat4" value="" required>
                                    <label for="cat4">Γονέας ατόμων με αναπηρία.</label>
                                    <!--
                                    <input type="text" name="fname" placeholder="Όνομα" required/> <input type="text" name="lname" placeholder="Επίθετο" required/> <input type="text" name="phno" placeholder="Πατρώνυμο" required/> <input type="text" name="phno_2" placeholder="ΑΜΑ" required/>
                                    -->
                                    </div> <input type="button" name="previous" class="previous action-button-previous" value="Προηγούμενο" /> <input type="button" name="next" class="next action-button" value="Επόμενο" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Στοιχεία Άδειας</h2>
                                    <input type="number" name="amt_days" placeholder="Πλήθος Ημερών" required>
                                    <input placeholder="Από" class="textbox-n" type="text" onfocus="(this.type='date')" id="date" required>
                                    <input placeholder="Έως" class="textbox-n" type="text" onfocus="(this.type='date')" id="date" required>
                                   
                                    </div> <input type="button" name="previous" class="previous action-button-previous" value="Προηγούμενο" /> <input type="button" name="next" class="next action-button" value="Επόμενο" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Επιτυχία !</h2> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h6>Η Άδεια Ειδικού Σκοπού έχει υποβληθεί επιτυχώς, και βρίσκεται σε επεξεργασία</h6>
                                            <h6>Σύντομ θα ενημερωθείτε για την εξέλιξή της.</h6>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>    <script src="leave.js"></script>


</body>