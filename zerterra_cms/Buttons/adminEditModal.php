<style>

  button{
    font-family: unset;
    align-items: center;
 
  }

  box{
    border-radius: 5px;
    padding-bottom: 9px;
    padding-top: 10px;
    border-bottom: solid 1px;
    border-top: solid 1px;
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
        <div class="columns">
              <div class="column is-2" id="label">Fullname:</div>
              <div class="column" id="txtbox"><input class="input" type="text" name="edit_name" style="width:459px;" value="<?php echo $fullname; ?>" required=""></div>
        </div>
      </div>
      <div class="control">
        <div class="columns">
              <div class="column is-2" id="label">Contact:</div>
              <div class="column" id="txtbox" ><box><input type="text" disabled="disabled" style="width:45px; padding-top: 8px;padding-left:6px;padding-bottom: 6px; font-family: Montserrat; border-bottom-left-radius:5px;border-top-left-radius:5px; border:solid 1px;" placeholder="+63">

                <input class="input" type="text" name="edit_contact" style="width: 415px;border-left:0;padding-left:3px;border-bottom-left-radius:0;border-top-left-radius:0;" maxlength="10" minlength="10" value="<?php echo $contact; ?>"   required="">
             </box> </div>
             
        </div>
      </div>
      <div class="control">
           <div class="columns">
              <div class="column is-2" id="label">Email:</div>
              <div class="column" id="txtbox"><input class="input" type="email" name="edit_email" style="width:459px;" value="<?php echo $email; ?>"  required=""></div>
           </div>
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

