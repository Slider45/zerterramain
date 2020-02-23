<?php
include 'connection.php';
?>
<div id="view<?php echo $id; ?>" class="modal" role="dialog">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">CUSTOMER INFORMATION</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <form method="POST" action="pending.php" class="modal-card-body">

     <div class="field">
      <div class="control">
        <div class="field">
          <input type="hidden" name="edit_id" value="<?php echo $id; ?>">
        </div>
      </div>
      <div class="control" >
        <div class="columns">
          <div class="column is-2" id="label">Firstname:</div>
          <div class="column" id="txtbox"><input class="input"   name="edit_fname"  value="<?php echo $fname; ?>" disabled="disabled" ></div>
        </div>

      </div>
      <div class="control">
        <div class="columns">
          <div class="column is-2" id="label">Lastname:</div>
          <div class="column" id="txtbox"> <input class="input"  name="edit_lname" readonly value="<?php echo $lname; ?>"disabled="disabled"></div>
        </div>

      </div>
      <div class="control">
        <div class="columns">
          <div class="column is-2" id="label">Email:</div>
          <div class="column" id="txtbox"><input class="input"  name="edit_email"  readonly value="<?php echo $email; ?>" disabled="disabled"></div>
        </div>

      </div>
      <div class="control">
        <div class="columns">
          <div class="column is-2" id="label">Address:</div>
          <div class="column" id="txtbox"><input class="input"  name="edit_address" readonly value="<?php echo $address; ?>" disabled="disabled"></div>
        </div>

      </div>
      <div class="control">
        <div class="columns">
          <div class="column is-2" id="label">Contact:</div>
          <div class="column" id="txtbox"><input class="input"  name="edit_contact" readonly value="<?php echo $contact; ?>"  disabled="disabled"></div>
        </div>

      </div>
      <div class="control" style="margin-top: 10px;">                  
      </div>
    </div>
    <div style = "margin-right: auto;">
     <button  class="button is-success" name="btnapproved"><i class="far fa-thumbs-up"></i>&nbspAPPROVE</button>
     <button class="button is-danger modal-button"  id="btn_decline" name="btn-delete">
       <i class="fas fa-user-slash"></i>&nbspDECLINED</button>
     </div>
   </form>

 </div>
</div>
</div>

<form action="pending" method="POST" accept-charset="utf-8">

  <div class="container">
    <div id="serv-modal" class="modal">
      <div class="modal-background"></div>
      <div class="modal-content1">
       <div class="modal-card1">
        <header class="modal-card-head1" id="modal-card-head">
         <p class="modal-card-title">SERIAL NUMBER</p>
         <button class="delete" aria-label="close" id="image-modal-close4"></button>
       </header>
       <section class="modal-card-body1" id="modal-card-body">
        <!-- Content ... -->
        <div class="field">
          <div class="control">
            <input class="input1" type="text" placeholder="Enter your Serial Number" required="">
          </div>
        </div>
      </section>
      <footer class="modal-card-foot1" id="modal-card-foot">
        <button class="btn" id="showModal1">Check Warranty</button>
      </footer>
    </div>
  </div>
</div>
</div>

</form>

<script>

 var btn = document.querySelector('#btn_decline');
 var modalDlg2 = document.querySelector('#service-modal');
 var imageModalCloseBtn2 = document.querySelector('#image-modal-close2');
 btn.addEventListener('click', function(){
  modalDlg2.classList.add('is-active');
});

 imageModalCloseBtn2.addEventListener('click', function(){
  modalDlg2.classList.remove('is-active');
});

</script>

