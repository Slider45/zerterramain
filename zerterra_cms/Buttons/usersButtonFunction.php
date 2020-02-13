<?php
if(isset($_POST['btn-update'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];

          $sql ="INSERT INTO sales_list (FirstName,LastName,email,Address,Contact) VALUES ('$fname','$lname','$email','$address','$contact')";
          if($con->query($sql) === TRUE){
            echo "<script>window.alert('New Users is added!');</script>";
            echo '<script>window.location.href="users.php"</script>';
          }else{
            echo "<script>window.alert('Saving new record failed!');</script>";
          }
        }
    
        if(isset($_POST['acnt_remove'])){
          $delete_id = $_POST['delete_id'];
          
       
  
          $sql= "UPDATE sales_list SET is_active='0' WHERE id='$delete_id'";
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
