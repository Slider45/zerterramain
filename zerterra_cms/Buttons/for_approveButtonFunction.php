<?php 

 if(isset($_POST['saveApprove'])){
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



    $sql="INSERT INTO approved_order_list(OrderNumber, SerialNumber, Firstname, Lastname, Email, Contact, Address) VALUES('$orderNum',' $serialNum','$fname','$lname','$email','$contact','$address')";

    if($con->query($sql) === TRUE){
      $sqlupdate = "UPDATE pending_order_list SET is_approved='1' WHERE id='$id'";
 if($con->query($sqlupdate) === TRUE){
      $sql = "INSERT INTO tblactionlog (Author,Action,DateAction) VALUES ('$author','Approve Order [ $id ] ','$dateNow')";

      if($con->query($sql) === TRUE){

       


       echo '<script>window.location.href="pending.php"</script>';




     }else{
      echo "<script>alert('UNABLE TO UPDATE PLEASE TRY AGAIN LATER!');</script>";
    }

  }else{
   echo "<script>alert('UNABLE TO SAVE PLEASE TRY AGAIN LATER!');</script>";
 }




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

 $sql = "INSERT INTO tblactionlog (Author,Action,DateAction) VALUES ('$author','Approve Order [ $id ] ','$dateNow')";

      if($con->query($sql) === TRUE){



echo '<script>window.location.href="print/printapprove.php"</script>';



}
}

?>






