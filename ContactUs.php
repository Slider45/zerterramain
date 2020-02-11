<?php
include 'PagesFunction/connection.php';

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
  <link rel="icon" href="images/plainlogo.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <script src="js/homeJS.js"></script>
  <link rel="stylesheet" type="text/css" href="sass/ContactUs.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
  <title>Contact Us</title>
</head>

<body>
 <div class="parallax">
  <nav>
    <div class="menu-icon">
      <i class="fa fa-bars fa-2x"></i>
    </div>
    <div class="nav-brand">
      <div class="logo">
        <img src="images\weblogo.png">
      </div>
    </div>
    <!-- NAVBAR -->


    
    <?php
    include 'header.php';


    ?>

    <!--navbar script -->

    <!-- -->
    <div class="container1">
      <div class="container">
        <div class="header">
          <br>
          <br>
          <h1>CONTACT US</h1>
        </div>
      </div>


      <hr class="hr">

      <?php


      if (isset($_POST["sendmsg"])) 
      {
        include 'PagesFunction/MailingFunction.php';

      }
      ?>

      <div class="container" id="form">
        <div class="columns">
          <div class="column is-8" id="column-form">
            <div class="field">
              <form action="" method="POST"accept-charset="utf-8"    >
                <div class="control">
                 <input class="input"
                 name="fname" type="text" placeholder="Firstname" required>
               </div>
               <div>
                <input class="input" name="lname" type="text"
                placeholder="Lastname" required>
              </div>                   
              <div class="control">
                <input class="input" type="email" name="email" placeholder="Email" required>
              </div>
              <div class="control">
                <input class="input" type="text" name="subject" placeholder="Subject" required>
              </div>
              <div class="control">
               <textarea class="textarea" name="msg_body" placeholder="Message"></textarea>
             </div>
             <button class="button is-medium" id="sendmodal" name="sendmsg" type="submit">Send Message</button>
           </form>



         </div>
       </div>













       <div class="column" id="column-flipcard">
        <div class="card1" id="info-card">

          <header class="card-header">
            <p class="card-header-title">
              INFORMATION
            </p>
          </header>


          <div class="card-content" id="contact-mid">
            <div class="columns" id="col">
              <p class="ucc"><i class="fas fa-home"></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp UNIVERSITY OF CALOOCAN CITY</p>
            </div>
            <div class="columns" id="col">
              <p class="num1"><i class="fas fa-tty"></i> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp (+63) 995 495 0384</p>
            </div>
            <div class="columns" id="col">
              <p class="num2"><i class="fas fa-tty"></i> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp (+63) 906 593 9808</p>
            </div>
            <div class="columns" id="col">
              <p class="facebook"><i class="fab fa-facebook-square"></i> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp facebook.com/zerterra</p>
            </div>
            <div class="columns" id="col">
              <p class="email"><i class="fas fa-envelope-open-text"></i> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  support@zerterra.com</p>
            </div>
          </div>

          <footer class="card-footer" id="card-footer">
            <div class="column-icon">
              <li><a><img src="images\icon\paymaya.png"></a></li>
              <li><a><img src="images\icon\bpi.png"></a></li>
              <li><a><img src="images\icon\gcash.png"></a></li>
              <li><a><img src="images\icon\paypal.png"></a></li>
            </div>
          </footer>

        </div>
      </div>

    </div>
  </div>
</div>


<!-- FOOTER  -->
<footer class="footer-distributed">

  <div class="footer-left">
    <img src="images/weblogo.png">
    <p class="footer-links">
     <a href="index.php">HOME | </a>
     <a href="ContactUs.php">CONTACT US | </a>
     <a href="AboutUs.php">ABOUT US </a>
   </p>

   <p class="footer-company-name">© 2019 ZerterraPh</p>
 </div>

 <div class="footer-center">
  <div>
   <i class="fa fa-map-marker"></i>
   <p><span>UCC CONG. RD.. CALOOCAN CITY</p>
   </div>

   <div>
    <i class="fa fa-phone"></i>
    <p><span> (+63) 995 495 0384 |  (+63) 906 593 9808</p>
    </div>

    <div>
      <i class="fa fa-envelope"></i>
      <p><a href="#"><span>support@zerterra.com</a></p>
      </div>
    </div>

    <div class="footer-right">
      <p class="footer-company-about">
        <span>Zerterra</span>
        Zerterra is a home-made organic fertilizer maker made from food scrap.
      </p>
      <div class="footer-icons">
        <a href="https://www.facebook.com/zerterra"><i class="facebook">
          <img src="images\icon\fbIconWhite.png" alt="facebook">
        </i></a>
        <a href="https://twitter.com/Zerterra1"><i class="twitter">
          <img src="images\icon\twitterIconWhite.png" alt="twitter">
        </i></a>
        <a href="#"><i class="instagram">
          <img src="images\icon\igIconWhite.png" alt="instagram">
        </i></a>
        <a href="https://aboutme.google.com/u/0/?referer=gplus"><i class="gplus">
          <img src="images\icon\GPlusIconWhite.png" alt="gplus">
        </i></a>
      </div>
    </div>
  </footer>
  <!-- -->

  <!-- -->

  <script>





  </script>
  <script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>

  <script type="text/javascript" src="js/script.js"></script>

</body>
</html>