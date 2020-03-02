<?php

include 'connection.php';

?>

<?php

if(isset($_POST['updated_id'])){
  $author = $_SESSION['admin'];
  $id = $_POST['id'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];
  $dateNow = date('Y/m/d');



  $sql = "UPDATE pending_order_list SET Firstname='$fname',Lastname='$lname',Contact='$contact',Email='$email',Address='$address' WHERE id='$id'";
  if($con->query($sql) === TRUE){
    $sql = "INSERT INTO tblactionlog (Author,Action,DateAction) VALUES ('$author','Edit Pending Order [ $id ] ','$dateNow')";

      if($con->query($sql) === TRUE){
    echo "<script>window.alert('RECORD IS UPDATED!');</script>";
    echo '<script>window.location.href="pending.php"</script>';
  }else{
    echo "<script>window.alert('SOMETHING WENT WRONG, PLEASE TRY AGAIN!');</script>";
  }



}
}

  
if(isset($_POST['btnapproved'])){

  $edit_id = $_POST['edit_id'];

   $_SESSION['id'] = $edit_id;
   
   echo '<script>window.location.href="for_approve.php"</script>';
  
  
  }
// if(isset($_POST['btnapproved'])){
//   $id = $_POST['edit_id'];
//   $orderNum = $_POST['OrderNumber'];
//   $fname = $_POST['edit_fname'];
//   $lname = $_POST['edit_lname'];
//   $email = $_POST['edit_email'];
//   $contact = $_POST['edit_address'];
//   $address = $_POST['edit_contact'];



//   $sql = "UPDATE pending_order_list SET Firstname='$fname',Lastname='$lname', Address='$address' ,Contact='$contact',Email='$email', WHERE id='$id'";
//   if($con->query($sql) === TRUE){


//    $sql ="INSERT INTO approved_order_list(Pending_id,Firstname,Lastname,Email,Contact,Address) VALUES ('$id','$fname','$lname','$email','$address','$contact')";
//    if($con->query($sql) === TRUE){
    
//    }else{
    
//     echo "<script>window.alert('Saving new record failed!');</script>";
//   }

//   echo "<script>window.alert('RECORD IS UPDATED!');</script>";
//   echo '<script>window.location.href="approve.php"</script>';
// }else{
//   echo "<script>window.alert('SOMETHING WENT WRONG, PLEASE TRY AGAIN!');</script>";
// }



//}

?>