<?php

include'../connection.php';
$msg="";

if(isset($_POST['confirm_deliver'])){



 $adminName=$_POST['adminName'];
  $password = $_POST['password'];
  $id= $_POST['id'];
  $dateNow = date('Y/m/d');
  $end = date('Y/m/d', strtotime('+1 years'));
  // $date = strtotime($date); 
  // $new_date = strtotime('+ 1 year', $date);



  $sqlAdmin = "SELECT * FROM admin_list WHERE Email = '". $adminName ."' AND Password = '" . $password . "'";
  $resultAdmin = mysqli_query($con,$sqlAdmin);
  $admin = mysqli_fetch_array($resultAdmin);
  if($admin){

   $sql ="SELECT * FROM approved_order_list WHERE id ='$id'";

   $res_data = $con->query($sql);
   while($row = mysqli_fetch_array($res_data)){
     $id = $row['id'];
     $serialNum1 = $row['SerialNumber'];
     $orderNum= $row['OrderNumber'];
     $fname = $row['Firstname'];
     $lname = $row['Lastname'];
     $email = $row['Email'];
     $contact = $row['Contact'];
     $address = $row['Address'];
     $serialNum = trim($serialNum1);



     $sqlUser = "INSERT INTO `tblusers`(`SerialNumber`, `Firstname`, `Lastname`, `Contact`, `Address`, `Email`, `Password`, `RemainingDays`, `DateRegistered`, `DateExpired`, `Hours`, `Minutes`, `Seconds`, `CapacityLevel`, `CurrentWeight`, `is_active`, `is_confirmed`, `token`) VALUES ('$serialNum','$fname','$lname','$contact','$address','$email','$serialNum','365','$dateNow','$end','0','0','0','0','0','1','0','0')";
     if($con->query($sqlUser) === TRUE){

      $sql = "SELECT id FROM tblsales_list";
      $result=mysqli_query($con,$sql);
      $salesCount=mysqli_num_rows($result);
      $salesCount++;


      $transNum=date("Ymd-") . 0 .$salesCount;


      $sqlSales = "INSERT INTO `tblsales_list`( `OrderNumber`, `TransactionNumber`, `Firstname`, `Lastname`, `Email`, `Contact`, `Amount`, `Vat`, `Date_Purchased`) VALUES('$orderNum','$transNum','$fname','$lname','$email','$contact','10000','1200','$dateNow')";

      if($con->query($sqlSales) === TRUE){


        $sqlDelivered = "INSERT INTO delivered_order_list( `OrderNumber`, `SerialNumber`, `Firstname`, `Lastname`, `Email`, `Contact`, `Address`, `is_activated`)VALUES('$orderNum','$serialNum','$fname','$lname','$email','$contact','$address','1')";

        if($con->query($sqlDelivered) === TRUE){


          $sqlupdate ="UPDATE approved_order_list SET is_delivered = '1' WHERE id = '$id'";
          if($con->query($sqlupdate) === TRUE){

            $sqlactionlog = "INSERT INTO tbl_activity_log (AdminName, Description, DateAction) VALUES ('$adminName','Delivered Order to [$orderNum]','$dateNow')";
            if($con->query($sqlactionlog)===TRUE){



              $msg="DELIVERY CONFIRMATION DONE";
        // include 'decline_modal_alert.php';

            }else{

              $msg='<p style="color: red;" class="is-size-4">SOMETHING WENT WRONG,<br> PLEASE TRY AGAIN! action</p>';
        // include 'decline_modal_alert.php';
            }
          }else{
            $msg='<p style="color: red;" class="is-size-4">UNABLE TO UPDATE DATE,<br> PLEASE TRY AGAIN! action</p>';
          }
        }else{

          $msg='<p style="color: red;" class="is-size-4">UNABLE TO SAVE DELIVERED,<br> PLEASE TRY AGAIN!</p>';

        }

      }else{
        $msg='<p style="color: red;" class="is-size-4">UNABLE TO SAVE TRANSACTION, <br>PLEASE TRY AGAIN! action</p>';
      }

    }else{
      $msg='<p style="color: red;" class="is-size-4">SOMETHING WENT WRONG, <br>PLEASE TRY AGAIN! query insert</p>';
      // include 'decline_modal_alert.php';
    }






  // else{
    // $msg='<p style="color: red;" class="is-size-4">INCORRECT PASSWORD!<br> PLEASE TRY AGAIN</p>';
    // include 'decline_modal_alert.php';
  // }


  }
}
else{
 $msg='<p style="color: red;" class="is-size-4">INCORRECT PASSWORD!<br>PLEASE TRY AGAIN</p>';  
}


 
}




?>

<!DOCTYPE html>
<html>
<head>
	<title>Delivery Confirmation</title>
</head>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
<link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
<link rel="icon" href="images/plainlogo.png" type="image/x-icon" />
<link rel="stylesheet" href="../sass/order-conf.css">


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

  #modalbody{
  	border-radius: 0;
  }

</style>

<body onload="myFunction();" style="font-family: Montserrat;">



  <div class="modal modal-fx-fall" id="removeadminModal" overflow-y:visible;>
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head is-success">
        <p class="modal-card-title">DELIVERY CONFIRMED</p>

      </header>
      <section class="modal-card-body" id="modalbody">





        <!-- modal here -->
        <div class="notification is-primary is-light" style = "background-color: #ebfffc;color: #00947e;">
          <center>
           <strong><?php echo $msg?></strong> 
         </center>
       </div>

     </section>
     <footer class="modal-card-foot" >
      <a href="../approved.php"><button class="button is-danger" style="font-family: Montserrat;"><i class="fas fa-arrow-left"></i>&nbspBACK</button></a>
    </footer>
  </div>
</div>




<script>




 function myFunction() {
  // var pgloader = document.querySelector('#pgloadr');
  // pgloader.classList.add('is-active');

  var warrantyModal = document.querySelector('#removeadminModal');
  var modalCloseBtn = document.querySelector('#closeMdl');
  warrantyModal.classList.add('is-active');
}



</script>
<script type="text/javascript" src="dist/js/modal-fx.min.js"></script>

<script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>


</body>
</html>