<!DOCTYPE html>
<html>
<head>
    <!-- Connect css file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">    
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="covid19.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- page title -->
    <title>Κορωνοϊός</title>
</head>

<body>

        <div class="row">
                 <!-- navigation bar backround -->
            <div class="navigation">
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
                        <li class="custom_li"><a href="#covid" class="cov custom_a"><b>Κορωνοϊός</b></a></li>
                        <li class="custom_li"><a class="custom_a" href="#help">Βοήθεια</a></li>
                        <li class="custom_li"><a class="custom_a" href="log_in.php">Σύνδεση</a></li>
                    </ul>
                </div>

                <!-- ministry button -->
                <div>
                    <!-- it redirects to the starting page -->
                    <a href="./index.php">
                        <img src="Assets/Navigation/gd_logo.png" class="center_rel">
                    </a>
                </div>

                <!-- stay home icon -->
                <div>
                    <img src="Assets/Navigation/menoume_svg.svg" class="sth">
                </div>

                <!-- language icon -->
                <div>
                    <a href="./index_en.php">
                        <img src="Assets/Navigation/us_flag.png" class="flag">
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class ="BrCr">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Αρχική</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Κορωνοϊός</li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <!-- header -->
        <div class="container">
            <h1 class="covid_h1">Κορωνοϊός</h1>
        </div>

        <!-- covid information backround  -->
        <div class="container-fluid">
            <!-- backround square -->
            <div class="row">
                <div class="square"></div>                    
            </div>
        </div>

        
        <!-- first element -->
        <div class="row">
            <!-- 1 column -->
            <div class="col-12">
                <!-- carousel -->
                <div id="carouselExampleFade" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="#emp">
                            <img class="d-block w-100" src="Assets/covid/boss.jpg" alt="Ergodotis">
                        </a>
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="covid_h5"><b>Οδηγίες για τον Εργοδότη</b></h5>
                            <p>Kατευθυντήριες οδηγίες για ένα υγιές εργασιακό περιβάλλον.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="#empee">
                            <img class="d-block w-100" src="Assets/covid/workers.jpg" alt="Ergazomenos">
                        </a>
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="covid_h5"><b>Οδηγίες για τον Εργαζόμενο</b></h5>
                            <p>Κατευθυντήριες οδηγίες για μια υγιή εργασιακή ζωή.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="#sick">
                            <img class="d-block w-100" src="Assets/covid/covid.jpg" alt="Krousma">
                        </a>
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="covid_h5"><b>Οδηγίες σε περίπτωση εκδήλωσης Κρούσματος</b></h5>
                            <p>Kατευθυντήριες οδηγίες για την αντιμετώπιση του κρούσματος στον εργασιακό χώρο.</p>
                        </div>
                    </div>
                    </div>
                    
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                <!-- end of carousel -->
                </div>
            <!-- end of column -->
            </div>
        <!-- end of first element -->
        </div>

        <!-- grid initialize -->
        <div class="container">

            <!-- regulations for employer -->
            <div class="row">
                <div class="col-12">
                    <div class="employer" id="emp">
                        <h2 class="covid_h2">Οδηγίες για τον Εργοδότη</h2>
                        <p class="covid_h5">
                            1. Επικαιροποίηση της Εκτίμησης Επαγγελματικού Κινδύνου ως προς την αξιολόγηση του κινδύνου και τα μέτρα πρόληψης και προστασίας έναντι του κορωνοϊού. <br> 
                            2. Ενημέρωση των εργαζομένων για την κίνδυνο λοίμωξης από τον κορωνοϊό και τα μέτρα πρόληψης και προστασίας, βάσει και των οδηγιών του ΕΟΔΥ. <br>
                            3. Διαβούλευση με τους εργαζόμενους και ενθάρρυνση για υποβολή σχετικών προτάσεων. <br>
                            4. Λήψη μέτρων περιβαλλοντικής και ατομικής υγιεινής, όπως τακτικός αερισμός των χώρων εργασίας, συντήρηση των συστημάτων εξαερισμού - κλιματισμού και καθαρισμός επιφανειών, συσκευών κ.λπ., σύμφωνα και με τις οδηγίες του ΕΟΔΥ. <br>
                        </p>
                    </div>
                <!-- end of column -->
                </div>
            <!-- end of element -->
            </div>

            <!-- regulations for employee -->
            <div class="row">
                <div class="col-12">
                    <div class="employee" id="empee">
                        <h2 class="covid_h2">Οδηγίες για τον Εργαζόμενο</h2>
                        <p class="covid_h5">
                            1. Το πλύσιμο και η απολύμανση των χεριών είναι ιδιαιτέρως απαραίτητα: <br>
                            &emsp; <b>α</b>) Πριν από την επαφή με τα μάτια, τη μύτη,το στόμα (φαγητό ή κάπνισμα, επίσκεψη στην τουαλέτα κ.λπ.) <br>
                            &emsp; <b>β</b>) Σε κάθε περίπτωση που τα χέρια μπορεί να ήλθαν σε επαφή με βιολογικά υγρά (σάλιο κ.λπ.), ακόμη κι αν χρησιμοποιήθηκαν γάντια. <br> <br>
                            2. Όταν βήχουμε ή φταρνιζόμαστε, καλύπτουμε το στόμα μας με τον αγκώνα ή ένα χαρτομάντιλο και πλένουμε ή απολυμαίνουμε τα χέρια μας: <br>
                            &emsp; <b>α</b>) Aπορρίπτουμε το χαρτομάντιλο, αμέσως μετά τη χρήση, σε σκεπαστό κάδο <br>
                            &emsp; <b>β</b>) Aποφεύγουμε τις κοντινές επαφές ειδικά με άτομα που παρουσιάζουν συμπτώματα όπως πυρετό, βήχα, πονόλαιμο και καταρροή. <br> <br>
                            3. Οι εργαζόμενοι που παρουσιάζουν ένα ή περισσότερα από τα παρακάτω συμπτώματα νόσου όπως πυρετό, βήχα, πονόλαιμο, καταρροή, θα πρέπει να τηρήσουν τις οδηγίες του ΕΟΔΥ: <br>
                            &emsp; <b>α</b>) Eνημερώνουμε τον εργοδότη ή την υπηρεσία μας <br>
                            &emsp; <b>β</b>) Eπικοινωνούμε με το θεράποντα ιατρό μας <br>
                            &emsp; <b>γ</b>) Επικοινωνούμε με τον ΕΟΔΥ (τηλέφωνα επικοινωνίας 210.52.12.054 ή 1135).
                        </p>
                    </div>
                <!-- end of column -->
                </div>
            <!-- end of element -->
            </div>

            <!-- measures for covid case in the workplace -->
            <div class="row">
                <div class="col-12">
                    <div class="case" id="sick">
                        <h2 class="covid_h2">Απαραίτητες ενέργειες σε περίπτωση εκδήλωσης των συμπτωμάτων σε εργαζόμενο κατά τη διάρκεια εργασίας του</h2>
                        <p class="covid_h5">
                            Εργαζόμενος που εμφανίσει αιφνιδίως τα προαναφερόμενα συμπτώματα αναμένει σε χώρο όπου δε θα
                            έρχεται σε επαφή με άλλα άτομα, ενημερώνονται ο ιατρός εργασίας (όπου υπάρχει) και ο προϊστάμενος
                            όταν δεν υπάρχει ιατρός εργασίας και ειδοποιείται άμεσα ο ΕΟΔΥ ώστε να παράσχει τις απαραίτητες
                            οδηγίες, οι οποίες πρέπει να ακολουθούνται πιστά. Ο χώρος όπου παρέμεινε ο εργαζόμενος πρέπει να
                            καθαρίζεται και να απολυμαίνεται, μετά την αποχώρησή του, από το προσωπικό καθαριότητας, σύμφωνα
                            με τις οδηγίες του ΕΟΔΥ όπως αναγράφονται στην ιστοσελίδα του (www.eody.gov.gr, ενότητα: «Οδηγίες
                            για τον περιβαλλοντικό καθαρισμό μη υγειονομικών μονάδων που έχουν εκτεθεί στον ιό SARS-CoV-2»).
                            Σε περιπτώσεις που είναι εφικτό, συνιστάται η εξ’ αποστάσεως εργασία. <br>
                        </p>
                    </div>
                </div>
            </div>

            <!-- additional information -->
            <div class = row>
                <div class="col-12">
                    <div class="extra">
                        <h2 class = covid_h2 id="info">Περισσότερες πληροφορίες</h2>
                        <p class="covid_h5">Για περισσότερες πληροφορίες πατήστε <a href="https://www.ypakp.gr/uploads/files/3501.pdf">εδώ</a></p>

                    </div>
                <!-- end of column -->
                </div>
            <!-- end of element -->
            </div>

        <!-- end of grid -->
        </div>

</body>
</html>