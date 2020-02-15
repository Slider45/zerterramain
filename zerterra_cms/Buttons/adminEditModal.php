<style>

  button{
    font-family: unset;
    align-items: center;
 
  }

</style>

<div id="edit<?php echo $id; ?>" class="modal" role="dialog">
 <div class="modal-background"></div>
 <div class="modal-card">
  <header class="modal-card-head">
    <p class="modal-card-title">EDIT ACCOUNT</p>
    <!-- <button class="modal-close" aria-label="close"></button> -->
  </header>
  <form method="POST" class="modal-card-body" style="padding-bottom: 10px;">

    <div class="field">
      <div class="control">
        <div class="field">
          <input type="hidden" name="edit_id" value="<?php echo $id; ?>">
        </div>
      </div>
      <div class="control">
        <input class="input" type="text" name="edit_name" value="<?php echo $name; ?>" required="">
      </div>
      <div class="control">
        <input class="input" type="number" name="edit_contact" value="<?php echo $contact; ?>"   required="">
      </div>
      <div class="control">
        <input class="input" type="email" name="edit_email" value="<?php echo $Email; ?>"  required="">
      </div>
      <div class="control" style="margin-top: 10px;">
      </div>
    </div>
    <!-- END OF MODAL EDIT -->

    <button type="submit" name="updated_id" class="button is-success">
      <i class="far fa-save"></i>&nbspSave</button>
    <button class="button is-danger"><i class="fas fa-ban"></i>&nbspCancel</button>



  </form>
</div>
</div>

