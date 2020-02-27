<?php

session_start();  
if(!isset($_SESSION["userEmail"]))
{
 header("location:../Log-in.php");
}



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
    <link rel="stylesheet" type="text/css" href="sass/status.css">
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
            var nav = document.querySelector('#navMenu' + burger.dataset.target);
            burger.addEventListener('click', function () {
                burger.classList.toggle('is-active');
                navMenu.classList.toggle('is-active');

            });

        })();
    </script>

    <!-- END OF NAVBAR -->

    <!-- SIDE BAR -->
  
    <div class="sidebar">
    <header><span>Name</header>
      <a href="index.php" class="active">
        <i class="fas fa-qrcode"></i>
        <span>Dashboard</span>
      </a>
      <a href="profile.php">
        <i class="fas fa-user"></i>
        <span>Profile</span>
      </a>
      <a href="acc_setting.php">
        <i class="fas fa-pen-nib"></i>
        <span>Edit Profile</span>
      </a>
      <a href="login-setting.php">
        <i class="fas fa-cog"></i>
        <span>Login Setting</span>
      </a>
      <a href="request-repair.php">
        <i class="fas fa-inbox"></i>
        <span>Request Repair</span>
      </a>
      <a href="contact-us.php">
        <i class="fas fa-envelope-open-text"></i>
        <span>Contact Us</span>
      </a>
      <!-- <a href="#">
        <i class="far fa-envelope"></i>
        <span>Contact</span>
      </a> -->
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

    <!-- side navbar -->

<!-- 
    <script>
        (function () {
            var burger = document.querySelector('.burger');
            var nav = document.querySelector('#' + burger.dataset.target);
            burger.addEventListener('click', function () {
                burger.classList.toggle('is-active');
                navMenu.classList.toggle('is-active');

            });


        })();
    </script> -->

    <!-- END OF SIDE NAVBAR -->

    <!-- END OF SIDE BAR -->
    <section class="section">
        <div class="container">
            <!-- <table class="table">
                <thead>
                    <tr>
                        <th>DATA STATUS</th>

                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td id="serialno">
                            <p style="padding:0; font-size: 60pt;"></p>
                            <span id="userinfo"></span>
                        </td>
                    </tr>
                    <tr>
                        <td id="serialno">
                            <p style="padding:0; font-size: 40pt;">100 days</p>
                            <span id="userinfo">Remaining Days</span>
                        </td>
                    </tr>


                </tbody>
            </table> -->

            <div class="notification is-info">
                <h1 id="title">DATA STATUS</h1>

                <div id="serialno">
                    <p style="padding:0; font-size: 40pt;"></p>
                    <span id="userinfo"></span>
                </div>

                <div id="serialno">
                    <p style="padding:0; font-size: 40pt;">100 days</p>
                    <p id="userinfo">Remaining Days</p>
                </div>

            </div>
        </div>
    </section>

    <div>
        <p id="alrights">@2019 ZerterraPh</p>
    </div>

</body>

</html>