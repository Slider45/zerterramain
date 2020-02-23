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

    <!-- <form method="POST" action="pending.php" > -->
      <div class="modal-card-body">
        <div class="field">

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

          <div class="control">
            <div class="columns">
              <div class="column is-2" id="label">Message:</div>
              <div class="column" id="txtbox"><input class="textarea input"  name="edit_contact" readonly value="<?php echo $Message; ?>"  disabled="disabled"></div>
            </div>
          </div>


          <div class="control" style="margin-top: 10px;">                  
          </div>
        </div>

        <div class="buttons" style="margin-right: auto; margin-bottom: 0rem; margin-top: 20px;">
         <form method="POST" action="pending.php" >
          <input type="hidden" name="orderNum" value="<?php echo $orderNum; ?>"> 
          <input type="hidden" name="edit_id" value="<?php echo $id; ?>">
          <button  class="button is-success" name="btnapproved" style="margin-right: 10px;"><i class="far fa-thumbs-up"></i>&nbspAPPROVE</button>
        </form>
        <button class="button is-danger modal-button"  id="btn_decline" name="btn-delete">
          <i class="fas fa-user-slash"></i>&nbspDECLINED</button> 
        </div>



        <div class="modal" id="modal-decline">
          <div class="modal-background"></div>
          <div class="modal-content">
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  Confirm Password
                </p>

              </header>


              <form  method="POST" accept-charset="utf-8">
                <div class="card-content">
                  <div class="content">
                    <input class="input" type="hidden" value="<?php echo $orderNum; ?>">
                    <input class="input" type="hidden" value="<?php echo $id; ?>">
                    <input class="input" type="password" placeholder="Password" required>
                    <input class="input" type="hidden" value="<?= $_SESSION['admin']?>">
                  </div>
                </div>

                <center>



                  <div class="buttons" style="margin-right: auto;">
                    <button type="submit" class="button is-success" name="confirm_decline" id="confirm"><i class="fas fa-check-circle"></i>&nbspConfirm</button>

                    <button class="button is-danger" id="modal-close-decline"><i class="fas fa-ban"></i>&nbspCancel</button>
                  </div>
                  
                </center>
              </form>
            </div>
          </div>

        </div>



        <!-- </form> -->
      </div>

    </div>
  </div>
</div>

<!-- <script>

 var btn2 = document.querySelector('#btn_decline');
 var modalDlg2 = document.querySelector('#modal1');
 var imageModalCloseBtn2 = document.querySelector('#image-modal-close2');
 btn2.addEventListener('click', function(){
  modalDlg2.classList.add('is-active');
});

 imageModalCloseBtn2.addEventListener('click', function(){
  modalDlg2.classList.remove('is-active');
});

</script> -->

<script>

 var btn1 = document.querySelector('#btn_decline');
 var modalDlg1 = document.querySelector('#modal-decline');
 var imageModalCloseBtn1 = document.querySelector('#modal-close-decline');
 btn1.addEventListener('click', function(){
  modalDlg1.classList.add('is-active');
});

 imageModalCloseBtn1.addEventListener('click', function(){
  modalDlg1.classList.remove('is-active');
});

</script>
