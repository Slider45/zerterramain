<?php

session_start();
include 'PagesFunction/connection.php';
if(isset($_SESSION["userEmail"]))
{
 header("location:zerterraph_user/");
}




?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
  <link rel="icon" href="images/plainlogo.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <script src="js/homeJS.js"></script>
  <link rel="stylesheet" type="text/css" href="sass/login.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <title>Login</title>

  <style>
    .bg {
      /* The image used */
      background-image: url(images/login_bg.png);
    }
  </style>

</head>

<body>


  <div class="bg">




    <form action="Log-in.php" method="POST" accept-charset="utf-8">



      <div class="card">
        <div class="card-content">
          <div class="content">

            <div class="logo">
              <figure class="image is-128x128">
                <img src="images/loginimg.png">
              </figure>
            </div>

            <div class="header">
              <h2> LOGIN </h2>
            </div>
            <div class="text-danger"><?php if(isset($message)) { echo $message; } ?></div> 
            <div class="field">
              <p class="control has-icons-left has-icons-right">
                <input class="input" type="email" name="email" placeholder="Email" value="<?php if(isset($_COOKIE["member_email"])) { echo $_COOKIE["member_email"]; } ?>">
                <span class="icon is-small is-left">
                  <i class="fas fa-envelope"></i>
                </span>
                <!-- <span class="icon is-small is-right">
                  <i class="fas fa-check"></i>
                </span> -->
              </p>
            </div>

            <div class="field">
              <p class="control has-icons-left">
                <input class="input" type="password" name="password" placeholder="Password"
                value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>">
                <span class="icon is-small is-left">
                  <i class="fas fa-lock"></i>
                </span>
              </p>
            </div>

            <div class="columns">
              <div class="column">
                <label class="checkbox"name="remember">
                  <input type="checkbox" name="remember"> Remember me
                </label>
              </div>
              <div class="column">
                <a class="forgot" href="">Forgot password?</a>
              </div>
            </div>

            <div class="buttons">
              <button class="button is-rounded" type="submit" name="loginUser"  data-target="#modalnotif">LOGIN</button>
            </div>

            <div class="last">
              @2019 ZerterraPh
            </div>

          </div>

          <?php
          if (isset($_POST['loginUser'])) {


            include 'PagesFunction/query_login.php';

          }

        
          ?>



        </div>
      </form>
    </div>



    <a class="home" href="index.php"><i class="fa fa-home"></i> </a>





    <!-- script -->

    <script>
   /*document.querySelectorAll('.modal-button').forEach(function(el) {
      el.addEventListener('click', function() {
        var target = document.querySelector(el.getAttribute('data-target'));

        target.classList.add('is-active');


        target.querySelector('.modal-close').addEventListener('click', function(){
          target.classList.remove('is-active');
        });
      });
    });*/


  </script>

  <script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>
</body>

</html>