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
          <div class="columns"> 
            <div class="column" id="txtbox">
             <p class="control has-icons-right"> <box id="box" style="border:solid 1px; padding-top:11px; padding-bottom:10px;  border-radius:5px;">
              <input placeholder="+63" style="width:40px; height:40px; font-family:Montserrat; border:0; padding-left:6px; border-right:solid 1px;border-top-left-radius: 5px;
              border-bottom-left-radius: 5px;">
              <input  minlength="10" maxlength="10" onkeyup="validation()" placeholder="Contact"  id="edit_contact" name="contact" style="width:413px; border:0;">
            </box>
            <span class="icon is-medium is-right">
              <i class="fas fa-check" id="iconcheck2" style="display: none;color: #48c774;"></i>
              <i class="fas fa-times" id="icontimes2" style="display:none;color:#f14668;"></i>
              <p id="lblwarning2" style="text-align: center; color:#f14668;" class="is-size-7"></p>
            </span>
            <p id="lblwarning2" style="text-align: center" class="is-size-7"></p>
          </div>
          
        </div>
      </div>

      <div class="control">
        <input class="input" type="text" name="address" placeholder="Address" required>
      </div>
      
    </div>         
    <button class="button is-success" type="submit" id="save5" name="preOrder-save"><i class="far fa-save"></i>&nbspSave</button>
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


<script type="text/javascript">
 function cancelevent() {
  window.location.href="pending.php";
}

function validation(){

  var editcontact = document.getElementById('edit_contact').value;
  var btn = document.getElementById('save5');
  var wrning = document.getElementById('lblwarning2');
  var checkicon = document.getElementById('iconcheck2');
  var erroricon = document.getElementById('icontimes2');

  var editcontactpattern = /^(9)\d{9}/;

  if(editcontactpattern.test(editcontact)){
   document.getElementById('box').style.borderColor = '#3ec46d';
   btn.disabled = false;
   wrning.innerHTML="";
   checkicon.style.display = "block";
   erroricon.style.display = "none";
   
 }else{
  document.getElementById('box').style.borderColor = '#f14668';
  btn.disabled = true;
  wrning.innerHTML="INVALID NUMBER";
  checkicon.style.display = "none";
  erroricon.style.display = "block";
  
}

}
</script>
