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
    <header><span><figure class="image is-128x128" style="margin-top: 70px;">
      <img class="is-rounded" src="images\avatar.png">
    </figure></header>
    <a href="index.php"  class="active">
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
      <a href="contact-us.php">
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


    <?php
    $userid = $_SESSION['userID'];
    $sql = "SELECT * FROM tblusers WHERE id='$userid' AND is_active='1'";
    $res_data = $con->query($sql);
    while($row = mysqli_fetch_array($res_data)){
      $id = $row['id'];
      $serialNum = $row['SerialNumber'];
      $fname = $row['Firstname'];
      $lname = $row['Lastname'];
      $contact = $row['Contact'];
      $address = $row['Address']; 
      $email = $row['Email'];
      $rdays = $row['RemainingDays'];
      $dateReg = $row['DateRegistered'];
      $dateEnd= $row['DateExpired'];
      
    }

    $dateToday = date("Y/m/d");
    $start_date = strtotime($dateToday);
    $end_date = strtotime($dateEnd);

    $diffdate = ($end_date - $start_date)/60/60/24;

    ?>

    <section class="section">
      <div class="container">
        <div class="notification is-info">
          <h1 id="title" style="font-family:'Montserrat';font-size:40px;font-weight:bolder;">WARRANTY STATUS</h1>

          <div id="serialno">
            <p style="padding:0; font-size: 40px;"></p>
            <span id="userinfo"></span>
          </div>

          <div id="serialno">
            <input type="hidden" class="is-size-4" id="dateExp" value="<?php echo $dateEnd ?>" readonly>
            <input type="hidden" name="" value="<?php echo $rdays; ?>" >
            <p style="padding:0;font-family:'Montserrat';font-size:50pt;" id="Rdays"></p>
            <p id="userinfo" style="padding:0;font-family:'Montserrat';font-size:20px;">Remaining Days</p>
          </div>

        </div>
      </div>
    </section>

    <div class="footer">
      <p>@2019 ZerterraPh</p>
    </div>


    <script >
     // Set the date we're counting down to
     var dateExp = document.getElementById("dateExp").value;
     var countDownDate = new Date(dateExp).getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Output the result in an element with id="demo"
  document.getElementById("Rdays").innerHTML = days + "d | " + hours + "h | "
  + minutes + "m | " + seconds + "s ";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("Rdays").innerHTML = "EXPIRED";
  }
}, 1000);

</script>


</body>

</html>