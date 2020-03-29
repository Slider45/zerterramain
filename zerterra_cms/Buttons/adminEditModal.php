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
            
              <div class="column" id="txtbox" style="padding-top:0;">
              <box id="box" style="border:solid 1px; padding-top:11px; padding-bottom:10px;  border-radius:5px;">
              <input placeholder="+63" style="width:40px; height:40px; font-family:Montserrat; border:0; padding-left:6px; border-right:solid 1px;border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;">
    <input minlength="10" maxlength="10" onkeyup="validation()" id="edit_contact"  name="edit_contact" style="width:375px; border:0; padding-left:0;" value="<?php echo $contact; ?>">
               
                </div>
              </box>
            
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

    <button type="submit" id="save1" name="updated_id" class="button is-success">
      <i class="far fa-save"></i>&nbspSave</button>
    <button class="button is-danger"><i class="fas fa-ban"></i>&nbspCancel</button>



  </form>
</div>
</div>


<script type="text/javascript">

function validation(){

var editcontact = document.getElementById('edit_contact').value;

var editcontactpattern = /^(9)\d{9}/;

if(editcontactpattern.test(editcontact)){
   document.getElementById('box').style.borderColor = '#3ec46d';
}else{
  document.getElementById('box').style.borderColor = '#f14668';
}



}




</script>
