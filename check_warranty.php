<!DOCTYPE html>
<html>
<head>
  <title>Check Warranty</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />

  <link rel="stylesheet" href="dist/css/modal-fx.min.css" />
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>


</head>


<body onload="myFunction();" style="font-family: Montserrat;">
  <div class="pageloader is-bottom-to-top is-active" id="pgloadr"><span class="title"></span></div>



  <div class="modal modal-fx-fall" id="warrantyModal" overflow-y:visible;>
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head is-success">
        <p class="modal-card-title">WARRANTY DETAILS</p>
        <a href="index.php"><button class="delete" id="closeMdl"aria-label="close"></button></a>
      </header>
      <section class="modal-card-body">




        <?php

        include 'PagesFunction/connection.php';

        $serialNum = $_GET['SerialNumber'];


        $sql="SELECT * FROM tblusers WHERE SerialNumber='$serialNum'";
        $result = $con->query($sql);
        if($result->num_rows < 1 ){ ?>

         <div class="notification is-danger alert">
          <center>
           <strong>SERIAL NUMBER NOT REGISTERED.<br>PLEASE CHECK YOUR SERIAL NUMBER!</strong> 
         </center>
       </div>

       <?php
  // $msg = "SERIAL NUMBER NOT REGISTERED. PLEASE CHECK YOUR SERIAL NUMBER!";
     }else{
      while($row = mysqli_fetch_array($result)){



        $serialNum = $row['SerialNumber'];
        $fname = $row['Firstname'];
        $lname = $row['Lastname'];
        $contact = $row['Contact'];
        $email = $row['Email'];
        $Rdays = $row['RemainingDays'];
        $dateRegs = $row['DateRegistered'];
        $dateEnds = $row['DateExpired'];

        ?>
        <div class="notification is-success is-light">

          Serial # : <strong><?php echo $serialNum; ?></strong><br>
          Firstname : <strong><?php echo $fname; ?></strong><br>
          Lastname : <strong><?php echo $lname; ?></strong><br>
          Contact # : <strong><?php echo $contact; ?></strong><br>
          Email : <strong><?php echo $email; ?></strong><br>
          Remaning Warranty Days : <strong><?php echo $Rdays; ?> Days</strong><br>
          Date Registered : <strong><?php echo $dateRegs; ?></strong><br>
          Warranty Expired : <strong><?php echo $dateEnds; ?></strong><br>
          <br>

          For more info just contact as at support@zerterra.com

        </div>

        <?php


      }}
      ?>






    </section>
    <footer class="modal-card-foot" >
      <a href="index.php"><button class="button is-success" style="font-family: Montserrat;"><i class="fas fa-arrow-left"></i>&nbspBACK</button></a>
    </footer>
  </div>
</div>


<script>




 function myFunction() {
  // var pgloader = document.querySelector('#pgloadr');
  // pgloader.classList.add('is-active');

  var warrantyModal = document.querySelector('#warrantyModal');
  var modalCloseBtn = document.querySelector('#closeMdl');
  warrantyModal.classList.add('is-active');
}



</script>
<script type="text/javascript" src="dist/js/modal-fx.min.js"></script>

<script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>

</body>
</html>



