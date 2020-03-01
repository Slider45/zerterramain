
<?php
session_start();
include '../PagesFunction/connection.php';
// $orderNum = $_GET['SerialNumber'];
$fname = $_GET['first_name'];
$lname = $_GET['last_name'];
$email = $_GET['email'];
$contact = $_GET['contactnumber'];
$address = $_GET['address'];
$message = $_GET['message'];

$sql = "SELECT id FROM pending_order_list";
$result=mysqli_query($con,$sql);
$pendingCount=mysqli_num_rows($result);
$pendingCount++;


$orderNum=date("Ymd-His-") . 0 .$pendingCount;


 // $serialNum = $_POST['SerialNumber'];
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
        <p class="modal-card-title">CUSTOMER INFORMATION</p>
        <a href="../index.php"><button class="delete" id="closeMdl"aria-label="close"></button></a>
      </header>
      <section class="modal-card-body">




        <?php

        // include '../PagesFunction/connection.php';

        // $serialNum = $_POST['SerialNumber'];



        $sql="SELECT * FROM tblusers WHERE Email='$email'";
        $result = $con->query($sql);

        if ( $result->num_rows > 0) {
          ?>

          <!-- modal here -->
          <div class="notification is-danger alert">
            <center>
             <strong>EMAIL ALREADY TAKEN.<br>PLEASE CHECK YOUR SERIAL NUMBER!</strong> 
           </center>
         </div>

       </section>
       <footer class="modal-card-foot" >
        <a href="../index.php"><button class="button is-success" style="font-family: Montserrat;"><i class="fas fa-arrow-left"></i>&nbspBACK</button></a>
      </footer>
    </div>
  </div>
  <!-- end modal -->



  <?php
}else{

 $sqlorder = "SELECT * FROM pending_order_list WHERE Email= '$email' AND is_approved = '0'";
 $orderResult = $con->query($sqlorder);

 if ($orderResult->num_rows > 2) {
  ?>

  <!-- modal here -->

  <div class="notification is-danger alert" style="background-color: #feecf0;color: #cc0f35">
    <center>
      TOO MANY PRE-ORDER FOUND IN<br>
      EMAIL ADDRESS<br>
      <strong class="is-size-4"><?php echo $email; ?></strong> <br>
      WE WILL CONTACT YOU AS SOON US OUR SALE REPRESENTATIVE IS AVAILABLE!
      <br><br>
      THANK YOU FOR TRUSTING ZERTERRA
    </center>
  </div>

</section>
<footer class="modal-card-foot" >
  <a href="../index.php"><button class="button is-success" style="font-family: Montserrat;"><i class="fas fa-arrow-left"></i>&nbspBACK</button></a>
</footer>
</div>
</div>

<!-- end modal -->
<?php

}else{
 ?>



 <form action="OrderNumber.php" method="POST" accept-charset="utf-8">
  <center>



   <div class="notification is-primary is-light" style = "background-color: #ebfffc;color: #00947e;">
     <strong> PRE-ORDER FOR</strong> <br>

     <div class="columns">
      <div class="column is-3">
        <div class="control">
         <input  class="input is-primary" id="input" type="text" name="fname" value="Firstname :">
         <input  class="input is-primary" id="input" type="text" name="fname" value="Lastname :">
         <input  class="input is-primary" id="input" type="text" name="fname" value="Email :">
         <input  class="input is-primary" id="input" type="text" name="fname" value="Contact :">
         <input  class="input is-primary" id="input" type="text" name="fname" value="Address :">
         <input  class="input is-primary" id="input" type="text" name="fname" value="Message :">
       </div>
     </div>
     <div class="column is-9">
      <div class="field" >
       <div class="control">
         <input  class="input is-primary" id="input" type="text" name="fname" value="<?php echo $orderNum; ?>" readonly>
         <input  class="input is-primary" id="input" type="text" name="fname" value="<?php echo $fname; ?>" readonly>
         <input  class="input is-primary" id="input" type="text" name="lname" value="<?php echo $lname; ?>" readonly>
         <input  class="input is-primary" id="input" type="text" name="email" value="<?php echo $email; ?>" readonly>
         <input  class="input is-primary" id="input" type="text" name="contact" value="<?php echo $contact; ?>" readonly>
         <input  class="input is-primary" id="input" type="text" name="address" value="<?php echo $address; ?>" readonly> 
         <input  class="input is-primary" id="input" type="textarea" name="message" value="<?php echo $message; ?>" readonly>
       </div>
     </div>
   </div>


 </div>


 HAS BEEN RECEIVED<br>PLEASE CHECK YOU EMAIL FOR MORE INFO<br>
 OR SEND US AN EMAIL AT<br>support@zerterra.com<br><br>


 "PLEASE CLICK CONFIRM"


</div>
</center>

</section>
<footer class="modal-card-foot" >
  <a href="../"><button class="button is-success" name="sendOrder" style="font-family: Montserrat;"><i class="far fa-thumbs-up"></i>&nbspCONFIRM</button></a>
</footer>
</form>
</div>
</div>
<?php


// }
}
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
