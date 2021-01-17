<html lang="en" xml:lang="gr">

<!-- start session -->
<?php
  session_start()
?>

    <head>
        <!-- Connect css file -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="http://netdna.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="log_in.css">

        <title>Σύνδεση</title>
        <!-- include ajax -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'</script>
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
                    <li class="custom_li"><a class="custom_a" href="test.php">Σύνδεση</a></li>
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

    <div class="container-fluid">
        <!-- backround square -->
        <div class="row">
            <div class="square"></div>                    
        </div>
    </div>

    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-5 mx-auto">
              <div class="auth-form-light text-left p-5">
                <h4>Καλώς ήλθατε</h4>
                <h6 class="font-weight-light">Συνδεθείτε για να συνεχίσετε.</h6>
                <form class="pt-3" action="log_in_function.php" method="POST">
                  <div class="form-group">
                    <input type="text" pattern=".{4,20}" required title="Length must be 4 to 20 characters." required class="form-control form-control-lg" id="username" placeholder="Όνομα Χρήστη" name="username">
                  </div>
                  <div class="form-group">
                  <input type="password" pattern=".{4,20}" required title="Minimum 4 to 20 characters." class="form-control form-control-lg" id="password" placeholder="Κωδικός Πρόσβασης" name="password">
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" id="btn" value="Login">ΣΥΝΔΕΣΗ</button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Να παραμείνω συνδεδεμένος. </label>
                    </div>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Δεν έχετε λογαριασμό; <a href="register.php" class="text-primary">Δημιουργία</a>
                  <?php
                      if ($_SESSION["wrong_input"] == '1'){
                  ?>
                          <div class="text center mt-4 warning">
                            <p class="warning">Λανθασμένο όνομα χρήστη ή κωδικός.</p>
                          </div>
                  <?php
                      $_SESSION["wrong_input"] = '0';
                      }
                  ?>
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