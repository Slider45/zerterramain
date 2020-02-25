<?php
if(isset($_POST['btn-update'])){

  
  $fname = $_POST['edit_fname'];
  $lname = $_POST['edit_lname'];
  $email= $_POST['edit_email'];
  $eddress = $_POST['edit_address'];
  $contact = $_POST['edit_contact'];

          $sql ="INSERT INTO request_repair_list (FirstName,LastName,email,contact,address) VALUES ('$fname','$lname','$email','$address','$contact')";
          if($con->query($sql) === TRUE){
            echo "<script>window.alert('RECORD IS UPDATED');</script>";
            echo '<script>window.location.href="request.php"</script>';
          }else{
            echo "<script>window.alert('Saving new record failed!');</script>";
          }
        }
    
        if(isset($_POST['acnt_remove'])){
          $delete_id = $_POST['delete_id'];
          
       
  
          $sql= "DELETE FROM request_repair_list WHERE id='$delete_id'";
          if($con->query($sql) === TRUE){
                  echo "<script>window.alert('RECORD IS DELETED!');</script>";
                  echo '<script>window.location.href="request.php"</script>';
                }else{
                  echo "<script>window.alert('SOMETHING WENT WRONG, PLEASE TRY AGAIN!');</script>";
                }
        }
  
        if(isset($_POST['updated_user'])){
          $id = $_POST['edit_id'];
          $fname = $_POST['edit_fname'];
          $lname = $_POST['edit_lname'];
          $Email= $_POST['edit_email'];
          $contact = $_POST['edit_contact'];
          $address = $_POST['edit_address'];
          
  
  
  
          $sql = "UPDATE request_repair_list SET Firstname='$fname',Lastname='$lname',Email='$Email',Address='$address', Contact='$contact' WHERE id='$id'";
          if($con->query($sql) === TRUE){
                  echo "<script>window.alert('RECORD IS UPDATED!');</script>";
                  echo '<script>window.location.href="request.php"</script>';
                }else{
                  echo "<script>window.alert('SOMETHING WENT WRONG, PLEASE TRY AGAIN!');</script>";
                }
  
              }
  
        
  
  ?>
