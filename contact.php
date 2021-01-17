<!DOCTYPE html>
<html>
<head>
    <!-- Connect css file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">    
    <link rel = "stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.css">

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="contact.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
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

        <div class = "square2"></div>

        <div class="container horizontal-center flex-center white">
            <div class = "rectangle2">
                <h5 style = "color: red"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                    </svg> Σημαντικό</h5>
                <p>Λόγω κορωνοϊού τα νέα ωράρια λειτουργείας του υπουργείου είναι: Δευτέρα - Παρασκευή 8:30 - 15:00.</p>
                <p>Η εξυπηρέτηση του κοινού πραγματοποιείται τηλεφωνικά ή μέσω e-mail. <br>
                    Για ελάχιστες περιπτώσεις πραγματοποιούνται ραντεβού με όλα τα απαραίτητα μέτρα προστασίας.</p>
            </div>
        </div>

        <div class= "container">
            <div class="row row-header align-items-center">
                <div class="col-sm-4 col-md-3">
                    <h1 class="contact">Επικοινωνία</h1>
                </div>
                
            </div>
        </div>



        <div class="container vertical-center flex-center white">
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
                <a href = "#meet"><button type="button" class="btn btn-primary buttongr" onclick="myFunction()">Κλείστε ραντεβού</button></a>
            </span>       
        </div>

        <div class="container horizontal-center flex-center white">
            <div id="rectangle" >
                <div class="row row-content" id = "meet">
                    <div class="horizontal-center">
                        <h3>Συμπληρώστε τα στοιχεία σας</h3>
                    </div>
                    <br>
                    <div >
                        <form>
                            <div class="form-group row">
                                <label for="firstname" class="control-label col-sm-2">Όνομα</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control whitebg" id="firstname" name="firstname"
                                        placeholder="Όνομα">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastname" class="control-label col-sm-2">Επίθετο</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="lastname" name="lastname"
                                        placeholder="Επίθετο">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="telnum" class="control-label col-sm-2">Τηλέφωνο</label>
                                <div class="col-5 col-sm-4 col-md-5">
                                    <input type="tel" class="form-control" id="telnum" name="telnum" placeholder="Τηλέφωνο">
                                </div>

                            </div>

                            <div class= "form-group row">
                                <div class="row justify-content-center mx-0">
                                    <div class="col-lg-8">
                                        <div class="card border-0">
                                            <form autocomplete="off">
                                                <div class="card-header bg-dark">
                                                    <div class="mx-0 mb-0 row justify-content-sm-center justify-content-start px-1"> <i class="fa fa-calendar"></i><input type="text" id="dp1" class="datepicker input2" placeholder="Pick Date" name="date" readonly> </div>
                                                </div>
                                                <div class="card-body p-3 p-sm-5">
                                                    <div class="row text-center mx-0 black">
                                                        <div class="col-md-2 col-4 my-1 px-2">
                                                            <div class="cell py-1">9:00AM</div>
                                                        </div>
                                                        <div class="col-md-2 col-4 my-1 px-2">
                                                            <div class="cell py-1">9:30AM</div>
                                                        </div>
                                                        <div class="col-md-2 col-4 my-1 px-2">
                                                            <div class="cell py-1">10:00AM</div>
                                                        </div>
                                                        <div class="col-md-2 col-4 my-1 px-2">
                                                            <div class="cell py-1">10:30AM</div>
                                                        </div>
                                                        <div class="col-md-2 col-4 my-1 px-2">
                                                            <div class="cell py-1">11:00AM</div>
                                                        </div>
                                                        <div class="col-md-2 col-4 my-1 px-2">
                                                            <div class="cell py-1">11:30AM</div>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center mx-0 black">
                                                        <div class="col-md-2 col-4 my-1 px-2">
                                                            <div class="cell py-1">12:00AM</div>
                                                        </div>
                                                        <div class="col-md-2 col-4 my-1 px-2">
                                                            <div class="cell py-1">12:30AM</div>
                                                        </div>
                                                        <div class="col-md-2 col-4 my-1 px-2">
                                                            <div class="cell py-1">13:00AM</div>
                                                        </div>
                                                        <div class="col-md-2 col-4 my-1 px-2">
                                                            <div class="cell py-1">13:30PM</div>
                                                        </div>
                                                        <div class="col-md-2 col-4 my-1 px-2">
                                                            <div class="cell py-1">14:00PM</div>
                                                        </div>
                                                        <div class="col-md-2 col-4 my-1 px-2">
                                                            <div class="cell py-1">14:30PM</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="form-group row">
                                <label for="emailid" class="col-md-2 col-form-label">Email</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="telnum" class="col-12 col-md-2 col-form-label">Λόγος ραντεβού</label>
                                <div class = "col-md-8">
                                    <div class="form-check">
                                            <select class="form-control">
                                                <option>Λόγος 1</option>
                                                <option>Λόγος 2</option>
                                                <option>Λόγος 3</option>
                                                <option>Λόγος 4</option>
                                            </select>
                                    </div>
                                </div>

                            <!-- <div class="form-group row">
                                <label for="feedback" class="col-md-2 col-form-label">Σχόλια</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="feedback" name="feedback" rows="5" placeholder="(Προαιρετικά)"></textarea>
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <div class="offset-md-2 col-md-10">
                                    <button type="submit" class="btn btn-primary button2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                        </svg>Υποβολή
                                    </button>
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