<?php
if(isset($_POST['btn-update'])){

  $id = $_POST['edit_id'];
  $fname = $_POST['edit_fname'];
  $lname = $_POST['edit_lname'];
  $email= $_POST['edit_email'];
  $eddress = $_POST['edit_address'];
  $contact = $_POST['edit_contact'];

          $sql ="INSERT INTO request_repair_list (FirstName,LastName,email,contact,address) VALUES ('$fname','$lname','$email','$address','$contact')";
          if($con->query($sql) === TRUE){
          
          $sql = "INSERT INTO tblactionlog (Author,Action,DateAction) VALUES ('$author','Edit Request [ $id ]','$dateNow')";

          if($con->query($sql) === TRUE){
            echo "<script>window.alert('RECORD IS UPDATED');</script>";
            echo '<script>window.location.href="request.php"</script>';
          }else{
            echo "<script>window.alert('Saving new record failed!');</script>";
          }
        }

      }
    
        if(isset($_POST['acnt_remove'])){
         
          $author = $_POST['adminEmail'];
          $adminName = $_POST['adminName'];
          $delete_id = $_POST['delete_id'];
          $dateNow = date("d/m/Y");

          $sqlSelect="SELECT * FROM request_repair_list";
            $res_data = $con->query($sqlSelect);
            while($row = mysqli_fetch_array($res_data)){
          $id = $row['id'];
          $fname = $row['Firstname'];
          $lname = $row['Lastname'];
          
                  
       
  
          $sql= "DELETE FROM request_repair_list WHERE id='$delete_id'";
          if($con->query($sql) === TRUE){
           
          
          $sqlactionlog = "INSERT INTO tbl_activity_log (AdminName, Description, DateAction) VALUES ('$author','DELETED REQUEST [$fname.'  '.$lname]','$dateNow')";
          if($con->query($sqlactionlog)===TRUE){
            $msg='RECORD <p style="color: red;" class="is-size-4">'.  $fname.' '.$lname . '</p> HAS BEEN DELETED!';
            include 'Modals/request_alert.php';
       
          }else{
           $msg='<p style="color: red;" class="is-size-4">SOMETHING WENT WRONG, PLEASE TRY AGAIN!</p>';
           include 'Modals/request_alert.php';
         }
       
       
       }else{
         $msg='<p style="color: red;" class="is-size-4">SOMETHING WENT WRONG, PLEASE TRY AGAIN!</p>';
         include 'Modals/request_alert.php';
       }
       }
    
      }
          
         





        if(isset($_POST['updated_user'])){

          $id = $_POST['edit_id'];
          $author = $_SESSION['admin'];
          $fname = $_POST['edit_fname'];
          $lname = $_POST['edit_lname'];
          $Email= $_POST['edit_email'];
          $contact = $_POST['edit_contact'];
          $address = $_POST['edit_address'];
          $dateNow = date('Y/m/d');
          
  
  
  
          $sql = "UPDATE request_repair_list SET Firstname='$fname',Lastname='$lname',Email='$Email',Address='$address', Contact='$contact' WHERE id='$id'";
          if($con->query($sql) === TRUE){

            $sqlactionlog = "INSERT INTO tbl_activity_log (AdminName, Description, DateAction) VALUES ('$author','REQUEST DETAILS UPDATED [$fname.' '.$lname]','$dateNow')";
            if($con->query($sqlactionlog)===TRUE){
         
          
            $msg='RECORD  <p style="color: red;" class="is-size-4">'.  $fname.' '.$lname . '</p> HAS BEEN UPDATED!';
            include 'Modals/request_alert.php';
       
          }else{
           $msg='<p style="color: red;" class="is-size-4">SOMETHING WENT WRONG, PLEASE TRY AGAIN!</p>';
           include 'Modals/request_alert.php';
         }
       
       
       }else{
         $msg='<p style="color: red;" class="is-size-4">SOMETHING WENT WRONG, PLEASE TRY AGAIN!</p>';
         include 'Modals/request_alert.php';
    

       }
           
  
            } 
          
  
  ?>
