<?php

session_start();
include 'PagesFunction/connection.php';

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

<body onload="setTimeout('loadingTargetPage()',6000)">


<div class="bg">




<form action="Log-in.php" method="POST" accept-charset="utf-8">
  


<div class="card">
<div class="card-content">
    <div class="content">

        <div class="logo">
            <figure class="image is-128x128">
            <img src="images/plainlogo.png">
            </figure>
        </div>

        <div class="header">
        <h2> LOGIN </h2>
        </div>

        <div class="field">
            <p class="control has-icons-left has-icons-right">
                <input class="input" type="email" name="email" placeholder="Email" required>
                <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
                </span>
            </p>
        </div>

        <div class="field">
            <p class="control has-icons-left">
                <input class="input" type="password" name="password" placeholder="Password" required>
                <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
                </span>
            </p>
        </div>
        
        <div class="columns">
            <div class="column">
            <label class="checkbox">
                <input type="checkbox">
                Remember me
            </label>
            </div>
            <div class="column">
                <a class="forgot" href="">Forgot password?</a>
            </div>
        </div>
 
        <div class="buttons">
            <button class="button is-rounded" type="submit" name="loginUser"  onclick="launch_toast()">LOGIN</button>
        </div>

        <div class="last">
            @2019 ZerterraPh
        </div>

    </div>
</div>
</form>
</div>



<a class="home" href="index.php"><i class="fa fa-home"></i> </a>



<?php
if (isset($_POST['loginUser'])) {


  include 'PagesFunction/query_login.php';

  }


  ?>

<!-- script -->

<script>
    function launch_toast() {
      var x = document.getElementById("toast")
      x.className = "show";
      setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
    }
  </script>

<script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>
</body>

</html>