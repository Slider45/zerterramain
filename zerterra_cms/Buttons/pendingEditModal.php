<?php
include 'connection.php';
?>
<div id="edit<?php echo $id; ?>" class="modal" role="dialog">
 <div class="modal-background"></div>
 <div class="modal-card">
  <header class="modal-card-head">
    <p class="modal-card-title">EDIT ACCOUNT</p>
    <button class="delete" aria-label="close"></button>
  </header>
  <form method="POST" class="modal-card-body" style="padding-bottom: 10px;">

   <div class="field">
    <div class="control">
      <div class="field">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="hidden" name="ordernum" value="<?php echo $orderNum; ?>">
      </div>
    </div>
    <div class="control" >
     <div class="columns">
       <div class="column is-2" id="label">Firstname:</div>
       <div class="column" id="txtbox"><input class="input" type="text"  name="fname"  value="<?php echo $fname; ?>" required=""></div>
     </div>
   </div>
   <div class="control">
    <div class="columns">
     <div class="column is-2" id="label">Lastname:</div>
     <div class="column" id="txtbox"><input class="input" type="text" name="lname" value="<?php echo $lname; ?>" required=""></div>
   </div>
 </div>
 <div class="control">
   <div class="columns">
     <div class="column is-2" id="label">Email:</div>
     <div class="column" id="txtbox"><input class="input" type="email" name="email" value="<?php echo $email; ?>" required=""></div>
   </div>
 </div>
 <div class="control">
   <div class="columns">
     <div class="column is-2" id="label">Address:</div>
     <div class="column" id="txtbox"><input class="input" type="text" name="address" value="<?php echo $address; ?>" required=""></div>
   </div>
 </div>


 <div class="control">
          <div class="columns">
            <div class="column is-2" id="label">Contact:</div>
            
              <div class="column" id="txtbox" style="padding-top:0;">
              <box id="box" style="border:solid 1px; padding-top:11px; padding-bottom:10px;  border-radius:5px;">
              <input placeholder="+63" style="width:40px; height:40px; font-family:Montserrat; border:0; padding-left:6px; border-right:solid 1px;border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;">
    <input class="input"  maxlength="10" onkeyup="validation()" id="edit_contact"  name="edit_contact" style="width:375px; border:0; padding-left:0;" value="<?php echo $contact; ?>">
               
                </div>
              </box>
            
          </div>
        </div>




 <div class="control" style="margin-top: 10px;">

 </div>
</div>

<button type="submit" name="updated_id" class="button is-success"><i class="far fa-save"></i>&nbspSave</button>
<button class="is-danger button" id="closeMdl"><i class="fas fa-ban"></i>&nbspCancel</button>

</form>

</div>
</div>
<script>

  var modalDlg2 = document.querySelector('#edit<?php echo $id; ?>');
  var imageModalCloseBtn2 = document.querySelector('#closeMdl');
  imageModalCloseBtn2.addEventListener('click', function(){
    modalDlg2.classList.remove('is-active');
  });
</script>


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

