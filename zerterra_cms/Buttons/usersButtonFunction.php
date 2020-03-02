<?php


if(isset($_POST['acnt_remove'])){
  $author = $_SESSION['admin'];
  $delete_id = $_POST['delete_id'];
  $dateNow = date('Y/m/d');

  
  $sql= "UPDATE tblusers SET is_active='0' WHERE id='$delete_id'";
  if($con->query($sql) === TRUE){

    $sql = "INSERT INTO tblactionlog (Author,Action,DateAction) VALUES ('$author','Users Deleted','$dateNow')";

    if($con->query($sql) === TRUE){
    echo "<script>window.alert('RECORD IS DELETED!');</script>";
    echo '<script>window.location.href="users.php"</script>';
  }else{
    echo "<script>window.alert('SOMETHING WENT WRONG, PLEASE TRY AGAIN!');</script>";
  }
}
}
if(isset($_POST['updated_user'])){
  $author = $_SESSION['admin'];
  $id = $_POST['edit_id'];
  $fname = $_POST['edit_fname'];
  $lname = $_POST['edit_lname'];
  $Email= $_POST['edit_email'];
          // $Address = $_POST['edit_address'];
  $contact = $_POST['edit_contact'];
  $dateNow = date('Y/m/d');
  
  
  
  $sql = "UPDATE tblusers SET Firstname='$fname',Lastname='$lname',Email='$Email', Contact='$contact' WHERE id='$id'";
  if($con->query($sql) === TRUE){

    $sql = "INSERT INTO tblactionlog (Author,Action,DateAction) VALUES ('$author','Users Record Updated','$dateNow')";

      if($con->query($sql) === TRUE){

    echo "<script>window.alert('RECORD IS UPDATED!');</script>";
    echo '<script>window.location.href="users.php"</script>';
  }else{
    echo "<script>window.alert('SOMETHING WENT WRONG, PLEASE TRY AGAIN!');</script>";
  }
  
}

}

?>
