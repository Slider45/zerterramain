
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
    <link rel="stylesheet" type="text/css" href="sass/contact-us.css">
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

   
<?php
include 'user-header.php';

?>

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
    <div class="sidebar">
    <header><span><figure class="image is-128x128" style="margin-top: 70px;">
  <img class="is-rounded" src="images\avatar.png">
</figure></header>
      <a href="index.php">
        <i class="fas fa-qrcode"></i>
        &nbspDashboard
      </a>
      <a href="profile.php" >
        <i class="fas fa-user"></i>
        &nbspProfile
      </a>
      <a href="acc_setting.php">
        <i class="fas fa-pen-nib"></i>
        &nbspEdit Profile
      </a>
      <a href="login-setting.php">
        <i class="fas fa-cog"></i>
        &nbspLogin Setting
      <a href="request-repair.php">
        <i class="fas fa-inbox"></i>
        &nbspRequest Repair
      </a>
      <a href="contact-us.php"  class="active">
        <i class="fas fa-envelope-open-text"></i>
        &nbspContact Us
      </a>
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
    <div class="container">
        <div class="header">
            <h1 class="title">
            CONTACT US
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
                <label for="email">E-mail </label>
                </div>
                <div class="col-75">
                <input type="text" id="email" name="email" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                <label for="subject">Subject </label>
                </div>
                <div class="col-75">
                <input type="text" id="subject" name="subject" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                <label for="message">Message</label>
                </div>
                <div class="col-75">
                <textarea id="message" name="message" placeholder="Write something.." style="height:80px;width:100%;"></textarea>
                </div>
            </div>
            <div class="row">
                <button class="button is-rounded" id="submit">Submit</button>
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