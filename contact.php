<!DOCTYPE html>
<html>
<head>
    <!-- Connect css file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">    
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="contact.css">
    <script src="contact.js"></script>


    <title>Επικοινωνία</title>
</head>

<body>

    <div class = "container">
        <div class="row">
                 <!-- navigation bar backround -->
            <div class="navigation">
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
    </div>
       
 
        <div class="row">
            <div class ="BrCr">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Αρχική</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Επικοινωνία</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row row-header">
            <h1 class="contact">Επικοινωνία</h1>
        </div>



        <div class="container vertical-center flex-center">
            <span class="square">
                <h3>E-mail</h3>
                

            </span>
            <span class="square">
                <h3>Τηλέφωνο</h3>
                <br>
                <ul style="text-align: left;">
                    <li>Γενικές Υπηρεσίες</li>
                    <li>Γενική Γραμματεία Πρόνοιας</li>
                    <li>Γενικη Γραμματεία Κοινωνικών Ασφαλίσεων</li>
                    <li>Σώμα επιθεώρησης Εργασίας</li>
                </ul>

            </span>
            <span class="square">
                <h3>Κλείστε ραντεβού</h3>
                <br>
                <p>Λόγω Κορωνοιού τα ραντεβού θα πραγματοποιούνται<br> μόνο  
                    για τις περιπτώσεις που είναι αδύνατο να <br>
                    εξυπηρετηθούν τηλεφωνικά ή μέσω e-mail. </p>
                <br>
                <br>
                <button type="button" class="btn btn-primary" onclick="myFunction()">Κλείστε ραντεβού</button>
            </span>       
        </div>

        <div class="container horizontal-center flex-center">
            <div id="rectangle" >
                <div class="row row-content ">
                    <div class="horizontal-center">
                        <h3>Συμπληρώστε τα στοιχεία σας</h3>
                    </div>
                    <br>
                    <div class=" horizontal-center">
                        <form>
                            <div class="form-group row">
                                <label for="firstname" class="col-md-2 col-form-label">First Name</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="firstname" name="firstname"
                                        placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastname" class="col-md-2 col-form-label">Last Name</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="lastname" name="lastname"
                                        placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="telnum" class="col-12 col-md-2 col-form-label">Contact Tel.</label>
                                <div class="col-5 col-sm-4 col-md-5">
                                    <input type="tel" class="form-control" id="telnum" name="telnum" placeholder="Tel. number">
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="meeting" class="col-12 col-md-2 col-form-label">Ημερομηνία</label>
                                <div class="col-5 col-sm-4 col-md-5">
                                    <input type="date" class="form-control" id="meeting" name="meeting">
                                </div>
                                <div class="col-7 col-sm-6 col-md-5">
                                    <div class="input-group">
                                        <label for="appt" class="col-12 col-md-7 col-form-label">Select a time: </label>
                                        <input type="time" class="form-control" id="appt" name="appt">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="emailid" class="col-md-2 col-form-label">Email</label>
                                <div class="col-md-10">
                                    <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="telnum" class="col-12 col-md-2 col-form-label">Λόγος ραντεβού</label>
                                <div class = "col-md-10">
                                    <div class="form-check">
                                            <select class="form-control">
                                                <option>Λόγος 1</option>
                                                <option>Λόγος 2</option>
                                                <option>Λόγος 3</option>
                                                <option>Λόγος 4</option>
                                            </select>
                                    </div>
                                </div>

                            <div class="form-group row">
                                <label for="feedback" class="col-md-2 col-form-label">Your Feedback</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" id="feedback" name="feedback" rows="12"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-md-2 col-md-10">
                                    <button type="submit" class="btn btn-primary">Send Feedback</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-md">
                    </div>
                </div>
            </div>
        </div>

       

</body>

</html>