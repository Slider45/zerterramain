<?php

if(isset($_POST['btnapproved'])){
  $fname = $_POST['efname'];
  $lname = $_POST['elname'];
  $email = $_POST['eemail'];
  $Contact = $_POST['econtact'];
  $Address = $_POST['eaddress'];
  $Message = $_POST['emessage'];




  $sql = "UPDATE pending_list SET FirstName='$fname',LastName='$lname',Message='$Message', Address='$Address' ,ContactNumber='$Contact',Email='$email', is_pending='1' WHERE id='$id'";
  if($con->query($sql) === TRUE){


   $sql ="INSERT INTO approve_list(pendingID,FirstName,LastName,Email,ContactNumber,Address,Message) VALUES ('$id','$fname','$lname','$email','$Address','$Contact','$Message')";
   if($con->query($sql) === TRUE){
    
   }else{
    
    echo "<script>window.alert('Saving new record failed!');</script>";
  }

  echo "<script>window.alert('RECORD IS UPDATED!');</script>";
  echo '<script>window.location.href="pending.php"</script>';
}else{
  echo "<script>window.alert('SOMETHING WENT WRONG, PLEASE TRY AGAIN!');</script>";
}



}

?>