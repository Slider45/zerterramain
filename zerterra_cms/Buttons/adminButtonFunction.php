<?php
include 'connection.php';

if(isset($_POST['btn_add_admin'])){
  $author = $_SESSION['admin'];
  $name = $_POST['name'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $contact = $_POST['contact'];
  $Email = $_POST['email'];
  $role = $_POST['role'];
  $dateNow = date('Y/m/d');


  if($password != $cpassword){
    $msg='<p style="color: red;" class="is-size-4">PASSWORD NOT MATCHED<br>PLEASE TRY AGAIN!</p>';
       include 'Modals/remove_admin_alert.php';
 }else{
   $sql = "SELECT * FROM admin_list WHERE Email='$Email'";
   $result = $con->query($sql);
   if($result->num_rows > 0){
    $msg='<p style="color: red;" class="is-size-4">EMAIL ALREADY USED<br>PLEASE TRY AGAIN!</p>';
       include 'Modals/remove_admin_alert.php';
  }else{

    $sql ="INSERT INTO admin_list(Fullname,Password,Contact,Email,Position,is_active) VALUES ('$name','$password','$contact','$Email','$role','1')";
    if($con->query($sql) === TRUE){

  $sqlactionlog = "INSERT INTO tbl_activity_log (AdminName, Description, DateAction) VALUES ('$author','Add New Admin ','$dateNow')";
      if($con->query($sqlactionlog)===TRUE){

      
        $msg='NEW ADMIN IS ADDED!';
        include 'Modals/remove_admin_alert.php';

      }else{

       $msg='<p style="color: red;" class="is-size-4">SAVING NEW RECORD FAILED! action log</p>';
       include 'Modals/remove_admin_alert.php';
     }




   }else{
    $msg='<p style="color: red;" class="is-size-4">SAVING NEW RECORD FAILED! admin list</p>';
    include 'Modals/remove_admin_alert.php';
  }
}
}



}



if(isset($_POST['acnt_remove'])){
  $author = $_POST['adminEmail'];
  $adminName = $_POST['adminName'];
  $delete_id = $_POST['delete_id'];
  $role = $_POST['role_id'];
  $dateNow = date("d/m/Y");

  $adminPass=$_POST['adminpass'];

  $sqlAdmin = "SELECT * FROM admin_list WHERE Email = '". $author ."' AND Password = '" . $adminPass . "' AND is_active = '1'";

  $resultAdmin = mysqli_query($con,$sqlAdmin);
  $admin = mysqli_fetch_array($resultAdmin);

  if($admin){

   if($role ==='Super Admin'){
    // echo "<script>window.alert('THIS RECORD CANNOT BE DELETE!');</script>";

    $msg="THIS RECORD CANNOT BE DELETE!";
    include 'Modals/remove_admin_alert.php';

  }else{

    $sql= "UPDATE admin_list SET is_active='0' WHERE id='$delete_id'"; 
    if($con->query($sql) === TRUE){

      $sqlactionlog = "INSERT INTO tbl_activity_log (AdminName, Description, DateAction) VALUES ('$author','DELETED ADMIN $adminName','$dateNow')";
      if($con->query($sqlactionlog)===TRUE){

        $msg='ADMIN <p style="color: red;" class="is-size-4">'. $adminName . '</p> HAS BEEN DELETED!';
        include 'Modals/remove_admin_alert.php';
  
        $msg='<p style="color: red;" class="is-size-4">SOMETHING WENT WRONG, PLEASE TRY AGAIN!</p>';
        include 'Modals/remove_admin_alert.php';
        
      }
    }
  }

}else{
  $msg='<p style="color: red;" class="is-size-4">INCORRECT PASSWORD!</p>';
  include 'Modals/remove_admin_alert.php';
}


}

if(isset($_POST['updated_id'])){
  $author = $_SESSION['admin'];
  $id = $_POST['edit_id'];
  $name = $_POST['edit_name'];
  $contact = $_POST['edit_contact'];
  $email= $_POST['edit_email'];
  $dateNow = date("d/m/Y");
  
  
  
  $sql = "UPDATE admin_list SET Fullname='$name',Contact='$contact',Email='$email' WHERE id='$id'";
  if($con->query($sql) === TRUE){

   $sqlactionlog = "INSERT INTO tbl_activity_log (AdminName, Description, DateAction) VALUES ('$author',' Edit Admin $name','$dateNow')";
   if($con->query($sqlactionlog)===TRUE){

     $msg='ADMIN <p style="color: red;" class="is-size-4">'. $name . '</p> HAS BEEN EDIT!';
     include 'Modals/remove_admin_alert.php';

   }else{
    $msg='<p style="color: red;" class="is-size-4">SOMETHING WENT WRONG, PLEASE TRY AGAIN!</p>';
    include 'Modals/remove_admin_alert.php';
  }


}else{
  $msg='<p style="color: red;" class="is-size-4">SOMETHING WENT WRONG, PLEASE TRY AGAIN!</p>';
  include 'Modals/remove_admin_alert.php';
}
}
?>