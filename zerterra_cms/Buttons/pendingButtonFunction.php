<?php
 if(isset($_POST['updated_id'])){
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email= $_POST['email'];
    $Address = $_POST['address'];
    $Contact= $_POST['contact'];
    



    $sql = "UPDATE pending_list SET FirstName='$fname',LastName='$lname',ContactNumber='$Contact',Email='$email',Address='$Address' WHERE id='$id'";
    if($con->query($sql) === TRUE){
      echo "<script>window.alert('RECORD IS UPDATED!');</script>";
      echo '<script>window.location.href="pending.php"</script>';
    }else{
      echo "<script>window.alert('SOMETHING WENT WRONG, PLEASE TRY AGAIN!');</script>";
    }



  }

?>