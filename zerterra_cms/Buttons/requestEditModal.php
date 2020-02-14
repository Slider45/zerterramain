 <div id="editrequest<?php echo $id; ?>" class="modal" role="dialog">
   <div class="modal-background"></div>
   <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">EDIT REQUEST</p>
      <button class="modal-close" aria-label="close"></button>
    </header>
    <form method="POST" class="modal-card-body" style="padding-bottom: 10px;">

      <div class="field">
        <div class="control">
          <div class="field">
            <input type="hidden" name="edit_id" value="<?php echo $id; ?>">
          </div>
        </div>
        <div class="control">
          <input class="input1" type="text" name="serialNum" value="<?php echo $serialNum; ?>" required="" disabled="disabled">
        </div>
        <div class="control">
          <input class="input1" type="text" name="reqeustNum" value="<?php echo $requestNum; ?>" required="" disabled="disabled">
        </div>
        <div class="control">
          <input class="input1" type="text" name="edit_fname" value="<?php echo $fname; ?>" required="">
        </div>
        <div class="control">
          <input class="input1" type="text" name="edit_lname" value="<?php echo $lname; ?>" required="">
        </div>
        <div class="control">
          <input class="input1" type="text" name="edit_email" value="<?php echo $email; ?>" required="">
        </div>
        <div class="control">
          <input class="input1" type="number" name="edit_contact" value="<?php echo $contact; ?>"   required="">
        </div>
        <div class="control">
          <input class="input1" type="email" name="edit_address" value="<?php echo $address; ?>"  required="">
        </div>
        <div class="control" style="margin-top: 10px;">

                       <!-- <div class="select">
                         <select style="width: 1000px; padding-top:5px; border:solid 1px;" name="role"required="">
                          <option >Super Admin</option>
                          <option>Admin</option>
                         </select>
                       </div> -->
                     </div>
                   </div>
                   
                   <button type="submit" name="updated_id" class="button is-success">Save</button>
                   <button class="button is-danger">Cancel</button>

                 </form>

               </div>
             </div>