<?php


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
     $serialNum = $row['SerialNumber'];
     $orderNum= $row['OrderNumber'];
     $fname = $row['Firstname'];
     $lname = $row['Lastname'];
     $email = $row['Email'];
     $contact = $row['Contact'];
     $address = $row['Address'];



     $sqlUser = "INSERT INTO `tblusers`(`SerialNumber`, `Firstname`, `Lastname`, `Contact`, `Address`, `Email`, `Password`, `RemainingDays`, `DateRegistered`, `DateExpired`, `Hours`, `Minutes`, `Seconds`, `CapacityLevel`, `CurrentWeight`, `is_active`, `is_confirmed`) VALUES('$serialNum','$fname','$lname','$contact','$address','$email','$serialNum','365','$dateNow','$end','0','0','0','0','0','1','0')";
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

?>