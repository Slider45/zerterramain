<script>

</script>


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
        <input class="input" type="text" name="serialnum" readonly value="<?php echo $orderNum;?>">
      </div>
      <div class="control">
        <input class="input" type="text" name="fname" placeholder="Firstname" required="">
      </div>
      <div class="control">
        <input class="input" type="text" name="lname" placeholder="Lastname" required="">
      </div>
      <div class="control">
        <input class="input" type="email" name="email" placeholder="Email " required="">
      </div>
      <div class="control">
        <input class="input" type="number" name="contact" placeholder="Contact" required="">
      </div>
      
    </div>         
    <button  id="notif" type="submit" class="button is-success"  name="preOrder-save"><i class="far fa-save"></i>&nbspSave</button>
  </form>

</div>
</div>

<?php


if(isset($_POST['preOrder-save'])){
  // date_default_timezone_set('Asia/Manila');

  //$serialNum = $_POST['serialnum'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  // $address = $_POST['address'];
  $contact = $_POST['contact'];
  //$dateRegs = date('Y-m-d');
  // $newEndingDate = date("Y-m-d", strtotime(date("Y-m-d", strtotime($dateRegs)) . " + 365 day"));
  //$end = date('Y-m-d', strtotime('+1 years'));

  //$endWarranty = $end;

  $sql ="INSERT INTO pending_order_list(OrderNumber,Firstname,Lastname,Email,Contact,Address) VALUES ($orderNum,$fname,$lname,$email,$contact)";
  if($con->query($sql) === TRUE){
    echo "<script>window.alert('PRE-ORDER HAS BEEN ADDED');</script>";
    
  }else{
    echo "<script> var btn = document.querySelector('#notif');
    var modalnotif = document.querySelector('#notifmodal');
    var imageModalCloseBtn2 = document.querySelector('#closeNotif');
    btn.addEventListener('click', function(){
      modalnotif.classList.add('is-active');
      });

      imageModalCloseBtn2.addEventListener('click', function(){
        modalnotif.classList.remove('is-active');
      });</script>";

  // echo "<script>window.alert('Saving Pre-Order failed!');</script>";
    }
  }

  ?>
  <script>




 /* $('#myForm').on('submit', function(e){
    $('#thankyouModal').modal('show');

  });*/


</script>


<!-- <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Thank you for pre-registering!</h4>
      </div>
      <div class="modal-body">
        <p>Thanks for getting in touch!</p>                     
      </div>    
    </div>
  </div>
</div> -->