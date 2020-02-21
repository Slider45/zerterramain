



<div id="delete<?php echo $id; ?>" class="modal" role="dialog">

  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">REMOVE ACCOUNT</p>
      
    </header>
    <form method="POST" class="modal-card-body" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">



      <div class="field">
        <input type="hidden" name="delete_id" value="<?php echo $id; ?>">
        <input type="hidden" name="role_id" value="<?php echo $role; ?>">
      </div>

      <div class="is-danger">Are you Sure you want Delete <strong>
        "<?php echo $fullname;?>"?</strong> </div>
        
        <div style = " margin-bottom: 10px;
        margin-top: 20px;
        margin-right: auto;">

        <button  class="button is-success" name="acnt_remove">
          <i class="fas fa-user-times"></i>&nbspREMOVE</button>
          <button class="button is-danger"><i class="fas fa-ban">
          </i>&nbspCancel</button>


        </div>
      </form>

    </div>
  </div>
</div>