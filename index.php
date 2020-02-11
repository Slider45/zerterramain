<?php
include 'PagesFunction/connection.php';

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
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <script src="js/homeJS.js"></script>
  <link rel="stylesheet" type="text/css" href="sass/sass.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <title>zerTERRA</title>

</head>

<style>



  .cover1{
    /* The image used */
    background: url(images/Banner1.jpg);
    /* Set a specific height */
    height: 100%;
    /* Create the parallax scrolling effect */
    position: relative;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
  }
</style>

<body>

  <div class="parallax" style="background: url(images/Banner.jpeg); ">
    <div class="hero-text" id="hero-text">
      <p class="first">TAKE CARE OF NATURE</p>
      <p class="second">recycle your food scraps and help us protect our environment</p>
      <a href="Log-in.php"><button class="parallax-btn">GET IN TOUCH</button></a>
    </div>
    <nav>
      <div class="menu-icon">
        <i class="fa fa-bars fa-2x"></i>
      </div>
      <div class="nav-brand">
        <div class="logo">
          <img src="images/weblogo.png">
        </div>
      </div>

      <?php
      include 'header.php';
      ?>
    </nav>
  </div>

  <!--navbar script -->




  <!-- BANNER1 -->
  <section class="hero is-dark">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
          YOUR HOME MADE <span style="color:#99cc67;">FERTILIZER</span>
        </h1>
      </div>
    </div>
  </section>
  <!-- -->
  <br>

  <div class="section" style="color: black;">
    <div class="container">
      <div class="item columns" id="item-columns">
        <div class="column" id="col">
          <p style="text-align: center; font-size: 5px;">
            <img src="images\icon\Eat.png" alt="" class="imgg">
          </p>
          <p class="item-title is-size-3 has-text-centered">
            <span style="font-weight: bold;">EAT</span>
            <p class="column-content">Different grades of paper are used to produce a range of everyday items – from papers and magazines to advertising leaflets.</p>
          </p>
        </div>

        <div class="column is-4" id="col" style="border: 0px solid red;">
          <p style="text-align: center; font-size: 5px;">
            <img src="images\icon\deposit.png" alt="" class="imgg">
          </p>
          <p class="item-title is-size-3 has-text-centered">
            <span style="font-weight: bold;">DEPOSIT</span>
            <p style="text-align: justify; margin-top: 5px;">Different grades of paper are used to produce a range of everyday items – from papers and magazines to advertising leaflets.</p>
          </p>
        </div>

        <div class="column is-4" id="col" style="border: 0px solid red;">
          <p style="text-align: center; font-size: 5px;">
            <img src="images\icon\decompost.png" alt="" class="imgg">
          </p>
          <p class="item-title is-size-3 has-text-centered">
            <span style="font-weight: bold;">DECOMPOST</span>
            <p style="text-align: justify; margin-top: 5px;">Different grades of paper are used to produce a range of everyday items – from papers and magazines to advertising leaflets.</p>
          </p> 
        </div>
      </div>
    </div>
  </div>

  <!-- hero2 -->
  <section class="hero is-dark">
    <div class="hero-body">
      <div class="container">
        <h1 class="title is-1" >
         MAKE YOUR <span style="color:#99cc67;">FOOD SCRAPS</span> MORE USEFUL
       </h1>
       <p class="subtitle has-text-centered">      
       </p>
     </div>
   </div>
 </section>
 <!-- -->

 <div class="triangle">
 </div>

 <!-- MORE INFO -->
 <div class="section">
  <div class="container" id="more-info">
    <div class="columns">
      <div class="column" id="column-img">
        <img src="images\plainlogo2.png" alt="Placeholder image">
      </div>
      <div class="column" id="column-info">
        <p class="item-title is-size-3 has-text-centered">
          <span style="font-weight: bold;">
            HOW TO IMPROVE OUR RECYCLING PROCESS
          </span>
          <p style="text-align: justify; margin-top: 5px;">Recycling is a process to change (waste) materials into new products to prevent waste of potentially useful materials, reduce the consumption of fresh raw materials, reduce energy usage, reduce air pollution (from incineration) and water pollution (from landfilling) by reducing the need for "conventional" waste disposal, and lower greenhouse gas emissions as compared to plastic production. Recycling is a key component of modern waste reduction and is the third component of the "Reduce, Reuse and Recycle" waste hierarchy.

            Recyclable materials include many kinds of glass, paper, metal, plastic, textiles, and electronics. The composting or other reuse of biodegradable waste—such as food or garden waste—is also considered recycling. Materials to be recycled are either brought to a collection center or picked up from the curbside, then sorted, cleaned, and reprocessed into new materials bound for manufacturing.
          </p>
        </p>
      </div>
    </div>
  </div>
</div>
<!-- -->

<hr class="new5">

<!-- PRODUCT DETAILS -->
<div class="section" id="product-details">
  <div class="container">
    <h1 class="title is-size-2" style="text-align: center; margin-top: 5px;">PRODUCT DETAILS</h1>
    <figure class="image" style="text-align: center; margin-top: 50px;">
      <img src="images\product-detail-raw.png" alt="Placeholder image">
    </figure>
  </div>
</div>
<!-- -->

<!--banner2-->

<div class="cover1">
  <div class="heading">
    <p class="sub1">
      Zerterra
    </p>
    <p class="sub2">
      is a home-made organic fertilizer make made from food scrap.
    </p>
    <button class="button1" id="showModal3">ORDER NOW</button>
      <form class="" method="post">
       <div class="container" id="app">
        <div id="image-modal" class="modal">
          <div class="modal-background"></div>
          <div class="modal-content" id="order-modal-content">
           <div class="modal-card" id="order-modal">
            <header class="modal-card-head">
              <p class="modal-card-title">PRE-ORDER</p>

              <button class="delete" aria-label="close" id="image-modal-close"></button>
            </header>
            <section class="modal-card-body">

              <div class="field">
                <div class="control">
                  <input class="input1" name="first_name" type="text" placeholder="First Name" required="">
                </div>
                <div class="control">
                  <input class="input1" name="last_name" type="text" placeholder="Last Name" required="">
                </div>
                <div class="control">
                  <input class="input1" name="email" type="email" placeholder="Email" required="">
                </div>
                <div class="control">
                  <input type="number" maxlength="13" class="input1" name="contactnumber" placeholder="Contact Number" required="">
                </div>
                <div>
                 <input class="input1" name="address" type="text" placeholder="Address" required="">
               </div>
             </div>
             <div class="control">
              <textarea class="textarea1" name="message" placeholder="Message"></textarea>
            </div>
            <div></div>
            <button  class="btn" id="SendOrder" name="sendMSG" type="submit">ORDER NOW&nbsp&nbsp<i class="fas fa-paper-plane"></i></button>
            <div></div>
          </section>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
</form>









<?php
if (isset($_POST['sendMSG'])) {
  $email_to = "admin@zerterra.com";
  $email_subject = "Email subject";
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; 
    $email_from = $_POST['email']; // required
    $contactnumber = $_POST['contactnumber']; // not required
    $address = $_POST['address']; // required
    $message = $_POST['message']; // required

    function clean_string($string)
    {
      $bad = array("content-type", "bcc:", "to:", "cc:", "href");
      return str_replace($bad, "", $string);
    }

    $email_message = "Pre-Order details below.\n\n";
    $email_message .= "Email: " . clean_string($email_from) . "\n";
    $email_message .= "First Name: " . clean_string($first_name) . "\n";
    $email_message .= "Last Name: " . clean_string($last_name) . "\n";
    $email_message .= "Contact number: " . clean_string($contactnumber) . "\n";
    $email_message .= "Address: " . clean_string($address) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: ' . $email_to . "\r\n" .
    'Reply-To: ' . $email_from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    $mail = mail($email_to, $email_subject, $email_message, $headers);
    if( $mail === true ) {

      include 'PagesFunction/query_orders.php';

    }else{


     echo "<script>alert('Message not sent! Please try again!'); </script>";


    }

  }
  ?>






  <!-- -->
<!-- 
  <footer class="footer-distributed">

    <div class="footer-left">
      <img src="images/weblogo.png" class="web-img">
      <p class="footer-links">
        <a href="index.php">HOME | </a>
        <a href="ContactUs.php">CONTACT US | </a>
        <a href="AboutUs.php">ABOUT US</a>
      </p>

      <p class="footer-company-name">© 2019 ZerterraPh</p>
    </div>

    <div class="footer-center">
      <div>
        <i class="fa fa-map-marker"></i>
        <p><span>UCC CONG. RD.. CALOOCAN CITY</p>
        </div>


        <button class="button is-success is-medium"  aria-label="close" id="msgeClose">Close</button>

      </div>
    </section>
    <!-- <footer class="modal-card-foot1" id="modal-card-foot">
     
    </footer> --> 
  <!-- </div>
</div>
</div>
</div> --> 











  <!-- -->

  <footer class="footer-distributed">

    <div class="footer-left">
      <img src="images/weblogo.png" class="web-img">
      <p class="footer-links">
        <a href="index.php">HOME | </a>
        <a href="ContactUs.php">CONTACT US | </a>
        <a href="AboutUs.php">ABOUT US</a>
      </p>

      <p class="footer-company-name">© 2019 ZerterraPh</p>
    </div>

    <div class="footer-center">
      <div>
        <i class="fa fa-map-marker"></i>
        <p><span>UCC CONG. RD.. CALOOCAN CITY</span></p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p><span> (+63) 995 495 0384 |  (+63) 906 593 9808</span></p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="#"><span>support@zerterra.com</span></a></p>
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



   <script>
  var btnmsg = document.querySelector('#SendOrder');
  var modalDlgmsg = document.querySelector('#thankyouModal');
  var imageModalCloseBtnmsg = document.querySelector('#msgeClose');
  btn.addEventListener('click', function(){
    modalDlgmsg.classList.add('is-active');
  });

  imageModalCloseBtnmsg.addEventListener('click', function(){
    modalDlgmsg.classList.remove('is-active');
  });
    // .click(function() {
    //   .addClass("is-active");  
    // });

    // $(".modal-close").click(function() {
    //    $(".modal").removeClass("is-active");
    // });
  </script>  


    <script>

   //   $("#SendOrder").click(function() {
     //   $("#thankyouModal").addClass("is-active");  
     // });

     // $("#msgeClose").click(function() {
      // $("#thankyouModal").removeClass("is-active");
    // });

   </script>


   <!-- FOOTER -->









   <script type="text/javascript" src="dist/js/modal-fx.min.js"></script>
   <script type="text/javascript" src="js/script.js"></script>
   <script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>
   <script type="text/javascript" src="js/script.js"></script>



 </body>
 </html>
