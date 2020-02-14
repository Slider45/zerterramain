<?php
if(isset($_POST['btn-update'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $reqNo = $_POST['reqNo'];
    $contact = $_POST['contact'];
    $Email = $_POST['email'];

          $sql ="INSERT INTO request_list (FirstName,LastName,email,request_number,email) VALUES ('$fname','$lname','$email','$reqNo','$Email')";
          if($con->query($sql) === TRUE){
            echo "<script>window.alert('New Users is added!');</script>";
            echo '<script>window.location.href="request.php"</script>';
          }else{
            echo "<script>window.alert('Saving new record failed!');</script>";
          }
        }
    
        if(isset($_POST['acnt_remove'])){
          $delete_id = $_POST['delete_id'];
          
       
  
          $sql= "UPDATE request_list SET is_approved='0' WHERE id='$delete_id'";
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
          $Address = $_POST['edit_address'];
          $contact = $_POST['edit_contact'];
  
  
  
          $sql = "UPDATE sales_list SET FirstName='$fname',LastName='$lname',email='$Email',Address='$Address', Contact='$contact' WHERE id='$id'";
          if($con->query($sql) === TRUE){
                  echo "<script>window.alert('RECORD IS UPDATED!');</script>";
                  echo '<script>window.location.href="users.php"</script>';
                }else{
                  echo "<script>window.alert('SOMETHING WENT WRONG, PLEASE TRY AGAIN!');</script>";
                }
  
              }
  
        
  
  ?>
