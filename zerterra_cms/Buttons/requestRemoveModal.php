<div id="deleterequest<?php echo $id; ?>" class="modal" role="dialog">

  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">REMOVE ACCOUNT</p>
      <button class="modal-close" aria-label="close"></button>
    </header>

     <form method="POST" class="modal-card-body" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">



<div class="field">
  <input type="hidden" name="delete_id" value="<?php echo $id; ?>">
  <!--<input type="hidden" name="role_id" value=""> --><?php //echo $position; ?>
</div>

<div class="is-danger">Are you Sure you want Delete <strong>
  "<?php echo $fname.' '.$lname;?>"?</strong><br> ENTER YOUR PASSWORD TO CONFIRM

  <!--<input type="hidden" name="adminName" value=""><?php //echo $fullname; ?>-->
  <input type="hidden" name="adminEmail" value="<?php echo $_SESSION['admin']; ?>">

  <input class="input" name="adminpass" type="password" placeholder="Password" required>

</div>



<div style = " margin-bottom: 10px;
margin-top: 20px;
margin-right: auto;">
</form>
<button  class="button is-success" name="acnt_remove">
      <i class="fas fa-user-times"></i>&nbspCONFIRM</button>
      <button class="button is-danger" onclick="cancelevent()"><i class="fas fa-ban">
      </i>&nbspCancel</button></a>


    </div>



   </div>
 </div>
</div>


<script>
  function cancelevent() {
    window.location.href="request.php";
  }
</script>