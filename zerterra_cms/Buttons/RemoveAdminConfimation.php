
<?php
session_start();
include '../../PagesFunction/connection.php';
// $orderNum = $_GET['SerialNumber'];
// $fname_order = $_GET['fname_order'];
// $lname_order = $_GET['lname_order'];
// $email_order = $_GET['email_order'];
// $contact_order = $_GET['contact_order'];
// $address_order = $_GET['address_order'];
// $message_order = $_GET['message_order'];

// $sql = "SELECT id FROM pending_order_list";
// $result=mysqli_query($con,$sql);
// $pendingCount=mysqli_num_rows($result);
// $pendingCount++;


// $orderNum=date("Ymd-His-") . 0 .$pendingCount;


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

  <div class="modal" id="confirmationremovemodal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Modal title</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <p class="is-size-1"><?php echo $_GET['role_id'];?></p>
    </section>
    <footer class="modal-card-foot">
      <button class="button is-success">Save changes</button>
      <a href="../admin.php"><button class="button" id="closemodal">Cancel</button></a>
    </footer>
  </div>
</div>


<script>




 function myFunction() {
  // var pgloader = document.querySelector('#pgloadr');
  // pgloader.classList.add('is-active');

  var warrantyModal = document.querySelector('#confirmationremovemodal');
  var modalCloseBtn = document.querySelector('#closemodal');
  warrantyModal.classList.add('is-active');
}



</script>
<script type="text/javascript" src="dist/js/modal-fx.min.js"></script>

<script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>

</body>
</html>
