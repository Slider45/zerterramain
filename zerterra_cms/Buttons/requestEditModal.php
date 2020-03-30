
<style type="text/css" media="screen">
 
 button{
   font-family: Montserrat;
 }
 input{
   font-family: Montserrat;
 }
 /* box{
   border-radius: 5px;
   padding-bottom: 9px;
   padding-top: 10px;
   border-bottom: solid 1px;
   border-top: solid 1px;
 } */

</style>



<div id="editrequest<?php echo $id; ?>" class="modal" role="dialog">
<div class="modal-background"></div>
<div class="modal-card">
 <header class="modal-card-head">
   <p class="modal-card-title">EDIT REQUEST</p>
   <button class="modal-close" aria-label="close"></button>
 </header>
 <form method="POST" class="modal-card-body" style="padding-bottom: 10px; border-bottom-right-radius: 6px; border-bottom-left-radius: 6px;">

   <div class="field">
     <div class="control">
       <div class="field">
         <input type="hidden" name="edit_id" value="<?php echo $id; ?>">
       </div>
     </div>
     <div class="control">
       <input class="input" type="hidden" name="serialNum" value="<?php echo $serialNum; ?>">
     </div>
     <div class="control">
       <input class="input" type="hidden" name="requestNum" value="<?php echo $requestNum; ?>">
     </div>
     <div class="control">
       <input class="input" type="text" name="edit_fname" value="<?php echo $fname; ?>" required="">
     </div>
     <div class="control">
       <input class="input" type="text" name="edit_lname" value="<?php echo $lname; ?>" required="">
     </div>
     <div class="control">
       <input class="input" type="email" name="edit_email" value="<?php echo $email; ?>" required="">
     </div>


     <div class="control">
              <box id="box" style="border:solid 1px; padding-top:11px; padding-bottom:10px;  border-radius:5px;">
              <input placeholder="+63" style="width:40px; height:40px; font-family:Montserrat; border:0; padding-left:6px; border-right:solid 1px;border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;">
    <input class="input" maxlength="10" onkeyup="validation()" id="edit_contact" name="edit_contact" style="width:553px; border:0; padding-left:0;" value="<?php echo $contact; ?>">
              </box>
      </div>


     <div class="control">
       <input class="input" type="text" name="edit_address" value="<?php echo $address; ?>"  required="">
     </div>
     <div class="control" style="margin-top: 10px;">

                    </div>
                  </div>
                  
                  <button type="submit" name="updated_user" class="button is-success"><i class="far fa-save"></i> &nbspSave</button>
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