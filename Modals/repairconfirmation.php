
<?php
session_start();
include '../PagesFunction/connection.php';
$serialNum = $_GET[SerialNumber];
$fname = $_GET[Fname];
$lname = $_GET[Lname];
$email = $_GET[email];
$contact = $_GET[contactNum];
$address = $_GET[address];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Repair Request</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
<link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />


<body onload="myFunction();" style="font-family: Montserrat;">
  <div class="pageloader is-bottom-to-top is-active" id="pgloadr"><span class="title"></span></div>



  <div class="modal modal-fx-fall" id="repairModal" overflow-y:visible;>
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head is-success">
        <p class="modal-card-title">REQUEST DETAIL CONFIRMATION</p>
        <a href="../index.php"><button class="delete" id="closeMdl"aria-label="close"></button></a>
      </header>
      <section class="modal-card-body">




        <?php

        // include '../PagesFunction/connection.php';

        $serialNum = $_GET[SerialNumber];

        $sqlrequest = "SELECT * FROM request_repair_list WHERE SerialNumber= '$serialNum' AND is_approved = '0'";
        $requestResult = $con->query($sqlrequest);







        if ($requestResult->num_rows > 3 ) {
          ?>

          <div class="notification is-danger alert" style="background-color: #feecf0;color: #cc0f35">
            <center>
              TOO MANY REQUEST FOUND IN<br>
              SERIAL NUMBER <br>
              <strong class="is-size-4"><?php echo $serialNumber; ?></strong> <br>
              WE WILL CONTACT YOU AS SOON US OUR TECHNICAL TEAM IS AVAILABLE!
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

    <?php
  }else{

   $sql="SELECT * FROM tblusers WHERE SerialNumber='$serialNum'";
   $result = $con->query($sql);
   if($result->num_rows < 1){
    ?>


    <div class="notification is-danger alert">
      <center>
       <strong>SERIAL NUMBER NOT REGISTERED.<br>PLEASE CHECK YOUR SERIAL NUMBER!</strong> 
     </center>
   </div>



 </section>
 <footer class="modal-card-foot" >
  <a href="../index.php"><button class="button is-success" style="font-family: Montserrat;"><i class="fas fa-arrow-left"></i>&nbspBACK</button></a>
</footer>
</div>
</div>














<?php
  // $msg = "SERIAL NUMBER NOT REGISTERED. PLEASE CHECK YOUR SERIAL NUMBER!";
}else{
  // while($row = mysqli_fetch_array($result)){



    // $serialNum = $row['SerialNumber'];
    // $fname = $row['Firstname'];
    // $lname = $row['Lastname'];
    // $contact = $row['Contact'];
    // $email = $row['Email'];
    // $address = $row['Address'];
    // $Rdays = $row['RemainingDays'];
    // $dateRegs = $row['DateRegistered'];
    // $dateEnds = $row['DateExpired'];
  
    //   $serialNumber = $_GET[SerialNumber];
    //     $fname = $_GET[Fname];
    //     $lname = $_GET[Lname];
    //     $email = $_GET[email];
    //     $contact = $_GET[contactNum];
    //     $address = $_GET[address];

  ?>
  <form action="repairconfirmation.php" method="POST" accept-charset="utf-8">
    <center>



     <div class="notification is-primary is-light" style = "background-color: #ebfffc;color: #00947e;">
       <strong> REQUEST REPAIR FOR</strong> <br>
       Serial # : <strong>
        <div class="field" >
         <div class="control" style="text-align: center;">
          <input  class="input" type="text" name="Fname" value="<?php echo $_GET[Fname]; ?>" readonly>
          <input  class="input" type="text" name="Lname" value="<?php echo $_GET[Lname]; ?>" readonly>
          <input  class="input" type="text" name="email" value="<?php echo $email = $_GET[email]; ?>" readonly>
          <input  class="input" type="text" name="contact" value="<?php echo $_GET[contactNum]; ?>" readonly>
          <input  class="input" type="text" name="address" value="<?php echo $_GET[address]; ?>" readonly>
          <input style="text-align: center; font-family: Montserrat; width: 50%;" class="input is-primary" type="text" name="SNumber" value="<?php echo $_GET[SerialNumber]; ?>" readonly> </div>
        </div>
      </strong><br>
      HAS BEEN RECEIVED<br>PLEASE CHECK YOU EMAIL FOR MORE INFO<br>
      OR SEND US AN EMAIL AT<br>support@zerterra.com<br><br>





    </div>
    <center>
      PLEASE CLICK CONFIRM
    </section>
    <footer class="modal-card-foot" >
      <a href="../index.php"><button class="button is-success" name="saveRequest" style="font-family: Montserrat;"><i class="far fa-thumbs-up"></i>&nbspCONFIRM</button></a>
    </footer>
  </form>
</div>
</div>
<?php


// }
}

}

include '../PagesFunction/query_request.php';


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
