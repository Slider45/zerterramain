<?php

include '../PagesFunction/connection.php';

?>

<style>

  /* header */
  #admin-header{
    font-weight:bold;
  }
  .modal-card-body{
    border-bottom-right-radius: 6px;
    border-bottom-left-radius: 6px;

  }
  .button{
    font-family: 'Montserrat';  
  }

  /* textbox */

  .input{
    border:solid 1px;
    margin-bottom:5px;
    color: #333;
    font-family: 'Montserrat';
  }

</style>
<?php 
$sql = "SELECT id FROM pending_order_list";
$result=mysqli_query($con,$sql);
$pendingCount=mysqli_num_rows($result);
$pendingCount++;


$orderNum=date("Ymd-His-") . 0 .$pendingCount;
?>


<div class="modal" id="myModal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
     <p class="modal-card-title" id="admin-header">ADD PRE-ORDER</p>
     <button class="delete" aria-label="close"></button>
   </header>
   <form method="POST" class="modal-card-body">
     <div class="field">
       <div class="control">
        <input class="input" type="text" name="orderNum" value="<?php echo $orderNum;?>" readonly>
      </div>
      <div class="control">
        <input class="input" type="text" name="fname" placeholder="Firstname" required>
      </div>
      <div class="control">
        <input class="input" type="text" name="lname" placeholder="Lastname" required>
      </div>
      <div class="control">
        <input class="input" type="email" name="email" placeholder="Email " required>
      </div>
      <div class="control">
        <input class="input" type="number" name="contact" placeholder="Contact" required>
      </div>
      <div class="control">
        <input class="input" type="text" name="address" placeholder="Address" required>
      </div>
      
    </div>         
    <button class="button is-success" type="submit" name="preOrder-save"><i class="far fa-save"></i>&nbspSave</button>
  </form>

</div>
</div>

<?php


if(isset($_POST['preOrder-save'])){
  // date_default_timezone_set('Asia/Manila');

    
  $author = $_SESSION['admin'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];
  $dateNow = date("d/m/Y");
 
  //$dateRegs = date('Y-m-d');
  // $newEndingDate = date("Y-m-d", strtotime(date("Y-m-d", strtotime($dateRegs)) . " + 365 day"));
  //$end = date('Y-m-d', strtotime('+1 years'));

  //$endWarranty = $end;

  $sql ="INSERT INTO pending_order_list(OrderNumber,Firstname,Lastname,Email,Contact,Address,Message,is_approved) VALUES ('$orderNum','$fname','$lname','$email','$contact','$address','N/A','0')";

  if($con->query($sql) === TRUE){

   $sqlactionlog = "INSERT INTO tbl_activity_log (AdminName, Description, DateAction) VALUES ('$author','Add new Pre-Order [ $orderNum ]','$dateNow')";
   if($con->query($sqlactionlog)===TRUE){

     $msg='<p class="is-size-4">PRE-ORDER HAS BEEN ADDED</p> ';
     include 'Modals/pending_modal_alert.php';


   }else{
     $msg='<p style="color: red;" class="is-size-4">PRE-ORDER SAVING FAILED! action log</p>';
     include 'Modals/pending_modal_alert.php';


   }
 }else{
   $msg='<p style="color: red;" class="is-size-4">PRE-ORDER SAVING FAILED! query</p>';
   include 'Modals/pending_modal_alert.php';


 }
}
?>


