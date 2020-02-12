<?php

session_start();


include '../PagesFunction/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
    <link rel="icon" href="images/plainlogo.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <script src="js/homeJS.js"></script>
    <link rel="stylesheet" type="text/css" href="sass/acc_setting.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <title>zerTERRA</title>
</head>

<body>

    <!--NAVBAR-->

    <nav class="navbar is-dark">
        <div class="navbar-brand">
            <a class="navbar-item" href="index.php">
                <img src="images/weblogo.png">
            </a>
            <div class="navbar-burger burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>




        <div id="navMenu" class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item" id="userid"> <?= $_SESSION['email']?>&nbsp<i class="fas fa-user"></i></a>
                <a class="navbar-item" href="index.php"><i class="fas fa-sign-out-alt"></i>&nbspLogout</a>
            </div>
        </div>

    </nav>


    <!-- script navbar -->


    <script>
        (function () {
            var burger = document.querySelector('.burger');
            var nav = document.querySelector('#' + burger.dataset.target);
            burger.addEventListener('click', function () {
                burger.classList.toggle('is-active');
                navMenu.classList.toggle('is-active');

            });


        })();
    </script>

    <!-- END OF NAVBAR -->

    <!-- SIDE BAR -->
    <div class="w3-sidebar w3-bar-block w3-card">
    <a href="index.php" class="w3-bar-item w3-button w3-hover-white"><h3 class="w3-bar-item">Name</h3></a> 
    <hr class="hr"></hr>
    <a href="profile.php" class="w3-bar-item w3-button w3-hover-white" id="profile"><i class="fas fa-user"></i> &nbsp&nbspProfile</a>
    
    <button class="w3-button w3-block w3-left-align w3-hover-white" id="acc_setting" onclick="myAccFunc()"><i class="fas fa-cog"></i> &nbsp&nbspAccount Settings <i class="fa fa-caret-down"></i></button>
    <div id="demoAcc" class="w3-hide w3-white w3-card">
        <a href="" class="w3-bar-item w3-button w3-hover-white"><i class="fas fa-pen-nib"></i> &nbsp&nbspPersonal Information</a>
        <a href="login_setting.php" class="w3-bar-item w3-button w3-hover-white"><i class="fas fa-lock"></i> &nbsp&nbspSecurity and Login</a>
        <a href="" class="w3-bar-item w3-button w3-hover-white"><i class="fas fa-file-signature"></i> &nbsp&nbspTerms of Service</a>
        <a href="" class="w3-bar-item w3-button w3-hover-white"><i class="fas fa-user-shield"></i> &nbsp&nbspData Policy</a>
    </div>

    <button class="w3-button w3-block w3-left-align w3-hover-white" onclick="myAccFunc1()"><i class="fas fa-question-circle"></i> &nbsp&nbspHelp & Support <i class="fa fa-caret-down"></i>
    </button>
    <div id="demoAcc1" class="w3-hide w3-white w3-card">
        <a href="#" class="w3-bar-item w3-button w3-hover-white">Help Center</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-white">Support Inbox</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-white">Report a problem</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-white">Terms & Policies</a>
    </div>
    </div>

    <script>
    function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
    }

    function myAccFunc1() {
    var x = document.getElementById("demoAcc1");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
    }
    </script>

    <!-- END OF SIDE BAR -->
    <section class="section">
    <div class="container" id="form_edit">
        <div class="header">
            <h1 class="title">
             PERSONAL INFORMATION
            </h1>
        </div>

        <div class="container1">
            <form>
            <div class="row">
                <div class="col-25">
                <label for="fname">First Name </label>
                </div>
                <div class="col-75">
                <input type="text" id="fname" name="firstname" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                <label for="lname">Last Name </label>
                </div>
                <div class="col-75">
                <input type="text" id="lname" name="lastname" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                <label for="address">Username </label>
                </div>
                <div class="col-75">
                <input type="text" id="username" name="username" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                <label for="contact">Contact Number </label>
                </div>
                <div class="col-75">
                <input type="text" id="contact" name="contact" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                <label for="address">Address </label>
                </div>
                <div class="col-75">
                <input type="text" id="address" name="address" placeholder="">
                </div>
            </div>
            <div class="row">
                <button class="button is-rounded" id="save">Save Changes</button>
            </div>
            <div class="row">
                <button class="button is-danger is-rounded" id="cancel">Cancel</button>
            </div>
            </form>
        </div>

    </div>
    </section>

    <div>
        <p id="alrights">@2019 ZerterraPh</p>
    </div>

</body>

</html>