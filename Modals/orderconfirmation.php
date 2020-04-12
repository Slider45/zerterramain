
<?php
session_start();
include '../PagesFunction/connection.php';





  $fname_order = $_POST['fname_order'];
  $lname_order = $_POST['lname_order'];
  $email_order = $_POST['email_order'];
  $contact_order = $_POST['contact_order'];
  $address_order = $_POST['address_order'];
  $message_order = $_POST['message_order'];

  $sql = "SELECT id FROM request_repair_list ";
	$result=mysqli_query($con,$sql);
	$requestCount=mysqli_num_rows($result);
	$requestCount++;


	$requestnum=date("ymd-Hi-") . 0 .$requestCount;



  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <title>Pre-Order</title>
  </head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
  <link rel="icon" href="images/plainlogo.png" type="image/x-icon" />
  <link rel="stylesheet" href="./sass/order-conf.css">

  <style>
    .input, .is-primary{
      font-family: Montserrat; 
      width: 100%;
    }

    #input {
      border: none;
      background-color: transparent;
      box-shadow: none;
      color: #00947e;
      font-family: Montserrat;
    }

  </style>


  <body onload="myFunction();" style="font-family: Montserrat;">
    <div class="pageloader is-bottom-to-top is-active" id="pgloadr"><span class="title"></span></div>



    <div class="modal modal-fx-fall" id="repairModal" overflow-y:visible;>
      <div class="modal-background"></div>
      <div class="modal-card">
        <header class="modal-card-head is-success">
          <p class="modal-card-title">PRE-ORDER CONFIRMATION</p>
          <a href="../index.php"><button class="delete" id="closeMdl"aria-label="close"></button></a>
        </header>
        <section class="modal-card-body">




          <?php

        // include '../PagesFunction/connection.php';

        // $serialNum = $_POST['SerialNumber'];



          $sql="SELECT * FROM pending_order_list WHERE Email='$email_order'";
          $result = $con->query($sql);

          if ( $result->num_rows > 2) {
            ?>

            <!-- modal here -->
            <div class="notification is-danger alert">
              <center>
               <strong>TOO MANY PRE-ORDER FOUND IN YOUR EMAIL<br>WE WILL CONTACT YOU AS SOON US OUR SALE REPRESENTATIVE IS AVAILABLE!<br>FOR BULK YOU MAY SEND AS AN EMAIL AT<br>support@zerterra.com</strong> 
             </center>
           </div>

         </section>
         <footer class="modal-card-foot" >
          <a href="../index.php"><button class="button is-success" style="font-family: Montserrat;"><i class="fas fa-arrow-left"></i>&nbspBACK</button></a>
        </footer>
      </div>
    </div>
    <!-- end modal -->




    <!-- end modal -->
    <?php

  }else{
   ?>



   <form  action="../PagesFunction/query_orders.php" method="POST" accept-charset="utf-8">
    <center>



     <div class="notification is-primary is-light" style = "background-color: #ebfffc;color: #00947e;">
       <strong> PRE-ORDER DETAILS</strong> <br>

       <div class="columns">
        <div class="column is-3">
          <div class="control">

           <input  class="input is-primary" id="input" type="text"  value="Firstname :">
           <input  class="input is-primary" id="input" type="text"  value="Lastname :">
           <input  class="input is-primary" id="input" type="text" value="Email :">
           <input  class="input is-primary" id="input" type="text"  value="Contact :">
           <input  class="input is-primary" id="input" type="text" value="Address :">
           <input  class="input is-primary" id="input" type="text"  value="Message :">
         </div>
       </div>
       <div class="column is-9">
        <div class="field" >
         <div class="control">
           <input  class="input is-primary" id="input" type="hidden" name="orderNum" value="<?php echo $orderNum; ?>" readonly>
           <input  class="input is-primary" id="input" type="text" name="fname_order" value="<?php echo $fname_order; ?>" readonly>
           <input  class="input is-primary" id="input" type="text" name="lname_order" value="<?php echo $lname_order; ?>" readonly>
           <input  class="input is-primary" id="input" type="text" name="email_order" value="<?php echo $email_order; ?>" readonly>
           <input  class="input is-primary" id="input" type="text" name="contact_order" value="(+63) <?php echo $contact_order; ?>" readonly>
           <input  class="input is-primary" id="input" type="text" name="address_order" value="<?php echo $address_order; ?>" readonly> 
           <input  class="input is-primary" id="input" type="textarea" name="message_order" value="<?php echo $message_order; ?>" readonly>
         </div>
       </div>
     </div>


   </div>

   IF ALL THE INFORMATION ABOVE ARE CORRECT.<br>PLEASE CLICK <p class="is-size-4">"CONFIRM"</p>


 </div>
</center>

</section>
<footer class="modal-card-foot" >
  <!-- <a href="../index.php"> -->
    <button class="button is-success" name="sendOrder" style="font-family: Montserrat;"><i class="far fa-thumbs-up"></i>&nbspCONFIRM</button>
  <!-- </a> -->
</footer>
</form>
</div>
</div>
<?php


// }
}
  include '../PagesFunction/query_orders.php';



?>








<script>




 function myFunction() {
  // var pgloader = document.querySelector('#pgloadr');
  // pgloader.classList.add('is-active');

  var warrantyModal = document.querySelector('#repairModal');
  var modalCloseBtn = document.querySelector('#closeMdl');
  warrantyModal.classList.add('is-active');
}



</script>
<script type="text/javascript" src="dist/js/modal-fx.min.js"></script>

<script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>

</body>
</html>
