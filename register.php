<?php include('register_function.php'); ?> 

<!DOCTYPE html>
<html lang="en" xml:lang="gr">
    <head>
        <!-- Connect css file -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="http://netdna.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="register.css">

        <title>Εγγραφή</title>
        <script src="contact.js"></script>

    </head>

<body>

    <!-- navbar -->
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
                    <li class="custom_li"><a class="custom_a" href="#help">Βοήθεια</a></li>
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
    <!-- end of navbar -->
    </div>

    <!-- breadcrumbs -->
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

    <!-- backround square -->
    <div class="square"></div>

    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-5 mx-auto">
              <div class="auth-form-light text-left p-5">
                <h4>Δημιουργία λογαριασμού</h4>
                <h6 class="font-weight-light">Συμπληρώστε τα παρακάτω στοιχεία.</h6>
                <form class="pt-3" action="register.php" method="POST">
                    <!-- display errors at the top -->
                    <?php include('errors.php'); ?>
                    <div class="form-group">
                        <input type="text" pattern=".{4,20}" required title="Length must be 4 to 20 characters." required class="form-control form-control-lg" id="username" placeholder="Όνομα Χρήστη" name="username">
                    </div>
                    <div class="form-group">
                        <input type="text" pattern=".{2,20}" required title="Length must be 2 to 20 characters." required class="form-control form-control-lg" id="name" placeholder="Όνομα" name="name">
                    </div>
                    <div class="form-group">
                        <input type="text" pattern=".{2,20}" required title="Length must be 2 to 20 characters." required class="form-control form-control-lg" id="surname" placeholder="Επίθετο" name="surname">
                    </div>
                    <div class="form-group">
                        <input type="text" pattern="\d*" minlength="9" maxlength="9" required title="Length must be 9 characters" required class="form-control form-control-lg" id="AFM" placeholder="ΑΦΜ" name="AFM">
                    </div>
                    <div class="form-group">
                        <input type="text" pattern="\d*" minlength="11" maxlength="11" required title="Length must 11 characters." class="form-control form-control-lg" id="AMA" placeholder="Αριθμός Μητρώου Ασφαλισμένου" name="AMA">
                    </div>
                    <div class="form-group">
                        <input type="text" pattern=".{2,20}" required title="Length must be 2 to 20 characters." required class="form-control form-control-lg" id="gender" placeholder="Φύλο" name="gender">
                    </div>
                    <div class="form-group">
                        <input type="email" pattern=".{5,30}" required title="Length must be 5 to 30 characters." required class="form-control form-control-lg" id="email" placeholder="Ηλ. Ταχυδρομείο" name="email">
                    </div>
                    <div class="form-group">
                        <input type="text" pattern="\d*" minlength="9" maxlength="9" required title="Length must be 5 to 30 characters." required class="form-control form-control-lg" id="company_AFM" placeholder="ΑΦΜ Εταιρίας" name="company_AFM">
                    </div>
                    <div class="form-group">
                        <input type="password" pattern=".{4,20}" required title="Minimum 4 to 20 characters." class="form-control form-control-lg" id="password" placeholder="Κωδικός Πρόσβασης" name="password">
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio" value="employee" id="flexRadioDefault1" required>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Είμαι Εργαζόμενος
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio" value="employer" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Είμαι Εργοδότης
                        </label>
                    </div>

                    
                    <div class="my-2 d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <label class="form-check-label text-muted">
                            <input type="checkbox" class="form-check-input" required> Έχω διαβάσει και συμφωνώ με τους </label>
                            <a href="https://www.lipsum.com/" target="_blank" rel="noopener noreferrer" class="text-primary">όρους χρήσης.</a>
                        </div>
                    </div>

                    <div class="mt-3">
                        <!-- <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" onclick=test() href="index.php">ΣΥΝΔΕΣΗ</a> -->
                        <!-- <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" onclick=test()>ΕΓΓΡΑΦΗ</a> -->
                        <button type="submit" name ="register" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">ΕΓΓΡΑΦΗ</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>  
    
</body>

</html>