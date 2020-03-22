<?php 

if(isset($_POST['saveApprove'])){
  $id=$_POST['id'];
  $serialNum =$_POST['serialNum'];

  $sqlSelect="SELECT * FROM pending_order_list WHERE id='$id'";

  $res_data = $con->query($sqlSelect);
  while($row = mysqli_fetch_array($res_data)){
    $id = $row['id'];
    $author = $_SESSION['admin'];
    $orderNum =$row['OrderNumber'];
    $fname =$row['Firstname'];
    $lname =$row['Lastname'];
    $email =$row['Email'];
    $contact =$row['Contact'];
    $address =$row['Address'];
    $dateNow = date('Y/m/d');



    $sql="INSERT INTO approved_order_list(OrderNumber, SerialNumber, Firstname, Lastname, Email, Contact, Address,is_delivered) VALUES('$orderNum',' $serialNum','$fname','$lname','$email','$contact','$address','0')";
    if($con->query($sql) === TRUE){

      $sqlupdate = "UPDATE pending_order_list SET is_approved='1' WHERE id='$id'";
      if($con->query($sqlupdate) === TRUE){

        $sqlactionlog = "INSERT INTO tbl_activity_log (AdminName, Description, DateAction) VALUES ('$author','Approve Order [$orderNum] ','$dateNow')";
        if($con->query($sqlactionlog)===TRUE){




         $msg='<p class="is-size-3">SAVING SUCCESS!</p>';
         include 'Modals/for_approved_modal_alert.php';




       }else{
         $msg='<p class="is-size-3" style="color:red;">UNABLE TO UPDATE PLEASE TRY AGAIN LATER! action log</p>';
         include 'Modals/for_approved_modal_alert.php';

       }

     }else{
       $msg='<p class="is-size-3" style="color:red;">UNABLE TO UPDATE PLEASE TRY AGAIN LATER! </p>';
         include 'Modals/for_approved_modal_alert.php';
     
     }


   }else{
      $msg='<p class="is-size-3" style="color:red;">UNABLE TO UPDATE PLEASE TRY AGAIN LATER!</p>';
         include 'Modals/for_approved_modal_alert.php';
   }
 }
}


if(isset($_POST['printRecord'])){
 $id = $row['id'];
 $author = $_SESSION['admin'];
 $serialNum =$_POST['serialNum'];
 $_SESSION['orderNum'] =  $orderNum;
 $_SESSION['id'] = $id;
 $_SESSION['serialNum'] = $serialNum;
 $dateNow = date("d/m/Y");

 




  echo '<script>window.location.href="print/printapprove.php"</script>';




}

?>






