<?php


if(isset($_POST['acnt_remove'])){
  $author = $_POST['adminEmail'];
  $adminPass=$_POST['adminpass'];


  $username = $_POST['username'];
  $delete_id = $_POST['delete_id'];
  $dateNow = date('Y/m/d');


  $sqlAdmin = "SELECT * FROM admin_list WHERE Email = '". $author ."' AND Password = '" . $adminPass . "' AND is_active = '1'";

  $resultAdmin = mysqli_query($con,$sqlAdmin);
  $admin = mysqli_fetch_array($resultAdmin);

  if($admin){

    $sql= "UPDATE tblusers SET is_active='0' WHERE id='$delete_id'";
    if($con->query($sql) === TRUE){

     $sqlactionlog = "INSERT INTO tbl_activity_log (AdminName, Description, DateAction) VALUES ('$author','User [$username] is deleted ','$dateNow')";
     if($con->query($sqlactionlog)===TRUE){

      $msg='<p class="is-size-3">RECORD IS DELETED!</p>';
      include 'Modals/user_modal_alert.php';


    }else{

      $msg='SOMETHING WENT WRONG, PLEASE TRY AGAIN!';
      include 'Modals/user_modal_alert.php';
    }
  }
}else{
  $msg='<p style="color: red;" class="is-size-4">INCORRECT PASSWORD!</p>';
  include 'Modals/user_modal_alert.php';

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
  $username = $fname . " " . $lname;
  
  
  $sql = "UPDATE tblusers SET Firstname='$fname',Lastname='$lname',Email='$Email', Contact='$contact' WHERE id='$id'";
  if($con->query($sql) === TRUE){

    $sqlactionlog = "INSERT INTO tbl_activity_log (AdminName, Description, DateAction) VALUES ('$author','Update [$username]','$dateNow')";
    if($con->query($sqlactionlog)===TRUE){

     $msg='<p class="is-size-3">RECORD IS UPDATED!</p>';
     include 'Modals/user_modal_alert.php';


     
   }else{
     $msg='SOMETHING WENT WRONG, PLEASE TRY AGAIN!';
     include 'Modals/user_modal_alert.php';
   }

 }else{
   $msg='SOMETHING WENT WRONG, PLEASE TRY AGAIN!';
   include 'Modals/user_modal_alert.php';
 }

}

?>
