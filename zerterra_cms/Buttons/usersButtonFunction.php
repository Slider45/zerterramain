<?php
if(isset($_POST['userbtn-save'])){
  // date_default_timezone_set('Asia/Manila');
  $serialNum = $_POST['serialnum'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  // $address = $_POST['address'];
  $contact = $_POST['contact'];
  $dateRegs = date('Y-m-d');
  // $newEndingDate = date("Y-m-d", strtotime(date("Y-m-d", strtotime($dateRegs)) . " + 365 day"));
  $end = date('Y-m-d', strtotime('+1 years'));

  $endWarranty = $end;

  $sql ="INSERT INTO tblusers_list (serial_number,Firstname,Lastname,ContactNumber,email,password,remaining_days,dateRegistered,dateExpired,Hours,Minutes,Seconds,Capacity_Level,Current_Weight,is_active,isEmailConfirmed) VALUES ($serialNum,'$fname','$lname','$contact','$email','$serialNum','365','$dateRegs','$endWarranty','0','0','0','0','0','1','0')";
  if($con->query($sql) === TRUE){
    echo "<script>window.alert('$endWarranty');</script>";
    // echo "<script>window.alert('New User is Added!');</script>";
    // echo '<script>window.location.href="users.php"</script>';
  }else{
    echo "<script>window.alert('Saving new record failed!');</script>";
  }
}

if(isset($_POST['acnt_remove'])){
  $delete_id = $_POST['delete_id'];


  
  $sql= "UPDATE tblusers_list SET is_active='0' WHERE id='$delete_id'";
  if($con->query($sql) === TRUE){
    echo "<script>window.alert('RECORD IS DELETED!');</script>";
    echo '<script>window.location.href="users.php"</script>';
  }else{
    echo "<script>window.alert('SOMETHING WENT WRONG, PLEASE TRY AGAIN!');</script>";
  }
}

if(isset($_POST['updated_user'])){
  $id = $_POST['edit_id'];
  $fname = $_POST['edit_fname'];
  $lname = $_POST['edit_lname'];
  $Email= $_POST['edit_email'];
          // $Address = $_POST['edit_address'];
  $contact = $_POST['edit_contact'];
  
  
  
  $sql = "UPDATE tblusers_list SET Firstname='$fname',Lastname='$lname',email='$Email', ContactNumber='$contact' WHERE id='$id'";
  if($con->query($sql) === TRUE){
    echo "<script>window.alert('RECORD IS UPDATED!');</script>";
    echo '<script>window.location.href="users.php"</script>';
  }else{
    echo "<script>window.alert('SOMETHING WENT WRONG, PLEASE TRY AGAIN!');</script>";
  }
  
}



?>
