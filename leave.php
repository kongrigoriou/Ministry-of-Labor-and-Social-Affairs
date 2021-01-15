<!DOCTYPE html>
<html>
<head>
    <!-- Connect css file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">    
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
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
                                <li id="personal"><strong>Personal</strong></li>
                                <li id="payment"><strong>Payment</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title myriad">Account Information</h2> <input type="email" name="email" placeholder="Email Id" class="myriad" /> <input type="text" name="uname" placeholder="UserName" /> <input type="password" name="pwd" placeholder="Password" /> <input type="password" name="cpwd" placeholder="Confirm Password" />
                                </div> <input type="button" name="next" class="next action-button myriad" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Personal Information</h2> <input type="text" name="fname" placeholder="First Name" /> <input type="text" name="lname" placeholder="Last Name" /> <input type="text" name="phno" placeholder="Contact No." /> <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Payment Information</h2>
                                    <div class="radio-group">
                                        <div class='radio' data-value="credit"><img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div>
                                        <div class='radio' data-value="paypal"><img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div> <br>
                                    </div> <label class="pay">Card Holder Name*</label> <input type="text" name="holdername" placeholder="" />
                                    <div class="row">
                                        <div class="col-9"> <label class="pay">Card Number*</label> <input type="text" name="cardno" placeholder="" /> </div>
                                        <div class="col-3"> <label class="pay">CVC*</label> <input type="password" name="cvcpwd" placeholder="***" /> </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3"> <label class="pay">Expiry Date*</label> </div>
                                        <div class="col-9"> <select class="list-dt" id="month" name="expmonth">
                                                <option selected>Month</option>
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>August</option>
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option>
                                                <option>December</option>
                                            </select> <select class="list-dt" id="year" name="expyear">
                                                <option selected>Year</option>
                                            </select> </div>
                                    </div>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="make_payment" class="next action-button" value="Confirm" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Have Successfully Signed Up</h5>
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